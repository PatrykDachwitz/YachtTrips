@extends('admin.layout')

@include("admin.form.{$views}")

@section('script')
    <input type="hidden" data-url value="{{ route("{$views}.index") }}">
    <input type="hidden" data-url-api value="{{ route("{$views}.store") }}">
    @vite('resources/js/admin/create.js')
@endsection
