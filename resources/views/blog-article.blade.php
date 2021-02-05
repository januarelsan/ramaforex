@extends('layouts.main')

@section('content')

<div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
    <div class="uk-width-1-1 in-figure-available">
        <img class="uk-width-1-1 uk-border-rounded" src="{{ asset('wave/img/in-blog-image-10.jpg')}}" alt="sample-image">
    </div>
    <div class="uk-width-3-4@m">
        <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
            <div class="uk-card-body">
                <div class="uk-flex uk-flex-middle uk-margin-remove-bottom">
                    <div class="uk-margin-small-right">
                        <img class="uk-border-pill uk-background-muted" src="{{ asset('wave/img/in-team-5.png')}}" alt="image-team" width="24" height="24">
                    </div>
                    <div>
                        <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                            <a href="#">Jeffrey Reyes</a>
                            <span class="uk-margin-small-left uk-margin-small-right">•</span>
                            May 21, 2020
                        </p>
                    </div>
                </div>
                <h2 class="uk-margin-top uk-margin-medium-bottom">Here’s what is driving GM’s reported plans to develop a commercial electric van</h2>
                <p class="uk-dropcap">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabom voluptatem reprehenderit qui in ea voluptate.</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
                <h4>Three main factors</h4>
                <p>Consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
                <ul class="uk-list uk-list-bullet">
                    <li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</li>
                    <li>Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
                    <li>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
                </ul>
                <blockquote class="in-blockquote" cite="#">
                    <p class="uk-margin-small-bottom">At vero eose accusamus iusto dignissim ducimus blanditiis praesentium voluptatum deleniti atque oddi corrupti dolores membrant.</p>
                    <footer>
                        <cite>Mark Harris</cite>
                    </footer>
                </blockquote>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, aut reiciendis voluptatibus maiores consequatur perferendis doloribus asperiores repellat.</p>
                <h4>A report conclusion</h4>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
            </div>
            <div class="uk-card-footer uk-clearfix">
                <div class="uk-float-left in-article-tags">
                    <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                    <a href="#" class="uk-link-muted">Regional</a>, &nbsp;<a href="#" class="uk-link-muted">Commodities</a>, &nbsp;<a href="#" class="uk-link-muted">News</a>
                </div>
                <div class="uk-float-right in-article-share">
                    <a href="#" data-uk-tooltip="Share with Facebook" class="uk-label uk-border-pill in-brand-facebook"><i class="fab fa-facebook-f fa-sm"></i></a>
                    <a href="#" data-uk-tooltip="Share with Twitter" class="uk-label uk-border-pill in-brand-twitter"><i class="fab fa-twitter fa-sm"></i></a>
                    <a href="#" data-uk-tooltip="Share with Pinterest" class="uk-label uk-border-pill in-brand-pinterest"><i class="fab fa-pinterest-p fa-sm"></i></a>
                    <a href="#" data-uk-tooltip="Share with Email" class="uk-label uk-border-pill in-generic-email"><i class="fas fa-envelope fa-sm"></i></a>
                </div>
            </div>
        </article>
    </div>
</div>

@endsection
            
    <!-- Javascript -->
    {{-- <script src="{{ asset('wave/js/vendors/uikit.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('wave/js/vendors/indonez.min.js')}}"></script> --}}
    
