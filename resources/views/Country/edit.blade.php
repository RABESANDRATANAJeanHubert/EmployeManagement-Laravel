@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('country.index')}}" class="btn btn-success float-right">Back</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('country.update',$country->id)}}">
                                @csrf
                                @method('PUT')
                                  <div class="form-group">
                                    <label for="inputCountryCode">Country Code</label>
                                    <input type="text" class="form-control" name="country_code" value="{{$country->country_code}}" placeholder="Please Enter your Country Code">
                                  </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$country->name}}" placeholder="Name">
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                        </tbody>
                      </table>
                      <form action="{{route('country.destroy',$country->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"> Delete {{$country->name}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
