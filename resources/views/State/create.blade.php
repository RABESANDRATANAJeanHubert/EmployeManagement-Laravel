@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('state.index')}}" class="btn btn-success float-right">State List</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('state.store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="inputAddress">Country Code</label>
                                    <select name="country_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                   @foreach ($selectcountry as $countrie)
                                        <option value="{{$countrie->id}}">{{$countrie->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Name</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Please Enter your name">
                                  </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                              </form>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
