@extends('admin/master')



@section('content')



<div class="container">


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif


    <form action="{{url('admin/settings/portfolio/'.$dataEdit->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <div class="form-group">
                <label>Work name</label>
                <input name="work_name" value="{{$dataEdit->work_name}}" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Description Work</label>
                <textarea name="description_work" class="form-control">{{$dataEdit->description_work}}</textarea>
            </div>

            <div class="form-group">
                <label>Image Work</label><br>
                <img src="{{asset('assets/images/'.$dataEdit->img)}}" width="150px">
                <input name="img" type="file" class="form-control">
            </div>
            <button class="btn btn-danger" type="submit"> Edit Work </button>
        </div>
    </form>

</div>






@endsection