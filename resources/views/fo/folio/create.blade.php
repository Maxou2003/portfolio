@extends('layouts.connected')
@section('title', $title)
@section('includes')
    @vite(['resources/scss/app.scss', 'resources/js/editor-init.js'])
@endsection
@section('content')

    <div id="folioFormContainer" class="container mx-auto" style="max-width: 700px;" data-route={{ $route }}
        data-token="{{ csrf_token() }}">
        <div class="justify-content-between d-flex py-3">
            <h1>{{ $title }}</h1>

            <button id="saveBtn" class="btn btn-primary btn-lg font-weight-bold text-secondary d-flex align-items-center">
                <ion-icon class="m-2" name="save-outline"></ion-icon> Enregistrer
            </button>
        </div>
        @include('fo.components.editor')
    </div>

@endsection
