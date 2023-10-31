@extends('admin.layout')

@include('admin.form.banners')

@section('script')
    <input type="hidden" data-url value="{{ route('yachts.index') }}">
    <input type="hidden" data-url-update value="{{ route('yachts.update', ["yacht" => $id]) }}">
    <input type="hidden" data-url-api value="{{ route('yachts.edit', ["yacht" => $id]) }}">
    @vite('resources/js/admin/edit.js')
@endsection
