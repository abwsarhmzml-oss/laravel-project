@extends('layout.app')

@section('content')
@section('titel') <title>edit</title>@endsection

<form   action ="{{ route('postes.update',1)}}"  method="post">

@csrf
@method('PUT')
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">titel </label>
  <input name="titel" type="text" class="form-control" value="{{ $post->titel }}" id="exampleFormControlInput1" placeholder="Enter titel">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description </label>
  <textarea name="Discription" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post->description }}</textarea>
</div>
        <label for="creat_by">Create by:</label>
        <select name="creat_by" id="creat_by">
                    @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
               @endforeach
        </select>

<div   class="text-center">
<button type="submit" class="btn btn-info" >updata</button>
</div>
</form>
@endsection

