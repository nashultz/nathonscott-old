@extends('layouts.frontend')

@section('page_title')
    Home
@endsection

@section('content')
    <ul>
        <li v-for="skill in skills">@{{ skill }}</li>
    </ul>
@endsection
