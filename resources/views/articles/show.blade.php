@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-16">
      <div class="card border-dark mb-3" style="max-width: 28rem;">
        <div class="card-body text-dark">
          <h5 class="card-title">投稿者：{{ $article->user->name }}</h5>
          <p class="card-text">投稿日：{{ $article->created_at }}</p>
          <p class="card-text">店舗名：{{ $article->name }}</p>
          <p class="card-text">場所：{{ $article->place }}</p>
          <p class="card-text">感想：{{ $article->article }}</p>
          <p class="card-text">おすすめ度：{{ $article->like }}</p>
          @if (Auth::user()->is_like($article->id))
            <form action="{{ route('likes.unlike', [$article->id])}}" method="post">
              @method('delete')
              @csrf
              <input type="submit" value="いいねを外す">
            </form>
          @else
            <form action="{{ route('likes.like', [$article->id])}}" method="post">
                @csrf
              <input type="submit" value="いいねをつける">
            </form>
          @endif
          <div class="text-right mb-2">いいね！
              <span class="">{{ $count_like_users ?? '' }}</span>
          </div>
          @if ($article->user->id === Auth::id())
              <a href="{{ route('articles.edit', [$article->id]) }}">編集</a>
              <form action="{{ route('articles.destroy', [$article->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="削除" class="btn btn-danger">
              </form>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
