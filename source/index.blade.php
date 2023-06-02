---
title: Welcome
pagination:
    collection: projects
    perPage: 4
---

@extends('_layouts.main')

@section('body')
    @include('_partials.hero')

    @include('_partials.portfolio')

    @include('_partials.tools')
    
    @include('_partials.values')

    @include('_partials.start')
@endsection
