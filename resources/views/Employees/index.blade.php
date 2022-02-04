@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <form class="d-flex" method="GET" action="{{route('employees.index')}}">
                            <input class="form-control me-6 float-right" name="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                    </div>
                    <div class="col-md-6">
                        <a  class = "btn btn-info float-right" href="{{route('employees.create')}}">Create new country</a>
                        {{ _('')}}
                    </div>
                </div>
                </div>
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success"  role="alert">
                        {{session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Employee ID</th>
                            <th scope="col"> First Name</th>
                            <th scope="col"> address</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employees )
                          <tr>
                            <th scope="row">{{$employees->id}}</th>
                            <td>{{$employees->first_name}}</td>
                            {{-- <td>{{$employees->last_name}}</td> --}}
                            <td>{{$employees->address}}</td>
                            {{-- <td>{{$employees->address}}</td> --}}
                            <td>{{$employees->birthday}}</td>

                            <td>
                                <a href="{{route('employees.edit', $employees->id)}}"  class="btn btn-warning">Edit</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

