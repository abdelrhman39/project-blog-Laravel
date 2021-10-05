@extends('admin/master')



@section('content')

    <div class="container mt-5">
        <h2>Contact Us Section</h2>

   




    {{-- Start Haeder --}}
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

  
{{-- Start contact-us --}}
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
            <p> {{$dataContact->about_me}} </p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="tel:{{$dataContact->phone}}">{{$dataContact->phone}}</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          
          <form id="contact" action="{{url('admin/settings/message')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="subject" id="surname" placeholder="subject" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>

                @if (session()->get('SMS_Session'))
                    <div class="alert alert-danger"> {{session()->get('SMS_Session')}} </div>
                @endif

              </div>
            </div>
            <div class="contact-dec">
              <img src="{{asset('assets/images/contact-decoration.png')}}" alt="">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
{{-- End contact-us --}}











@if ($errors->any())
 <div class="aert alert-danger p-3 rounded">
    @foreach ($errors->all() as $error)
        * {{$error}}
    @endforeach
 </div>
@endif

@if (session()->get('SMS_update'))
    <div class="alert alert-danger"> {{session()->get('SMS_update')}} </div>
@endif
<form method="POST" action=" {{url('admin/settings/contact/'.$dataContact->id)}} " enctype="multipart/form-data" >
  @method('put')
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Phone Numebr</label>
      <input type="text" name="phone" value="{{ $dataContact->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">About Us</label>
        <textarea class="form-control" name="about_me" id="exampleFormControlTextarea1" rows="3">{{$dataContact->about_me}}</textarea>
    </div>

  

    <button type="submit" class="btn btn-primary">Update</button>
  </form>








       
    </div>
@endsection