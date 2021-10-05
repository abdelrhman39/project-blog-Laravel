@extends('admin/master')



@section('content')

    <div class="container mt-5">
        <h2>Services Section</h2>

   




  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/templatemo-space-dynamic.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

{{-- Start services --}}
<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="left-image">
          <img src="{{asset('assets/images/'.$dataServices->img)}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="section-heading">
          <h2>Grow your website with our <em>{{$dataServices->service1}}</em> &amp; <span>{{$dataServices->service2}}</span></h2>
          <p>{{$dataServices->service_definition}}.</p>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="first-bar progress-skill-bar">
              <h4>{{$dataAbout->special1}}</h4>
              <span>{{$dataServices->services1_progress}}%</span>
              <div class="filled-bar" style="width: {{$dataServices->services1_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="second-bar progress-skill-bar">
              <h4>{{$dataAbout->special2}}</h4>
              <span>{{$dataServices->services2_progress}}%</span>
              <div class="filled-bar" style="width: {{$dataServices->services2_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="third-bar progress-skill-bar">
              <h4>{{$dataAbout->special3 }}</h4>
              <span>{{$dataServices->services3_progress}}%</span>
              <div class="filled-bar" style="width: {{$dataServices->services3_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="third-bar progress-skill-bar">
              <h4>{{$dataAbout->special4 }}</h4>
              <span>{{$dataServices->services4_progress}}%</span>
              <div class="filled-bar" style="width: {{$dataServices->services4_progress}}%!important;"></div>
              <div class="full-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End services --}}









@if ($errors->any())
 <div class="aert alert-danger p-3 rounded">
    @foreach ($errors->all() as $error)
        * {{$error}}
    @endforeach
 </div>
@endif
<form method="POST" action=" {{url('admin/settings/services/'.$dataServices->id)}} " enctype="multipart/form-data" >
  @method('put')
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Image</label><br>
      <img src="{{ asset('assets/images/'.$dataServices->img)}}" style="width:200px!important" >
      <input type="file" name="img" class="form-control">
    </div> 

    <div class="form-row">
      <div class="col">
        <label for="exampleInputEmail1">Service 1</label>
        <input type="text" name="service1" value="{{ $dataServices->service1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="col">
        <label for="exampleInputEmail1">Service 2</label>
        <input type="text" name="service2" value="{{ $dataServices->service2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Service Definition</label>
      <textarea class="form-control" name="service_definition" id="exampleFormControlTextarea1" rows="3">{{$dataServices->service_definition}}</textarea>
    </div>

    <div class="form-row">
      <div class="col">
        <label for="exampleInputPassword1">{{$dataAbout->special1 }} Progress</label>
        
        <input type="number" name="services1_progress" max="100" value="{{ $dataServices->services1_progress}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="col">
        <label for="exampleInputPassword1">{{$dataAbout->special2 }} Progress</label>
        <input type="number" name="services2_progress" max="100" value="{{ $dataServices->services2_progress}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="col">
        <label for="exampleInputPassword1">{{$dataAbout->special3 }} Progress</label>
        <input type="number" name="services3_progress" max="100" value="{{ $dataServices->services3_progress}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div> 

      <div class="col">
        <label for="exampleInputPassword1">{{$dataAbout->special4 }} Progress</label>
        <input type="number" name="services4_progress" max="100" value="{{ $dataServices->services4_progress}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>








       
    </div>
@endsection