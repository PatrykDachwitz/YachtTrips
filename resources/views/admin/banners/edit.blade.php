@extends('admin.layout')

@include('admin.form.banners')

@section('script')
    <input type="hidden" data-url value="{{ route('banners.index') }}">
    <input type="hidden" data-url-update value="{{ route('banners.update', ["banner" => $id]) }}">
    <input type="hidden" data-url-api value="{{ route('banners.show', ["banner" => $id]) }}">
    @vite('resources/js/admin/edit.js')
@endsection
