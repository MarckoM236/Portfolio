<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        /* $datos=[
            ['title'=>'proyecto #1'],
            ['title'=>'proyecto #2'],
            ['title'=>'proyecto #3'],
            ['title'=>'proyecto #4'],
        ]; */
        $datos=Project::latest()->paginate();

        return view('projects.index',['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project=new Project();
        return view('projects.create',[
            'project'=> $project,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','Proyecto Creado Exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //$datos=Project::findOrFail($project);
       return view('projects.show',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show',$project)->with('status','Proyecto Actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','Se elimino el proyecto exitosamente');
    }
}
