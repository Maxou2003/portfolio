@extends('layout')
@section('title', $title)
@section('content')

    <div id="folioFormContainer" class="container">
        <form id="folioForm" action="{{ $route }}" method="POST" class="mx-auto" style="max-width: 700px;">
            @csrf
            <div class="justify-content-between d-flex p-3">
                <h1>{{ $title }}</h1>

                <button type="submit" class="btn btn-primary btn-lg font-weight-bold text-secondary">
                    💾 Enregistrer
                </button>
            </div>
            @include('fo.components.editor')


        </form>
    </div>

@endsection
