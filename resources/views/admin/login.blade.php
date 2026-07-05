@extends('admin.layouts.guest')

@section('title')
    管理員ログイン
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card border-0 shadow">
                <div class="card-body p-4">
                    <h3 class="card-title text-center mb-4">管理員ログイン画面</h3>
                    
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold" for="username">ユーザー名</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="ユーザー名" value="{{ old('username') }}">
                            @error('username')
                                <div class="alert alert-danger mt-2 mb-0">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold" for="password">パスワード</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="パスワード">
                            @error('password')
                                <div class="alert alert-danger mt-2 mb-0">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold">ログイン</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection