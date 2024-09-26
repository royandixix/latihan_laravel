@extends('layouts.main')

@section('title', 'Halaman Login')

@section('container')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm" style="width: 24rem;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Login</h2>

            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Masukan Username Anda</label>
                    <input type="text" id="username" class="form-control" placeholder="Username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Masukan Password Anda</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>





@endsection
