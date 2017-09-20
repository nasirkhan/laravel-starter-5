@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <ul>
                        @can('add_users')
                        <li>add_users</li>
                        @endcan

                        @can('view_backend')
                        <li>view_backend</li>
                        @endcan
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
