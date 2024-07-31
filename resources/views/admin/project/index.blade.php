@extends('layouts.app')
@section('content')

<div class="col-12 container p-5">
    <a href="{{ route('admin.projects.create') }}" class="btn btn-secondary text-center">aggiungi un progetto</a>

    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">titolo</th>
            <th scope="col">date</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>

        @foreach ($projects as $project)
            <tbody>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->date}}</td>

                <td> <a href="{{ Route('admin.projects.show', $project) }}" class="btn btn-primary">Scopri di più</a> </td>
                 <td> <a href="{{ Route('admin.projects.edit', $project) }}" class="btn btn-success">Modifica</a> </td>
                <td><form action="{{ Route('admin.projects.destroy', $project) }}"  method="POSt" class="d-inline-block">

                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-warning">Elimina</button>

                </form></td>
        @endforeach

            </tbody>



    </table>

</div>

@endsection


