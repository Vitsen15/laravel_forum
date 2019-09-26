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

        @foreach($thread->replies as $reply)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="#">{{ $reply->owner->name }}</a>
                            said {{ $reply->owner->created_at->diffForHumans() }}
                        </div>

                        <div class="card-body">
                            <div class="card-text">{{ $reply->body }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
