@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('user.index')}}" class="btn btn-success float-right">Back</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('user.update',$user->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputAddress">Firstname</label>
                                    <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" placeholder="Please Enter your firtsname">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">LastName</label>
                                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" placeholder="Please Enter your lastname">
                                  </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Email">
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                        </tbody>
                      </table>
                      <form action="{{route('user.destroy',$user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"> Delete {{$user->firstname}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
