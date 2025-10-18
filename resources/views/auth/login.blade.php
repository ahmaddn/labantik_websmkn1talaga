@extends('layouts.auth') {{-- ganti dari layouts.app ke layouts.auth --}}

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card auth-card shadow-lg border-0 p-4" style="max-width: 450px; width: 100%;">
        <div class="text-center mb-4">
            <img src="https://smkn1talaga-mjl.net/img/logosmk.png" height="60" alt="Logo SMKN 1 Talaga">
            <h4 class="mt-2 fw-bold">Login Admin</h4>
        </div>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-primary w-100">Login</button>
        </form>
        <div class="text-center mt-3">
            <small>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></small>
        </div>
    </div>
</div>
@endsection
