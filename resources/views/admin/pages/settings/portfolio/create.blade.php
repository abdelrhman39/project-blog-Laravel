@extends('admin/master')



@section('content')



<div class="container">

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

    <form action="{{url('admin/settings/portfolio')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label>Work name</label>
                <input name="work_name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Description Work</label>
                <textarea name="description_work" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Image Work</label>
                <input name="img" type="file" class="form-control">
            </div>
            <button class="btn btn-danger" type="submit"> Create Work </button>
        </div>
    </form>

</div>






@endsection