@extends('layouts.app')

@section('content')
<div class="container border p-4 bg-white">
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titleInput">Title:</label>
            <input type="text" class="form-control" name="title" id="titleInput">
        </div>
        </br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@if(count($posts)>0)
@foreach($posts as $item )
<div class="container border mt-3 p-2">
    {{$item->title}}
</div>
@endforeach
@endif

@endsection