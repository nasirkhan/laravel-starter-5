@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>welcome {{ Auth::user()->name }}!</strong>
                </div><!--card-header-->
                <div class="card-block">
                    {!! trans('strings.backend.welcome') !!}
                </div><!--card-block-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
