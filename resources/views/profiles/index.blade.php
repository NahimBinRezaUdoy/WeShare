@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-3 p-5">
                    <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
                </div>
                <div class="col-9 pt-5">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <h1>{{ $user->name }}</h1>
                        </div>


                        @can('update', $user->profile)

                            <button class="btn btn-success mx-3 my-1"><a href="/profile/{{ $user->id }}/edit"
                                    class="text-white">Edit Profile</a></button>

                            <button class="btn btn-primary mx-3 my-1"><a href="{{ route('post.create') }}"
                                    class="text-white">Create Post</a></button>

                        @endcan

                    </div>



                    <div class="d-flex">
                        <div class="pr-3"><strong>{{ $user->posts()->count() }}</strong> posts</div>
                        <div class="pr-3"><strong>1k</strong> followes</div>
                        <div class="pr-3"><strong>20</strong> following</div>
                    </div>
                    <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
                    <div>
                        <p>{{ $user->profile->description }}</p>
                    </div>
                    <div style="margin-top: -12px;">
                        <a href="#">{{ $user->profile->url }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
