<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('category')->latest()->get();
        return view('pages.admin.project.index', compact('projects'));
    }
    public function indexLanding()
    {
        $projects = Project::with('category')->latest()->get();
        return view('pages.project.index', compact('projects'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = \Str::slug($data['name']);

        DB::beginTransaction();
        try {
            $project = Project::create($data);
            $project->urls()->createMany([
                ['name' => 'Github', 'url' => $data['github']],
                ['name' => 'Project', 'url' => $data['url']],
            ]);
            if ($request->hasFile('image')) {
                $project->addMediaFromRequest('image')->toMediaCollection('images');
            }

            DB::commit();
            return redirect()->route('project.index')->with('success', 'Project created successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('pages.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
