@extends('layouts.app')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="col-auto">
                    <h1>page show</h1>
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
                        <tr class="p-3">
                            <td>{{$project->id}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->slug}}</td>
                            <td>{{$project->content}}</td>
                        </tr>    
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection