@extends('admin.layout')

@include('admin.form.oceans')

@section('script')
    <input type="hidden" data-url value="{{ route('oceans.index') }}">
    <input type="hidden" data-url-update value="{{ route('oceans.update', ["ocean" => $id]) }}">
    <input type="hidden" data-url-api value="{{ route('oceans.edit', ["ocean" => $id]) }}">
    @vite('resources/js/admin/edit.js')
@endsection
