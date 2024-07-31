@extends('layouts.form-layout')

@section('titolo')
aggiungi un Progetto
@endsection


@section('route')
{{ route('admin.projects.store') }}
@endsection



@section('method')
@method('POST')
@endsection
