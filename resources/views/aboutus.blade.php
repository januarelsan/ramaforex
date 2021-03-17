@extends('layouts.main')

@include('components.header')

@section('main')

<!-- section content begin -->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-width-3-5@m">
                <h1 class="uk-margin-small-bottom">Menghasilkan pendapatan pasif yang konsisten <span class="in-highlight">sejak 2019</span></h1>
                </div>
                <div class="uk-width-1-1@m">
                    <p>
                        PT. Rahman Solusi Indonesia merupakan perusahaan penyedia jasa IT development, Custome Made Software dan jasa multimedia untuk beberapa perusahaan besar di Indonesia sejak tahun 2018 dengan visi menjadi perusahaan konsultan terdepan dalam bidang IT dengan selalu memberikan solusi yang inovatif sehingga mitra mampu bersaing secara nasional maupun global.
                        <br><br>
                        Akrabot merupakan salah satu produk PT. Rahman Solusi Indonesia dalam hal penyedia layanan jasa expert advisor (automatisasi) dalam perdagangan mata uang asing (forex). 
                        <br><br>
                        Akrabot diciptakan sejak tahun 2019 yang sudah familiar di kalangan trader forex khususnya trader nasional. Akrabot merupakan produk perpaduan tim dengan kompetensi tinggi di bidang IT dan professional forex trader yang saling berkerja sama sehingga terciptalah expert advisor yang menguntungkan juga aman digunakan untuk umum.

                    </p>
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
                                <h2>Para ahli di belakang Akrabot</h2>
                                {{-- <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p> --}}
                            </div>
                        </div>
                        <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="{{ asset('wave/img/in-team-1.png')}}" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Chief Executive Officer</p>
                                    <h4 class="uk-margin-small-top">Kristian Dwi Cahyo</h4>
                                    <p>IT advisor dan Co-Founder PT. RSI. Bekerja di bidang IT selama 11 tahun di berbagai perusahaan besar di Indonesia</p>
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
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Professional Forex Advisor</p>
                                    <h4 class="uk-margin-small-top">Aminudin</h4>
                                    <p>Memiliki pengalaman trading forex selama 5 tahun yang menguasai berbagai teknik trading forex secara teknikal</p>
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
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Chief Marketing Officer</p>
                                    <h4 class="uk-margin-small-top">M. Syahrul Ramadhan</h4>
                                    <p>Profesional Marketer Selama 5 tahun yang sudah berkecimpung di berbagai lini industri dengan prinsip Good Customer Relationship.</p>
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
              
    
