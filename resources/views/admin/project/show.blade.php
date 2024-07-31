@extends('layouts.app')
@section('content')

<div class="col-12 container p-5">
    <div class="card col-12">
        <div class="card-body">
        <h5 class="card-title">Titolo: {{$project->title}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Id: {{$project->id}}</h6>
        <p class="card-text">Titolo: {{$project->title}} </p>

        <p>descrizione: {{$project->description}} </p>
        <p> date: {{$project->date}} </p>
        <img class="img-fluid" src="{{$project->image}}" alt="{{$project->title}}">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary card-link">Mostra tutti i progetti</a>
        </div>
    </div>
</div>
