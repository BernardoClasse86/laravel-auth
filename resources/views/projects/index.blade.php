@extends('layouts.app')

@section('content')

    <div class="container pt-5 text-center">

        <h1>Welcome {{Auth::user()->name}}! These are your Projects</h1>

    </div>

    <div class="container-xxl pt-3 d-flex flex-row-reverse">

        <a class="btn btn-primary" href="{{route('projects.create')}}">Add a new Project</a>

    </div>

    <div class="container-xxl mt-5">

        <table class="table table-bordered fs-6">

            <thead class="text-center">

                <tr>

                    <th>id</th>
                    <th>title</th>
                    <th>client name</th>
                    <th>project url</th>
                    <th style="width: 120px">project data</th>
                    <th>slug</th>
                    <th>project link</th>
                    <th>project edit</th>

                </tr>

            </thead>

            <tbody>

                @forelse ($projects as $project)

                <tr>

                    <td>{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->client_name}}</td>
                    <td>{{$project->project_url}}</td>
                    <td>{{$project->project_date}}</td>
                    <td>{{$project->slug}}</td>
                    <td><a class="btn btn-sm btn-secondary" href="{{route('projects.show', $project)}}">Project Link</a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('projects.edit', $project)}}">Edit Project</a></td>

                </tr>

                @empty

                <div class="container text-center pb-4">
                    <h2>There are no projects here, please make a new one.</h2>
                </div>

                <div class="container text-center pb-4">
                    <a class="btn btn-success" href="{{route('projects.create')}}">Add a new project</a>
                </div>
                    
                @endforelse

            </tbody>

        </table>

    </div>

@endsection