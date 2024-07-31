@extends('layouts.app')


@section('content')

<h1 class="text-center fw-bolder p-5 ">@yield('titolo')</h1>

<div class="container">
    <div class="row justify-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )

                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>

        @endif
        <form action="@yield('route')" method="POST">
            @yield('method')

            @csrf

            <div class="mb-3">

              <label for="title" class="form-label">title</label>

              <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{ old('title',$project->title) }}">

            </div>

            <div class="mb-3">

                <label for="date" class="form-label">date</label>

                <input type="date" class="form-control" id="date" aria-describedby="date" name="date" value="{{ old('date', $project->date) }}">

              </div>



            <div class="mb-3">

                <label for="date" class="form-label">Descrizione</label>

                <input type="description" class="form-control" id="description" aria-describedby="description" name="description" value="{{ old('description',$project->description) }}">

              </div>


              <div class="mb-3">

                <label for="specie" class="form-label">Img</label>

                <input type="text" class="form-control" id="image" aria-describedby="image" name="image" value="{{ old('image',$project->image) }}">

              </div>


            <button type="submit" class="btn btn-primary">Submit</button>

            <a href="{{ Route('admin.projects.index') }}" class="btn btn-secondary">Torna alla lista</a>
          </form>

    </div>
</div>

@endsection
