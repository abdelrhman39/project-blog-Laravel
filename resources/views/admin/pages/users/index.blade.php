

@extends('admin.master')


@section('content')


            

            @if ( session()->get('SMS_Session') )
                <div class="alert alert-danger">
                    {{ session()->get('SMS_Session') }}
                </div>
            @endif
            

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Users Details
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($data as $post)
                                <tr>
                                    <td> {{$post->id}} </td>
                                    <td> {{$post->name}} </td>
                                    <td> {{$post->email}} </td>
                                    <td> {{$post->title}} </td>
                                    <td>
                                        <a href="{{ url('admin/User/'.$post->id.'/edit') }}" class="btn btn-info" >Edit</a>
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
                                                  <form method="POST" action="{{url('admin/User/'.$post->id)}}">
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
        
@endsection