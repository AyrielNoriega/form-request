@extends('layout.layout')

@section('title', 'crear role')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Crear Role</h3>
            @if (session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                
                <strong>Holy!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="col-md-6  mx-auto">
            
            <form
                method="POST"
                action="{{ route('role.save') }}"
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>

@endsection
