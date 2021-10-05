@extends('admin/master')



@section('content')

    <div class="container mt-5">
        <h2>Haeder Section</h2>

   




    {{-- Start Haeder --}}
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to {{ $dataHaeder->company_name}}</h6>
                <h2>We Make <em>{{ $dataHaeder->special1}}</em> &amp; <span>{{ $dataHaeder->special2}}</span></h2>
                <p>{{$dataHaeder->brief_summary}} .</p>
                <form id="search" action="#" method="GET">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="Your website URL..." autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="main-button">Analyze Site</button>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/'.$dataHaeder->img)}}" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- End Header --}}









@if ($errors->any())
 <div class="aert alert-danger p-3 rounded">
    @foreach ($errors->all() as $error)
        * {{$error}}
    @endforeach
 </div>
@endif
<form method="POST" action=" {{url('admin/settings/header/'.$dataHaeder->id)}} " enctype="multipart/form-data" >
  @method('put')
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Company Name</label>
      <input type="text" name="company_name" value="{{ $dataHaeder->company_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">special1</label>
      <input type="text" name="special1" value="{{ $dataHaeder->special1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">special2</label>
        <input type="text" name="special2" value="{{ $dataHaeder->special2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Brief Summary</label>
        <textarea class="form-control" name="brief_summary" id="exampleFormControlTextarea1" rows="3">{{$dataHaeder->brief_summary}}</textarea>
    </div>

    {{-- <input type="hidden" name="id" value="{{$data->id}}"> --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Image</label><br>
        <img src="{{ asset('assets/images/'.$dataHaeder->img)}}" style="width:200px!important" >
        <input type="file" name="img" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>








       
    </div>
@endsection