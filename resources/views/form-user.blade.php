@extends('layout.layout')

@section('title', 'Formulario usuario')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <h2>
                Crear usuario
            </h2>
            <a href="/" class="btn btn-primary">
                Ver listado de usuarios
            </a>
            @if (session('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    
                    <strong>Holy!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="col-md-6  mx-auto">
                
                <form
                    method="POST"
                    action="{{ route('user.save') }}"
                >
                    @csrf
                    {{-- @method('POST') --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}" aria-describedby="emailHelp">
                        @error('name')
                            <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">LastName</label>
                        <input type="lastname" class="form-control" id="lastname"  name="lastname" value="{{ old('lastname') }}"  aria-describedby="emailHelp">
                        @error('lastname')
                            <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" aria-describedby="emailHelp">
                        @error('age')
                            <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email"  name="email" value="{{ old('email') }}"  aria-describedby="emailHelp">
                        @error('email')
                            <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
