@extends('layouts.app')

@section('title', 'index')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="col-auto">
                    <h1>page index</h1>
                </div>
            </div>
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>content</th>
                    </tr>
                    </thead>
                    <tbody  class="table-group-divider table-hover table-striped">
                    @foreach ($projects as $project)
                        <tr class="p-3">
                            <td>{{$project->id}}</td>
                            <td><a href="{{route('admin.projects.show', $project)}}"> {{$project->title}} </a></td>
                            <td>{{$project->slug}}</td>
                            <td>{{$project->content}}</td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection