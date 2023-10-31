@extends('admin.layout')

@include('admin.form.banners')

@section('script')
    <input type="hidden" data-url value="{{ route('yachts.index') }}">
    <input type="hidden" data-url-api value="{{ route('yachts.store') }}">
    @vite('resources/js/admin/show.js')
@endsection
