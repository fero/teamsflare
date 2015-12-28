<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teamsflare\Transformers\ProjectTransformer;
use Illuminate\Support\Facades\Input;

class ProjectsController extends ApiController
{

    /**
     * @var \App\Teamsflare\Transformers\ProjectTransformer
     */
    protected $projectTransformer;

    /**
     * ProjectsController constructor.
     * @param ProjectTransformer $projectTransformer
     */
    public function __construct(ProjectTransformer $projectTransformer) {
        $this->projectTransformer = $projectTransformer;

        $this->middleware("auth.basic", ['only' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $projects = Project::all();
        return $this->respond([
            'data' => $this->projectTransformer->transformCollection($projects->toArray())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( ! Input::get("name") || ! Input::get("description")) {
            return $this->respondValidationFailed("Parameters failed validation for a project.");
        }

        Project::create(Input::all());

        return $this->respondCreated("Project successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return mixed
     */
    public function show($id)
    {
        $project = Project::find($id);

        if ( ! $project)
        {
            return $this->respondNotFound("Project does not exist");
        }

        return $this->respond([
            'data' => $this->projectTransformer->transform($project)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
