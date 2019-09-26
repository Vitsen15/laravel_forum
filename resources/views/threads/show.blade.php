@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">{{ $thread->title }}</div>

                    <div class="card-body">
                        <div class="card-text">{{ $thread->body }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
