@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('city.index')}}" class="btn btn-success float-right">City List</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('city.update', $city->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputAddress">Country Code</label>
                                    <select name="state_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select State</option>
                                   @foreach ($state as $states)
                                        <option value="{{$states->id}}"{{$states->id == $city->state_id ? 'selected ' : ''}}>{{$states->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Name</label>
                                    <input type="text"  value="{{$city->name}}" class="form-control" name="name" required placeholder="Please Enter your name">
                                  </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                        </tbody>
                      </table>
                      <form action="{{route('city.destroy',$city->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"> Delete {{$city->name}}</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
