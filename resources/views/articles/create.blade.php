@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新規投稿') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('articles.store') }}">
                        @csrf


                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('店舗名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('都道府県') }}</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place') }}">

                                @error('place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="article" class="col-md-4 col-form-label text-md-right">{{ __('レビュー') }}</label>

                            <div class="col-md-6">
                                <input id="article" type="text" class="form-control @error('article') is-invalid @enderror" name="article" value="{{ old('article') }}">

                                @error('article')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="like" class="col-md-4 col-form-label text-md-right">{{ __('おすすめ度') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="like" id="like">
                                  <option value="">選択してください</option>
                                  <option value="1" @if(old('like') === '1') selected @endif>1</option>
                                  <option value="2" @if(old('like') === '2') selected @endif>2</option>
                                  <option value="3" @if(old('like') === '3') selected @endif>3</option>
                                  <option value="4" @if(old('like') === '4') selected @endif>4</option>
                                  <option value="5" @if(old('like') === '5') selected @endif>5</option>
                                </select>

                                @error('like')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('投稿する') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
