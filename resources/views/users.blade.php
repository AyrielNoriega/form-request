@extends('layout')

@section('title', 'Listado de usuarios')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Listado de usuarios</h2>
            <a href="{{ route('form.user') }}" class="btn btn-primary">
                Crear usuario
            </a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->age }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection

