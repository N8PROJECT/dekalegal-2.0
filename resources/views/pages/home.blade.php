@extends('layouts.app')

@section('title', 'Home')

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

{{-- HERO & CLIENTS --}}
@section('content-top')
    @include('pages.home.hero')
    @include('pages.home.clients')
@endsection

{{-- LAYANAN (full-width, di tengah) --}}
@push('middle-section')
    @include('pages.home.services')
@endpush

{{-- ABOUT & TESTIMONI --}}
@section('content-bottom')
    
@endsection

@push('bottom-fullwidth')
    @include('pages.home.about')
    @include('pages.home.testimoni')
@endpush