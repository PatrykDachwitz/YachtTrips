@extends('admin.layout')

@include('admin.form.banners')

@section('script')
    <input type="hidden" data-url value="{{ route('banners.index') }}">
    <input type="hidden" data-url-api value="{{ route('banners.edit', ["banner" => $id]) }}">
    @vite('resources/js/admin/edit.js')
@endsection
