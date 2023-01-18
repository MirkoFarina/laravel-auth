@extends('layouts.admin')

@section('title')
    | PROJECTS
@endsection

@section('content')
    <div class="container secondary-color">
        <div class="text-center">
            <h1>
                TABELLA PROGETTI
            </h1>
            <a class="btn btn-success" href="">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <table class="table table-dark table-striped mt-5 box-edit">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">CLIENT NAME</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row"> {{ $project->id }} </th>
                        <td> {{ $project->name }} </td>
                        <td> {{ $project->client_name }} </td>
                        <td>
                            <a class="btn btn-primary" href=" {{ route('admin.project.show', $project) }} ">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="btn btn-warning" href="">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger" href="">
                                <i class="fa-solid fa-trash-arrow-up"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $projects->links() }}
        </div>
    </div>
@endsection
