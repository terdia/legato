@extends('layouts.base')
@section('title', 'Homepage')

@section('body')
    <div class="text-center">
        <h1>{{ getenv('APP_NAME') }} v1</h1>
        <p>Start building that next app.</p>
    </div>
@endsection