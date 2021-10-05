@extends('admin.master')


@section('content')

@if ($errors->any())
 <div class="aert alert-danger p-3 rounded">
    @foreach ($errors->all() as $error)
        * {{$error}}
    @endforeach
 </div>
@endif

<form method="POST" action=" {{url('admin/post/'.$data->id)}} " enctype="multipart/form-data" >
  @method('put')
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" value="{{ $data->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Content</label>
      <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $data->content}}</textarea>  
    </div>

    {{-- <input type="hidden" name="id" value="{{$data->id}}"> --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Image</label><br>
        <img  src="{{ asset('assets/images/'.$data->img)}}" width="150px">
        <input type="file" name="img" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
    
@endsection