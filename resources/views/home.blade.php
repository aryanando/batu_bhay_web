@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <br />
                        <div class="row">
                            <div class="col">
                                <a href="/chatify" class="btn btn-primary m-1" target="_blank" rel="noopener noreferrer">Live Chat</a>
                                <a href="/blog_admin" class="btn btn-success m-1" target="_blank" rel="noopener noreferrer">Blog Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
