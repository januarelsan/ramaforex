
@extends('layouts.main')

@section('content')

<div class="uk-grid" data-uk-grid>
    <div class="uk-width-2-3@m">
        <div class="uk-grid-medium uk-child-width-1-2@m in-blog-1" data-uk-grid>
            <div class="uk-width-1-1">
                <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                    <div class="uk-card-media-top">
                        <img src="{{ URL::to($articles->items()[0]->img_url) }}" alt="sample-image">
                    </div>
                    <div class="uk-card-body">
                        <h3>
                            <a href="{{route('blog.detail.show', $articles->items()[0]->id)}}">{{$articles->items()[0]->title}}</a>
                        </h3>
                        <p>
                            {{ \Illuminate\Support\Str::limit($articles->items()[0]->body, 300, $end=' ...') }}
                            
                        </p>
                        <div class="uk-flex uk-flex-middle">                            
                            <div>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">                                    
                                    {{ Carbon\Carbon::parse($articles->items()[0]->created_at)->format('d/m/Y')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer uk-clearfix">
                        <div class="uk-float-left">
                            @foreach ($articles->items()[0]->tags as $tag)      
                                @if ($loop->index < 3)
                                    <a ><span class="uk-label uk-label-success uk-border-pill">{{$tag->value}}</span></a>                                    
                                @endif
                            @endforeach
                            
                            
                        </div>
                        <div class="uk-float-right">                            
                            <a href="{{route('blog.detail.show', $articles->items()[0]->id)}}" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </article>
            </div>
            @foreach ($articles as $article)
                @if ($loop->index > 0)
                <div>
                    <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-body">
                            <h3>
                                <a href="{{route('blog.detail.show', $article->id)}}">{{$article->title}}</a>
                            </h3>
                            <p>
                                {{ \Illuminate\Support\Str::limit($article->body, 100, $end=' ...') }}
                            </p>
                            <div class="uk-flex uk-flex-middle">                                
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">                                                                                
                                        {{ Carbon\Carbon::parse($article->created_at)->format('d/m/Y')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-footer uk-clearfix">
                            <div class="uk-float-left">
                                <a ><span class="uk-label uk-label-success uk-border-pill">{{$article->tags[0]->value}}</span></a>                            
                            </div>
                            <div class="uk-float-right">
                                <a href="{{route('blog.detail.show', $article->id)}}" class="uk-button uk-button-text">Read more</a>
                            </div>
                        </div>
                    </article>
                </div> 
                @endif
            
            @endforeach
            
        </div>
        <!-- module pagination begin -->
        {{ $articles->links('vendor.pagination.default') }}        
        <!-- module pagination end -->
    </div>
    <div class="uk-width-expand@m">
        <!-- widget content begin -->
        <aside class="uk-margin-medium-bottom">
            <form class="uk-search uk-search-default uk-width-1-1">
                <a href="#" class="uk-search-icon-flip" data-uk-search-icon></a>
                <input class="uk-input uk-border-pill" type="search" placeholder="Search here...">
            </form>
        </aside>
        <!-- widget content end -->
        <!-- widget content begin -->
        <aside class="uk-margin-medium-bottom">
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Categories</h5>
                <ul class="uk-list in-widget-category">
                    <li><a href="#">Top stories<span class="uk-label uk-label-success uk-border-pill uk-float-right">2</span></a></li>
                    <li><a href="#">Investments<span class="uk-label uk-label-success uk-border-pill uk-float-right">6</span></a></li>
                    <li><a href="#">Opinions<span class="uk-label uk-label-success uk-border-pill uk-float-right">3</span></a></li>
                    <li><a href="#">Community<span class="uk-label uk-label-success uk-border-pill uk-float-right">4</span></a></li>
                    <li><a href="#">News<span class="uk-label uk-label-success uk-border-pill uk-float-right">7</span></a></li>
                </ul>
            </div>
        </aside>
        <!-- widget content end -->
        <!-- widget content begin -->
        <aside class="uk-margin-medium-bottom">
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Popular</h5>
                <ul class="uk-list in-widget-popular">
                    <li>
                        <div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-rounded" src="img/in-widget-image-1.jpg" alt="sample-image" width="74" height="74">
                            </div>
                            <div class="uk-width-expand uk-margin-left">
                                <a href="#">Brexit effects may reflect in business ...
                                    <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Wed Apr 5, 2019</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-rounded" src="img/in-widget-image-2.jpg" alt="sample-image" width="74" height="74">
                            </div>
                            <div class="uk-width-expand uk-margin-left">
                                <a href="#">Investors bet on a quiet tech revolu ...
                                    <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Tue Apr 15, 2019</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-rounded" src="img/in-widget-image-3.jpg" alt="sample-image" width="74" height="74">
                            </div>
                            <div class="uk-width-expand uk-margin-left">
                                <a href="#">Destructive weed threatens U.S. corn ...
                                    <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Mon Apr 4, 2019</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- widget content end -->
        <!-- widget content begin -->
        <aside class="uk-margin-medium-bottom">
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Tags</h5>
                <div class="uk-margin-top in-widget-tag">
                    <a href="#"><span class="uk-label uk-border-pill">Asia</span></a>
                    <a href="#"><span class="uk-label uk-border-pill">Business</span></a>
                    <a href="#"><span class="uk-label uk-border-pill">Startups</span></a>
                    <a href="#"><span class="uk-label uk-border-pill">Automotive</span></a>
                    <a href="#"><span class="uk-label uk-border-pill">Travels</span></a>
                    <a href="#"><span class="uk-label uk-border-pill">Marketing</span></a>
                    <a href="#"><span class="uk-label uk-border-pill">Technology</span></a>
                    <a href="#"><span class="uk-label uk-border-pill">Politics</span></a>
                </div>
            </div>
        </aside>
        <!-- widget content end -->
    </div>
</div>


@endsection
        