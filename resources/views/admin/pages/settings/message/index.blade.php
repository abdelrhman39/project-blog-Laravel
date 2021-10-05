@extends('admin/master')



@section('content')

    <div class="container mt-5">
        <h2>Messages Users</h2>

   @if (session()->get('SMS_Session'))
        <div class="alert alert-danger">{{session()->get('SMS_Session')}}</div>
   @endif

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Subject</th>
              <th scope="col">Message</th>
              <th scope="col"> Action</th>
            </tr>
          </thead>
          <tbody>

          @if (count($dataMessage) > 0)
            @foreach ($dataMessage as $SMS)
              <tr>
                <th>{{$SMS->id}}</th>
                <td>{{$SMS->name}}</td>
                <td>{{$SMS->email}}</td>
                <td>{{$SMS->subject}}</td>
                <td>{{$SMS->message}}</td>
                <td>
                  <form action="{{url('admin/settings/message/'.$SMS->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" >Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          @else
          <tr>
             <th> No Messages</th>
          </tr>
          @endif

          </tbody>
        </table>


        
       
    </div>
@endsection