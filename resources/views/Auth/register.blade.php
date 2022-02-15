@extends('layout')
@section('content')
    <form method="POST" action="{{route('register')}}">
        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input name="name" value="" required class="form-control">

        </div>

        <div class="form-group">
            <label for="">E-mail</label>
            <input name="e-mail" value="" required class="form-control">

        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input name="password" value="" required class="form-control">

        </div>

        <div class="form-group">
            <label for="">Retype Password</label>
            <input name="pasword_confirmation" value="" required class="form-control">
    </form>
@endsection('content')
