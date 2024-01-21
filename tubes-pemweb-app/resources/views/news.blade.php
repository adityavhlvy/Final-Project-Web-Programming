@extends('layouts.mainlayout')

@section('content')
<div class="container mt-4">
    <h1>Latest News</h1>
    
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 25rem;">
                    @if (isset($article['urlToImage']))
                        <img src="{{ $article['urlToImage'] }}" class="card-img-top" alt="{{ $article['title'] }}">
                    @else
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Thumbnail Placeholder">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['description'] }}</p>
                        <a href="{{ $article['url'] }}" class="btn btn-primary" target="_blank">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
