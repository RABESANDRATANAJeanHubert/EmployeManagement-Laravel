@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('city.index')}}" class="btn btn-info float-right">City List</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('city.store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="inputAddress">Country Code</label>
                                    <select name="state_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                   @foreach ($stateliest as $satelistes)
                                        <option value="{{$satelistes->id}}">{{$satelistes->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Name</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Please Enter your name">
                                  </div>
                                <button type="submit" class="btn btn-primary">save</button>
                              </form>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
