@extends('admin.layout')

@include('admin.form.template')

@section('script')
    <input type="hidden" data-url value="{{ route('templates.index') }}">
    <input type="hidden" data-url-api value="{{ route('templates.store') }}">
    @vite('resources/js/admin/show.js')
@endsection
