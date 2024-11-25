@extends('master.layout')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>
    <p>Slug: {{ $category->slug }}</p>
</div>
@endsection
