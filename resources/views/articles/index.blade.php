@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-16">
      @foreach ($articles as $item)
      <div class="card border-dark mb-3" style="max-width: 28rem;">
        <div class="card-body text-dark">
          <h5 class="card-title">投稿者：{{ $item->user->name }}</h5>
          <p class="card-text">投稿日：{{ $item->created_at }}</p>
          <p class="card-text">店舗名：{{ $item->name }}</p>
          <p class="card-text">場所：{{ $item->place }}</p>
          <p class="card-text">感想：{{ $item->article }}</p>
          <p class="card-text">おすすめ度：{{ $item->like }}</p>
          <button class="btn btn-primary">詳しく見る</button>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
