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
          @if ($article->user->id === Auth::id())
              <a href="{{ route('articles.edit', [$article->id]) }}">編集</a>
              <a href="">削除</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
