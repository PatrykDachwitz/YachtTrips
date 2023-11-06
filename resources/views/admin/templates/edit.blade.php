@extends('admin.layout')

@include('admin.form.template')

@section('script')
    <input type="hidden" data-url value="{{ route('templates.index') }}">
    <input type="hidden" data-url-update value="{{ route('templates.update', ["template" => $id]) }}">
    <input type="hidden" data-url-api value="{{ route('templates.edit', ["template" => $id]) }}">
    @vite('resources/js/admin/edit.js')
@endsection
