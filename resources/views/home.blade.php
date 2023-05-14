@extends('layout')

@section('contact')
    <div class="container">
        <div class="card">
            <div class="card-header" style="text-align: center">
                Contact
            </div>
            @foreach ($data as $post)
            <div class="card-body">


                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">{{ $post->description }}.</p>
                    <a href="#" class="btn btn-primary">View</a>

                </div><hr>
                @endforeach
        </div>
    </div>
@endsection
