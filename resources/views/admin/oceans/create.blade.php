@extends('admin.layout')

@include('admin.form.oceans')

@section('script')
    <input type="hidden" data-url value="{{ route('oceans.index') }}">
    <input type="hidden" data-url-api value="{{ route('oceans.store') }}">
    @vite('resources/js/admin/show.js')
@endsection
