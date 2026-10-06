@extends('layout.app')

@section('content')
@section('titel') <title>create</title>@endsection
<form  action="{{ route('postes.store') }}"   method ="post">
@csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">titel</label>
  <input name="titel" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter titel">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea name="Discription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div>
        <label for="creat_by">Create by:</label>
        <select name="creat_by" id="creat_by">
                    @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
               @endforeach
        </select>
    </div>
<button type="submit" class="btn btn-success" >create</button>
</div>
</form>
@endsection
