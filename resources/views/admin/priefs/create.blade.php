@extends('layouts.admin')
@section('title')
    Create Brief
@endsection
@section('content')
    <h1 class="text-center">Create Brief</h1>
    <div class="container">
        <form method="POST" action="{{ route('prief.store') }}">
            @csrf
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a prief here" name="desc"></textarea>
                    <label for="floatingTextarea"></label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create Brief</button>
        </form>
    </div>
@endsection
