@extends('admin.layouts.app')

@section('title')
    トップページ
@endsection

@section('content')
     <div class="container mt-4">
        <div class="mb-3">
            <label for="content" class="form-label">本文</label>
            <textarea class="form-control simditor" id="editor" name="content" rows="5"></textarea>
        </div>
    </div>
    {!! config('project.admin.state')[0] !!}
@endsection

@section('css')

@endsection

@section('js')
    
@endsection