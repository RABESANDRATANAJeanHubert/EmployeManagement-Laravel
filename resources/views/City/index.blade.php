@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <form class="d-flex" method="GET" action="{{route('city.index')}}">
                            <input class="form-control me-6 float-right" name="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                    </div>
                    <div class="col-md-6">
                        <a  class = "btn btn-info float-right" href="{{route('city.create')}}">Create new city</a>
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
                            <th scope="col">state ID</th>
                            <th scope="col">City Code</th>
                            <th scope="col">name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($city as $cities )
                          <tr>
                            <th scope="row">{{$cities->id}}</th>
                            <td>{{$cities->state->name}}</td>
                            <td>{{$cities->name}}</td>
                            <td>
                                <a href="{{route('city.edit', $cities->id)}}"  class="btn btn-warning">Edit</a>
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
