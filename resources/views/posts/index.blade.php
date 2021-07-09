@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-5 offset-4">
                    <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" alt="pro-image"
                            class="w-100"></a>
                </div>
            </div>

            <div class="row pt-3 pb-5">
                <div class="col-5 offset-4">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="{{ $post->user->profile->profileImage() }}" alt="Profile Picture"
                                    class="w-100 rounded-circle" style="max-width: 40px">
                            </div>

                            <div>
                                <h4 class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"
                                        class="text-dark">{{ $post->user->name }}</a></h4>

                            </div>
                        </div>
                    </div>

                    <hr>

                    <p><span class="font-weight-bold mr-2"></span>{{ $post->caption }}
                    </p>

                    <hr>
                </div>
            </div>
        @endforeach
    </div>
@endsection
