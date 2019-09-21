@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h5 class="card-title">Check the emails you have created</h5>
                    <p class="card-text">Use our amazing email editor to create beautiful emails.</p>
                    <a href="/emails" class="btn btn-secondary">My emails</a>
                    <a href="/emails/create" class="btn btn-primary">Add email</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
