@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ _('Dashboard')}}</div>
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success"  role="alert">
                        {{   sessio('status')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
