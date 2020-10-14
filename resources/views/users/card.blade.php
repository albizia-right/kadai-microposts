<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class="rounded img-fluid" src="{{ Gravater::get($user->email, ['size' => 500]) }}" alt="">
    </div>
</div>
{{-- フォロー／アンフォローボタン --}}
@incluid(user_follow.follow_button)