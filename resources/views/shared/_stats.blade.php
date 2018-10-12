<div class="stats">
    <a href="{{route('users.followings',$user->id)}}">
        <strong class="stat" id="following">
            {{count($user->followings)}}
        </strong>
        关注
    </a>
    <a href="{{route('users.followers',$user->id)}}">
        <storng id="followers" class="stat">
            {{count($user->followers)}}
        </storng>
        粉丝
    </a>
    <a href="{{route('users.show',$user->id)}}">
        <strong id="statuses" class="stat">
            {{$user->statuses()->count()}}
        </strong>
        微博
    </a>
</div>














