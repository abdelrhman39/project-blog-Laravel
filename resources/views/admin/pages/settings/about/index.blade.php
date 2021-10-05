@extends('admin/master')

<style>
  .nav-tabs .nav-item{
    margin: auto;
    border: 1px solid #ff3154!important;
    border-bottom:20x solid white!important;
  }
  .nav-tabs .nav-link.active{
    background-color: #ff3154!important;
    color:white!important;
  }
  .nav-tabs{
    border-bottom: 1px solid #ff3154!important;
  }
  .nav-tabs .nav-link{
    border-bottom: 1px solid white!important;
  }
  
</style>

@section('content')

    <div class="container mt-5">
        <h2>About Section</h2>

   




    {{-- Start Haeder --}}
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

  {{-- Start About --}}
  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="{{asset('assets/images/'.$dataAbout->img)}}" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$dataAbout->icon_special1)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $dataAbout->special1 }}</h4>
                    <p>{{$dataAbout->definition_special1}}</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$dataAbout->icon_special2)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $dataAbout->special2 }}</h4>
                    <p>{{$dataAbout->definition_special2}}</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$dataAbout->icon_special3)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $dataAbout->special3 }}</h4>
                    <p>{{$dataAbout->definition_special3}}</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/'.$dataAbout->icon_special4)}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>{{ $dataAbout->special4 }}</h4>
                    <p>{{$dataAbout->definition_special4}}</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









@if ($errors->any())
 <div class="aert alert-danger p-3 rounded">
    @foreach ($errors->all() as $error)
        * {{$error}}
    @endforeach
 </div>
@endif
<form method="POST" action=" {{url('admin/settings/about/'.$dataAbout->id)}} " enctype="multipart/form-data" >
  @method('put')
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Image</label><br>
      <img src="{{ asset('assets/images/'.$dataAbout->img)}}" style="width:200px!important" >
      <input type="file" name="img" class="form-control">
    </div>







    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">special 1</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">special 2</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">special 3</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="spcial4-tab" data-toggle="tab" href="#spcial4" role="tab" aria-controls="spcial4" aria-selected="false">special 4</a>
      </li>
    </ul>


    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="form-group">
          <label for="exampleInputEmail1">special 1</label>
          <input type="text" name="special1" value="{{ $dataAbout->special1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
  
        <div class="form-group">
          <label for="exampleInputEmail1">Icon Special 1</label><br>
          <img src="{{ asset('assets/images/'.$dataAbout->icon_special1)}}" style="width:200px!important" >
          <input type="file" name="icon_special1" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Definition Special 1</label>
          <textarea class="form-control" name="definition_special1" id="exampleFormControlTextarea1" rows="3">{{$dataAbout->definition_special1}}</textarea>
        </div>
      </div>



      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="form-group">
          <label for="exampleInputEmail1">special 2</label>
          <input type="text" name="special2" value="{{ $dataAbout->special2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
  
        <div class="form-group">
          <label for="exampleInputEmail1">Icon Special 2</label><br>
          <img src="{{ asset('assets/images/'.$dataAbout->icon_special2)}}" style="width:200px!important" >
          <input type="file" name="icon_special2" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Definition Special 2</label>
          <textarea class="form-control" name="definition_special2" id="exampleFormControlTextarea1" rows="3">{{$dataAbout->definition_special2}}</textarea>
        </div>
      </div>



      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        
        <div class="form-group">
          <label for="exampleInputEmail1">special 3</label>
          <input type="text" name="special3" value="{{ $dataAbout->special3}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
  
        <div class="form-group">
          <label for="exampleInputEmail1">Icon Special 3</label><br>
          <img src="{{ asset('assets/images/'.$dataAbout->icon_special3)}}" style="width:200px!important" >
          <input type="file" name="icon_special3" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Definition Special 3</label>
          <textarea class="form-control" name="definition_special3" id="exampleFormControlTextarea1" rows="3">{{$dataAbout->definition_special3}}</textarea>
        </div>
      </div>




      <div class="tab-pane fade" id="spcial4" role="tabpanel" aria-labelledby="spcial4-tab">
        <div class="form-group">
          <label for="exampleInputEmail1">special 4</label>
          <input type="text" name="special4" value="{{ $dataAbout->special4}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
  
        <div class="form-group">
          <label for="exampleInputEmail1">Icon Special 4</label><br>
          <img src="{{ asset('assets/images/'.$dataAbout->icon_special4)}}" style="width:200px!important" >
          <input type="file" name="icon_special4" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Definition Special 4</label>
          <textarea class="form-control" name="definition_special4" id="exampleFormControlTextarea1" rows="3">{{$dataAbout->definition_special4}}</textarea>
        </div>
      </div>
    </div>












      
        



      
      


    

    <button type="submit" class="btn btn-primary">Update</button>
  </form>








       
    </div>
@endsection