@extends('admin.layout')

@section('form-content')
    @include("admin.form.{$views}")
@endsection

@section('script')
    <input type="hidden" data-url value="{{ route("{$views}.index") }}">
    <input type="hidden" data-url-update value="{{ route("{$views}.update", [$id]) }}">
    <input type="hidden" data-url-api value="{{ route("{$views}.show", [$id]) }}">
    <input type="hidden" value="{{ route('folders.index') }}" data-folder>
    <input type="hidden" value="{{ route('files.index') }}" data-file>
    <input type="hidden" value="{{ route('folders.show', [
    'folder' => 1
]) }}" data-folder-url-main>
    @vite('resources/js/admin/edit.js')
@endsection
