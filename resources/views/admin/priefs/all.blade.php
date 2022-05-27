@extends('layouts.admin')
@section('title')
    All Briefs
@endsection
@section('content')
    <h1 class="text-center">Briefs</h1>
    <a href="{{ route('prief.create') }}" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> &nbsp; Create Brief</a>
    <div class="table-responsive p-0">
        @foreach ($priefs as $prief )
        <div class="desc">
            <p>
                {{$prief->desc}}
            </p>
        </div>
        <div class="controll">
            <ul class="nav">
                <li><a href="{{route('prief.show' , $prief->id)}}" class="btn btn-info me-3">Show</a></li>
                <li><a href="{{route('prief.edit' , $prief->id)}}" class="btn btn-secondary me-3">Edit</a></li>
                <form method="POST" action="{{route('prief.destroy' , $prief->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </ul>
        </div>
        @endforeach
    </div>
@endsection
