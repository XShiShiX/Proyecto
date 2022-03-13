@extends('layouts.adminegg')

@section('content')

    <h2>Create User</h2>

    <form action="/users" method="POST">

        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input id="email" name="email" type="text" class="form-control" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input id="password" name="password" type="text" class="form-control" tabindex="1">
        </div>

        <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>

@endsection
