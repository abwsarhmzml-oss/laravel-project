@extends('layout.app')

@section('content')
@section('titel') <title>index</title>@endsection

   <div class ="m-5" >
    <div class="text-center">

        <a href="/postes/create" class="btn btn-primary">Create Post</a>
    </div>
   </div>
<div class="contaner m-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titel</th>
      <th scope="col">posted by</th>
      <th scope="col">creat at</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">

  @foreach ($poste as $post)
  <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->titel }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $post->created_at }}</td>
      <td>
       <a href="{{ route('postes.show',$post['id'])}}" class = "btn btn-warning"> view</a>
      <a href="{{ route('postes.Edit',$post['id'])}}" class = "btn btn-info ">Edit</a>
      <form  style ="display:inline;" action="{{ route('postes.destroy',$post['id'])}}" method ="post">
        @csrf
        @method('Delete')
      <button  class="btn btn-danger ">Delete</button>
      </form>
      </td>
    </tr>


  @endforeach


  </tbody>
</table>
</div>

@endsection
