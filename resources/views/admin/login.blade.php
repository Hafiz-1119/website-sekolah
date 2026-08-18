@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')

<div class="login-page">

    <div class="login-card">

        {{-- HEADER LOGIN --}}
        <div class="login-header">

            <div class="login-icon">
                SMP
            </div>

            <h1>Login Admin</h1>

            <p>
                Silakan masuk untuk mengelola website sekolah.
            </p>

        </div>


        {{-- PESAN ERROR --}}
        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif


        {{-- FORM LOGIN --}}
        <form action="{{ route('admin.authenticate') }}" method="POST">

            @csrf

            {{-- EMAIL --}}
            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >

            </div>


            {{-- PASSWORD --}}
            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>


            {{-- TOMBOL LOGIN --}}
            <button type="submit" class="login-button">
                Masuk
            </button>

        </form>


        {{-- KEMBALI KE HOME --}}
        <div class="back-home">

            <a href="{{ route('home') }}">
                ← Kembali ke Beranda
            </a>

        </div>

    </div>

</div>

@endsection


@section('styles')

<style>

    /* ================= LOGIN PAGE ================= */

    .login-page {
        min-height: 600px;

        display: flex;
        justify-content: center;
        align-items: center;

        padding: 70px 20px;

        background: #f5f7fa;
    }


    /* ================= LOGIN CARD ================= */

    .login-card {
        width: 100%;
        max-width: 450px;

        background: white;

        padding: 40px;

        border-radius: 15px;

        box-shadow:
            0 8px 30px rgba(0, 0, 0, 0.08);
    }


    /* ================= HEADER ================= */

    .login-header {
        text-align: center;

        margin-bottom: 30px;
    }


    .login-icon {
        width: 65px;
        height: 65px;

        margin: 0 auto 18px;

        border-radius: 50%;

        background: #123c69;
        color: white;

        display: flex;
        align-items: center;
        justify-content: center;

        font-weight: bold;
        font-size: 17px;
    }


    .login-header h1 {
        color: #123c69;

        font-size: 30px;

        margin-bottom: 8px;
    }


    .login-header p {
        color: #6b7280;

        font-size: 14px;
    }


    /* ================= ERROR ================= */

    .error-message {
        background: #fee2e2;

        color: #b91c1c;

        padding: 12px 15px;

        border-radius: 8px;

        margin-bottom: 20px;

        font-size: 14px;
    }


    /* ================= FORM ================= */

    .form-group {
        margin-bottom: 20px;
    }


    .form-group label {
        display: block;

        margin-bottom: 8px;

        color: #123c69;

        font-weight: bold;
    }


    .form-group input {
        width: 100%;

        padding: 13px 15px;

        border: 1px solid #d1d5db;

        border-radius: 8px;

        font-size: 15px;

        outline: none;

        transition: 0.3s;
    }


    .form-group input:focus {
        border-color: #123c69;

        box-shadow:
            0 0 0 3px rgba(18, 60, 105, 0.1);
    }


    /* ================= LOGIN BUTTON ================= */

    .login-button {
        width: 100%;

        border: none;

        background: #123c69;

        color: white;

        padding: 14px;

        border-radius: 8px;

        font-size: 16px;

        font-weight: bold;

        cursor: pointer;

        transition: 0.3s;
    }


    .login-button:hover {
        background: #0d2e50;
    }


    /* ================= BACK HOME ================= */

    .back-home {
        text-align: center;

        margin-top: 25px;
    }


    .back-home a {
        color: #123c69;

        font-size: 14px;

        font-weight: bold;
    }


    .back-home a:hover {
        text-decoration: underline;
    }


    /* ================= RESPONSIVE ================= */

    @media (max-width: 480px) {

        .login-card {
            padding: 30px 20px;
        }

        .login-header h1 {
            font-size: 26px;
        }

    }

</style>

@endsection