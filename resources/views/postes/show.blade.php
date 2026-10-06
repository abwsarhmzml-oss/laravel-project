

@extends('layout.app')
@section('content')
@section('titel') <title>show</title> @endsection
<div class="card w-75 mb-3">
  <div class="card-body">
    <h5 class="card-title"> title {{ $post->titel }}</h5>
    <p class="card-text">{{$post->description}}</p>

  </div>
</div>

<div class="card w-50">
  <div class="card-body">
    <div>
        <label for="creat_by">Create by:</label>

        <select name="creat_by" id="creat_by">
                    @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
               @endforeach
        </select>

    <!-- <h5 class="card-title">creat by {{$post['posted_by']}}</h5> -->
    </div>
    <p class="card-text">creat at {{$post->created_at}}</p>

  </div>
</div>

@endsection
