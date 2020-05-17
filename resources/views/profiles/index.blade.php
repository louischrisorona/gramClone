@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col-3 p-5">
            <img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_ohc=0Dx0kbwZdmIAX_aq5HV&oh=5cff7cfdba64e1723d64afcc8ce78ac0&oe=5EC9FB46" alt="logo" class="rounded-circle">
        </div>
        <div class="col-6 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                    <a href="#">Add new post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-5"><strong>45.3k</strong> Followers</div>
                <div class="pr-5"><strong>240</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="/p/create">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/$post->id">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
        <div class="col-4">
            <img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/e35/c94.0.561.561a/94171296_697817847426178_8140418426111811606_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=EpmKpewBE2MAX-0CCnW&oh=49f7525dfe86543876b9fda8cf1774d7&oe=5ECAC0AE" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/93204126_648778102627386_8663605803160344359_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=106&_nc_ohc=4PwOaFHA4OoAX8V_Xt3&oh=cb0b1d4bb5da8dbabeb00400f0a49614&oe=5EC9571C" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.112.931.931a/s640x640/92884662_624164275106992_3255479291412722786_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=104&_nc_ohc=JRFgJm11bCQAX-heoyr&oh=91113755c8b9cbad8ab20a9d3a5a8abc&oe=5EC8F9D7" class="w-100">
        </div>
    </div>
</div>
@endsection
