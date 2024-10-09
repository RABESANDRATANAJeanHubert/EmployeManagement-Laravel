@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('employees.index')}}" class="btn btn-info float-right">Employee List</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('employees.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="inputAddress2">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" required placeholder="Please Enter your last_name">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">First Name</label>
                                    <input type="text" class="form-control" name="first_name" required placeholder="Please Enter your first_name">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name" required placeholder="Please Enter your middle_name">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Adress</label>
                                    <input type="text" class="form-control" name="address" required placeholder="Please Enter your address">
                                  </div>
                                <div class="form-group">
                                    <label for="inputAddress">Country Code</label>
                                    <select name="country_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select country</option>
                                   @foreach ($selectcountry as $countrie)
                                        <option value="{{$countrie->id}}">{{$countrie->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress">City</label>
                                    <select name="city_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select city</option>
                                   @foreach ($city as $cities)
                                        <option value="{{$cities->id}}">{{$cities->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code" required placeholder="Please Enter your zip_code">
                                  </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">BirthDate</label>
                                        <div class="input-group input-daterange">
                                            <input type="date"  name="birthday" class="form-control" value="02-16-2012">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">date_hired</label>
                                        <div class="input-group input-daterange">
                                            <input name="date_hired" type="date" class="form-control" value="02-16-2012">
                                        </div>
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
