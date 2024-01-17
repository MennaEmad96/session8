@extends('layouts.pages')

@section('title')
    {{ __('contact.title') }}
@endsection

@section('content')
    <!-- contact section -->
    @include('includes.contact')
    <!-- end contact section -->

    <!-- info section -->
    @include('includes.info')
    <!-- end info_section -->
@endsection