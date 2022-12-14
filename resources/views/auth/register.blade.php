@extends('layouts.app')

@section('titulo')
    Regístrate en Devstagram
@endsection

@section('contenido')
    <form method="POST" action="{{route('register')}}">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Tu Nombre" value="{{old('name')}}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" value="{{old('email')}}">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="username" value="{{old('username')}}">
            @error('username')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" value="{{old('password')}}">
            @error('password')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirmar Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Password" value="{{old('password_confirmation')}}">
        </div>
        <div>
            <input type="submit" value="Crear Cuenta">
        </div>
    </form>
@endsection
