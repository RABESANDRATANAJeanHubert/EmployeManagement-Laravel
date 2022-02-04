@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <form class="d-flex" method="GET" action="{{route('state.index')}}">
                            <input class="form-control me-6 float-right" name="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                    </div>
                    <div class="col-md-6">
                        <a  class = "btn btn-info float-right" href="{{route('state.create')}}">Create new country</a>
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
                            <th scope="col">Country Code</th>
                            <th scope="col">name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($state as $states )
                          <tr>
                            <th scope="row">{{$states->id}}</th>
                            <td>{{$states->country->country_code}}</td>
                            <td>{{$states->name}}</td>
                            <td>
                                <a href="{{route('state.edit', $states->id)}}"  class="btn btn-warning">Edit</a>
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
