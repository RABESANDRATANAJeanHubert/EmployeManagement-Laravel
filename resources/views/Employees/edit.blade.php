@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('employees.index')}}" class="btn btn-success float-right">State List</a>
                    {{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success"  role="alert">
                        {{   session('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <form method="POST" action="{{route('employees.update', $employee->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputAddress2">Last Name</label>
                                    <input type="text"  value="{{$employee->last_name}}" class="form-control" name="last_name" required placeholder="Please Enter your last_name">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">First Name</label>
                                    <input type="text" class="form-control" value="{{$employee->first_name}}" name="first_name" required placeholder="Please Enter your first_name">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Middle Name</label>
                                    <input type="text" class="form-control"  value="{{$employee->middle_name}}" name="middle_name" required placeholder="Please Enter your middle_name">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Adress</label>
                                    <input type="text" class="form-control"  value="{{$employee->address}}" name="address" required placeholder="Please Enter your address">
                                  </div>
                                <div class="form-group">
                                    <label for="inputAddress">Country Code</label>
                                    <select name="country_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select country</option>
                                   @foreach ($country as $countrie)
                                   <option value="{{$countrie->id == $employee->country_id ? 'selected ' : ''}}">{{$countrie->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress">City</label>
                                    <select name="city_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select city</option>
                                   @foreach ($city as $cities)
                                        <option value="{{$cities->id == $employee->city_id ? 'selected ' : ''}}">{{$cities->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Zip Code</label>
                                    <input type="text" class="form-control"   value="{{$employee->zip_code}}" name="zip_code" required placeholder="Please Enter your zip_code">
                                  </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">BirthDate</label>
                                        <div class="input-group input-daterange">
                                            <input type="date" value="{{$employee->birthday->format('Y-m-d')}}"  name="birthday" class="form-control" value="02-16-2012">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">date_hired</label>
                                        <div class="input-group input-daterange">
                                            <input name="date_hired" type="date" value="{{$employee->date_hired->format('Y-m-d')}}" class="form-control" value="02-16-2012">
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    <form action="{{route('employees.destroy',$employee->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"> Delete {{$employee->first_name}}</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
