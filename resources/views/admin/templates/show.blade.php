@extends('admin.layout')

@include('admin.form.banners')

@section('script')
    <input type="hidden" data-url value="{{ route('templates.index') }}">
    <input type="hidden" data-url-api value="{{ route('templates.show', ["template" => $id]) }}">
    @vite('resources/js/admin/show.js')
@endsection