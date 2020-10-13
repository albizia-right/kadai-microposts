@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @incluid('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @incluid('users.navtabs')
            {{-- ユーザ一覧 --}}
            @incluid('users.users')
        </div>
    </div>
@endsection