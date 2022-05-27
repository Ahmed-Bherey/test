@extends('layouts.admin')
@section('title') Show Information @endsection
@section('content')
    <div class="container">
        <div class="edit-prief">
            <p>
                {{$priefs->desc}}
            </p>
        </div>
    </div>
@endsection