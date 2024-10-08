@extends('layouts.main')

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Country</h5>
        <p class="card-text">A country is the largest political division and refers to a distinct, sovereign entity with its own government and often its own constitution.</p>
        <a href="{{route('country.index')}}" class="btn btn-info">Go to Country</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">state</h5>
        <p class="card-text">A state (or province, region, canton, etc., depending on the country) is a subnational division within a country.</p>
        <a href="{{route('state.index')}}" class="btn btn-info">Go to state</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">City</h5>
        <p class="card-text">A city is an urban area with a significant population and infrastructure, serving as a hub for commerce, culture, and governance.</p>
        <a href="{{route('city.index')}}" class="btn btn-info">Go to City</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
