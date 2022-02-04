@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('user.index')}}" class="btn btn-success">User List</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('user.store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="inputAddress">Firstname</label>
                                    <input type="text" class="form-control" name="firstname"  required placeholder="Please Enter your firtsname">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">LastName</label>
                                    <input type="text" class="form-control" name="lastname" required placeholder="Please Enter your lastname">
                                  </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Sex</label>
                                    <input type="text" class="form-control" name="sex" placeholder="Sexe">
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
