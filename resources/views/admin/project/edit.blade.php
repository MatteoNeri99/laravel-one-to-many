@extends('layouts.form-layout')

@section('titolo')
modifica {{$project->title}}
@endsection


@section('route')
{{ route('admin.projects.update', $project) }}
@endsection



@section('method')
@method('PUT')
@endsection
