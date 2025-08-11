<!-- filepath: resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #CAD5E2; 
    }
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        border-top: 8px solid #1F49E0; 
    }
    h1 {
        text-align: center;
        color: #0E2167;
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
        color: #0E2167;
    }
    .form-control:focus {
        border-color: #1F49E0;
        box-shadow: 0 0 0 0.2rem rgba(31, 73, 224, 0.25);
    }
    .btn-login {
        background-color: #1F49E0;
        color: white;
        font-weight: bold;
        border-radius: 8px;
        width: 100%;
    }
    .btn-login:hover {
        background-color: #0E2167;
    }
</style>

<div class="login-container">
    <h1>Iniciar Sesión</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-login">Ingresar</button>
    </form>
</div>
@endsection
