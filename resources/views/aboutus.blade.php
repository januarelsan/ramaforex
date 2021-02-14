@extends('layouts.main')

@include('components.header')

@section('main')

<!-- section content begin -->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-width-3-5@m">
                    <h1 class="uk-margin-small-bottom">Putting our clients first <span class="in-highlight">since 1986</span></h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-remove-top">For more than 30 years, we’ve been empowering clients by helping them take control of their financial lives.</p>
                </div>
            </div>
            <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <i class="fas fa-leaf fa-lg in-icon-wrap primary-color"></i>
                    </div>
                    <div>
                        <h3>Philosophy</h3>
                        <p>At vero eos etme accusamus iusto odio ent dignissimos deleniti atque corrupti quos ducimus moll quilla blanditiis expedita est distinctio.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <i class="fas fa-hourglass-end fa-lg in-icon-wrap primary-color"></i>
                    </div>
                    <div>
                        <h3>History</h3>
                        <p>At vero eos etme accusamus iusto odio ent dignissimos deleniti atque corrupti quos ducimus moll quilla blanditiis expedita est distinctio.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <i class="fas fa-flag fa-lg in-icon-wrap primary-color"></i>
                    </div>
                    <div>
                        <h3>Culture</h3>
                        <p>At vero eos etme accusamus iusto odio ent dignissimos deleniti atque corrupti quos ducimus moll quilla blanditiis expedita est distinctio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-offset-top-40 in-offset-bottom-20">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(img/in-team-background-1.png);" data-uk-parallax="bgy: -100">
                    <div class="uk-card-body">
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-3-4@m uk-text-center">
                                <h2>Trust the Professionals</h2>
                                <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p>
                            </div>
                        </div>
                        <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="{{ asset('wave/img/in-team-1.png')}}" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Chief Executive Officer</p>
                                    <h4 class="uk-margin-small-top">Cynthia Dixon</h4>
                                    <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                    <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="{{ asset('wave/img/in-team-2.png')}}" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Executive Assistant</p>
                                    <h4 class="uk-margin-small-top">Arthur Parker</h4>
                                    <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                    <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="{{ asset('wave/img/in-team-3.png')}}" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Marketing Specialist</p>
                                    <h4 class="uk-margin-small-top">Evelyn Mason</h4>
                                    <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                    <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->



@endsection
              
    
