@extends('layouts.frontend.app')

@section('title')
    {{ $post->title }}
@endsection

@push('css')

    <link href="{{ asset('assets/frontEnd/single-post-1/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontEnd/single-post-1/css/responsive.css') }}" rel="stylesheet">

    <link href="" rel="stylesheet">
    <style>

    </style>
@endpush

@section('content')

    @if (count($posts) > 0 )

        @foreach($posts as $key => $post)
             ace
        @endforeach
        @else
         nai
    @endif


@endsection


@push('js')

@endpush
