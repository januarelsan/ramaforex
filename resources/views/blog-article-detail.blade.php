@extends('layouts.main')

@include('components.header')

@section('main')

<div class="uk-section uk-margin-top">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
            <div class="uk-width-1-1 in-figure-available">
                <img class="uk-width-1-1 uk-border-rounded" src="{{ URL::to($article->img_url) }}" alt="sample-image">
            </div>
            <div class="uk-width-3-4@m">
                <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                    <div class="uk-card-body">
                        <div class="uk-flex uk-flex-middle uk-margin-remove-bottom">                    
                            <div>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">                            
                                    {{ Carbon\Carbon::parse($article->created_at)->format('d/m/Y')}}                            
                                </p>
                            </div>
                        </div>
                        <h2 class="uk-margin-top uk-margin-medium-bottom">{{ $article->title }}</h2>
                        <p class="uk-dropcap">{{ $article->body }}</p>                
                    </div>
                    <div class="uk-card-footer uk-clearfix">
                        <div class="uk-float-left in-article-tags">
                            <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                            @foreach ($article->tags as $tag)
                                <a href="#" class="uk-link-muted">{{ $tag->value }}</a>,
                            @endforeach                                                        
                        </div>
                        
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>



@endsection
              
    
