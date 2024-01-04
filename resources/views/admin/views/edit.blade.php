@extends('admin.layout')

@include("admin.form.{$views}")

@section('script')
    <input type="hidden" data-url value="{{ route("{$views}.index") }}">
    <input type="hidden" data-url-update value="{{ route("{$views}.update", [$id]) }}">
    <input type="hidden" data-url-api value="{{ route("{$views}.show", [$id]) }}">
    @vite('resources/js/admin/edit.js')
@endsection
