

@extends('admin.master')


@section('content')



            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Posts : {{ $data->count() }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href=" {{ url('admin/post')}} ">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Messages : {{$messages->count() }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('admin/settings/message')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Users : {{ $users->count() }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('admin/User')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            

            @if ( session()->get('SMS_Session') )
                <div class="alert alert-danger">
                    {{ session()->get('SMS_Session') }}
                </div>
            @endif
            

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Posts Details
                    <button class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#add_Post">Add Post</button>
                    <span class="clearfix"></span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>img</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>img</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($data as $post)
                                <tr>
                                    <td> {{$post->id}} </td>
                                    <td> {{$post->name}} </td>
                                    <td> {{$post->content}} </td>
                                    <td> <img width="150px" src=" {{ asset('assets/images/'.$post->img.'') }}" > </td>
                                    <td>
                                        <a href="{{ url('admin/post/'.$post->id.'/edit') }}" class="btn btn-info" >Edit</a>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$post->id}}">Delete</button>

                                        <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$post->id}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form method="POST" action="{{url('admin/post/'.$post->id)}}">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="form-group">
                                                      Delete Post : {{$post->name}}
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                       <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </td>
                                </tr>




                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
    


<!---- Start Model Add Post ------->

<div class="modal fade" id="add_Post" tabindex="-1" aria-labelledby="add_Post" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('post')}}" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
              <label for="name">Name </label>
              <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="content">Content </label>
                <textarea type="text" name="content" class="form-control" id="content"></textarea>
            </div>

            <div class="form-group">
                <label for="Image">Image </label>
                <input type="file" name="img" class="form-control" id="Image">
              </div>
            
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Create Post</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection