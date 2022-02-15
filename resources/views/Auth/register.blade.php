@extends('layout')
@section('content')
    <form method="POST" action="{{route('register')}}">
        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input name="name" value="{{old('name')}}" required class="form-control">

        </div>

        <div class="form-group">
            <label for="">E-mail</label>
            <input name="e-mail" value="{{old('email')}}" required class="form-control">

        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input name="password" required class="form-control">

        </div>

        <div class="form-group">
            <label for="">Retype Password</label>
            <input name="pasword_confirmation"  required class="form-control">

        </div>

        <button type="submit" class="btn btn-primary btn-block">Register</button>

    </form>
@endsection('content')
