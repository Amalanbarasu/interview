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

                    <!-- Display user ID and Name -->
                    <div class="mt-3">
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Unique ID:</strong> {{ $user->unique_id }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
