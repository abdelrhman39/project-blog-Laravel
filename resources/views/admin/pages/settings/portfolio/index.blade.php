@extends('admin/master')



@section('content')

    <div class="container mt-5">
        <h2>Portfolio Section</h2>

   




    {{-- Start Haeder --}}
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

 {{-- Start portfolio --}}
  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
          </div>
        </div>
      </div>
      <div class="row">

      @foreach ($dataPortfolio as $work)
            
        

        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>{{$work->work_name}}</h4>
                <p>{{$work->description_work}}.</p>
              </div>
              <div class="showed-content position-relative">
                
                <img src="{{asset('assets/images/'.$work->img)}}" alt="">
                <div class="position-absolute top-0">
                  <form method="POST" action="{{url('admin/settings/portfolio/'.$work->id)}}" class="d-inline" >
                    @csrf
                    @method('delete')
                      <button type="submit" class="btn btn-outline-dark p-2 "  ><i class="fas fa-trash-alt"></i></button>
                  </form>
                  <a href="{{url('admin/settings/portfolio/'.$work->id.'/edit')}}" class="btn btn-outline-success p-2 "><i class="fas fa-edit"></i></a>
                </div>
              </div>
            </div>
          </a>
        </div>
    @endforeach

      </div>
    </div>
  </div>
{{-- End portfolio --}}

<div class="mt-5"></div>
<a class="btn btn-primary mt-5" href="{{url('admin/settings/portfolio/create')}}" >Add Work</a>


       
    </div>
@endsection