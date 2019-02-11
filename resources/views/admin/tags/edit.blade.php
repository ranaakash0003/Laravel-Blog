@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-heading">

    <div style='margin-bottom: 25px' class="panel-heading">
        Edit tag: {{ $tag->tag }}
    </div>

    <div class="panei-body">

        <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Tag</label>
                <input type="text" name="tag" value="{{$tag->tag}}" class="form-control">

            </div>


            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update Tag
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
