@extends('admin.layout')

@section('form-content')
    @include("admin.form.{$views}")
@endsection
@section('script')
    <input type="hidden" data-url value="{{ route("{$views}.index") }}">
    <input type="hidden" data-url-api value="{{ route("{$views}.store") }}">
    @vite('resources/js/admin/create.js')
@endsection
