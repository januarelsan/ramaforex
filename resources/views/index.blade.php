@extends('layouts.main')


<!-- header content begin -->
<header>
    <div class="uk-section uk-padding-remove-vertical in-header-home ">
        @include('components.nav')
        <div class="uk-container">
            <div class="uk-grid">
                
                @include('components.subnav')
                
            </div>
        </div>
    </div>
</header>
<!-- header content end -->


@section('main')
<div class="uk-section uk-padding-remove-vertical">
    <div class="in-slideshow" data-uk-slideshow>
        <ul class="uk-slideshow-items uk-light">
            <li>
                <div class="uk-position-cover">
                    <img src="{{ asset('wave/img/in-lazy.gif')}}" data-src="{{ asset('wave/img/in-wave-background-3.jpg')}}" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                </div>
                <span></span>
                <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-3-5@m">
                            <div class="uk-overlay">
                                <h1>Passive Income ratusan juta hingga Milyaran setiap Bulannya</h1>
                                <p class="uk-text-lead uk-visible@m">Jika Anda tidak dapat menemukan cara bagaimana uang bekerja untuk anda ketika anda tidur, maka anda bersiap untuk bekerja seumur hidup anda!</p>
                                <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </li>
            
        </ul>
        
    </div>
</div> <!-- section content begin -->


<div class="uk-section uk-padding-large">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded in-margin-medium-top@s">
                    <div class="uk-grid" data-uk-grid="">
                        <div class="uk-width-expand@s uk-width-2-5@m uk-card-media-right uk-cover-container uk-first-column">
                            <img class="uk-width-1-1 uk-margin-remove-bottom" src="{{ asset('wave/img/covid1.jpg')}}" alt="sample-image">
                        </div>
                        <div class="uk-width-1-2@s uk-width-expand@m uk-flex uk-flex-middle">
                            <div class="uk-card-body">
                                <h1>Apakah Pandemi Menghancurkan <span class="in-highlight">Penghasilan anda?</span></h1>
                                <p>Anda memiliki Peluang yang sangat luar biasa disini untuk menyelesaikan semua permasalahan ini</p>
                                
                                <hr class="uk-visible@m">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>Butuh biaya untuk kuliah anak?!</li>
                                    <li>Hutang sudah banyak yang nagih?!</li>
                                    <li>Tabungan mulai menipis?!</li>
                                    <li>Tidak bisa beli rokok gudang garam filter?!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid="">
                        <div class="uk-width-expand@s uk-width-2-5@m uk-card-media-right uk-cover-container uk-first-column">
                            <img class="uk-width-1-1 uk-margin-remove-bottom" src="{{ asset('wave/img/covid1.jpg')}}" alt="sample-image">
                        </div>
                        <div class="uk-width-1-2@s uk-width-expand@m uk-flex uk-flex-middle">
                            <div class="uk-card-body">
                                <h1>Apakah itu semua Problem  <span class="in-highlight">Anda Sekarang?</span></h1>
                                <p>Anda memiliki Peluang yang sangat luar biasa disini untuk menyelesaikan semua permasalahan ini</p>
                                
                                <hr class="uk-visible@m">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>Tidak Punya Modal Besar untuk memulai usaha!</li>
                                    <li>Kurang pengetahuan tentang Bisnis!</li>
                                    <li>Belum Punya Pengalaman tentang Bisnis!</li>
                                    <li>Takut gagal memulai Bisnis!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

<!-- section content begin -->
<div class="uk-section uk-padding-large in-offset-bottom-70 in-wave-6">
    <div class="uk-container">
        <div class="uk-grid-collapse uk-position-relative uk-grid uk-grid-stack" data-uk-grid="">
            <div class="uk-position-bottom-right uk-first-column uk-grid-margin">
                <img src="{{ asset('wave/img/in-wave-background-2.png') }}" alt="wave-hq" width="540" height="513">
            </div>
            <div class="uk-width-1-1 uk-first-column">
                <h1>Keunggulan <span class="in-highlight">Bergabung</span> dengan kami</h1>
            </div>
            <div class="uk-width-3-5@m uk-first-column uk-grid-margin">
                <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-margin-medium-bottom uk-grid" data-uk-grid="">
                    <div class="uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-award fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">PROFITABLE</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Terbukti menghasilkan profit secara konsisten selama 2 tahun dan belum pernah gagal mencetak profit setiap bulannya.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-tools fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">SIMPLE</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Hanya perlu menggunakan Handphone untuk memantaunya.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-users fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">OTOMATIS</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Berjalan secara otomatis 100% tanpa perlu otak atik.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-building fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">NYAMAN</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">modal dipegang sendiri, profit dan modalnya bisa ditarik kapan saja.</p>
                        </div>
                    </div>
                </div>
                <p class="uk-text-small uk-text-muted uk-margin-large-bottom">
                    Tenang saja, anda tidak perlu tau tentang trading cukup Mesin Pencetak profit yang 100% menghasilkan.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->


<div class="uk-section in-wave-17 in-offset-top-20 in-offset-bottom-40">
    <div class="uk-container">
        <div class="uk-grid" data-uk-grid="">
            <div class="uk-width-1-3@m uk-first-column">
                <h1>Logic Kerja<br><span class="in-highlight">BOT</span></h1>
                <p>Logic Bot Kami sangat Aman. Didampingin oleh Trader Profesional, sehingga Logic Bot Kami selalu UPDATE dengan kondisi Pasar</p>
                
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-grid uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center">
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove-bottom" src="{{ asset('wave/img/in-wave-icon-14.svg')}}" alt="wave-icon" width="64">
                        <h5 class="uk-margin-small-top">Single posisi di XAUUSD</h5>
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove-bottom" src="{{ asset('wave/img/in-wave-icon-15.svg')}}" alt="wave-icon" width="64">
                        <h5 class="uk-margin-small-top">Target kerja 0,5% sd 3% per hari dengan stoploss maksimal 3% perhari</h5>
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove-bottom" src="{{ asset('wave/img/in-wave-icon-16.svg')}}" alt="wave-icon" width="64">
                        <h5 class="uk-margin-small-top">Bot hanya 1 kali transaksi perhari jika hasilnya PROFIT</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>            
</div>


<!-- section content begin -->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-3-3@m">
                <div class="uk-grid uk-grid-small" data-uk-grid="">
                    <div class="uk-width-auto@m uk-first-column">
                        <i class="fas fa-money-bill-wave fa-2x in-icon-wrap large primary-color uk-margin-right"></i>
                    </div>
                    <div class="uk-width-expand">
                        <h3>Apa yang anda dapatkan  ?</h3>
                        <p>Kami telah mentoring lebih dari 8000 user sehingga dapat menghasilkan profit setiap bulannya secara otomatis tanpa perlu titip dana ke orang lain.</p>
                        <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-2@m in-margin-bottom-30@s" data-uk-grid="">
                            <div class="uk-first-column">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>Sumber penghasilan baru yang otomatis</li>
                                    <li>Passive Income terbukti konsisten</li>
                                    <li>Penghasilan tambahan diluar pekerjaan anda saat ini</li>
                                    <li>Solusi Bisnis di masa Pandemi</li>
                                </ul>
                            </div>
                            <div class="in-margin-small-top@s in-margin-bottom@s">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>Bisnis baru tanpa titip dana ke orang lain</li>
                                    <li>Bisnis yg modalnya Liquid/ bisa ditarik kapanpun anda mau</li>
                                    <li>Mentoring sampai bisa menghasilkan</li>
                                    <li>Whatsapp Group Member</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- section content end -->

<div class="uk-section uk-padding-large">
    <div class="uk-container in-wave-4">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-1 uk-text-center">
                <h1 class="uk-margin-medium-bottom"><span class="in-highlight">Complete</span> package for every traders</h1>
            </div>
            <div class="uk-width-3-4@m">
                <div class="uk-grid-collapse uk-child-width-1-2@m in-wave-pricing uk-grid" data-uk-grid="">
                    <div class="uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium">
                            <p class="uk-text-small uk-text-uppercase">Minimum pembayaran<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">IDR 200.000</span></p>
                            <h2 class="uk-margin-top uk-margin-remove-bottom">Classic account</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Benefit from industry-leading entry prices</p>
                            <hr>
                            <ul class="uk-list uk-list-bullet">
                                <li>One of the established industry leaders</li>
                                <li>Three decades of trading know-how</li>
                                <li>Award-winning customer service*</li>
                                <li>Highly-regarded trader education*</li>
                                <li>Advanced risk management</li>
                                <li>Tax-free spread betting profits</li>
                                <li>Low minimum deposit</li>
                            </ul>
                            <a href="#" class="uk-button uk-button-default uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <p class="uk-text-small uk-text-uppercase">Minimum pembayaran<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">IDR 500.000</span></p>
                            <h2 class="uk-margin-top uk-margin-remove-bottom">Platinum account</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Receive even tighter spreads and commissions</p>
                            <hr>
                            <ul class="uk-list uk-list-bullet">
                                <li>Award-winning trading platform*</li>
                                <li>Wide range of charting tools</li>
                                <li>Fast, automated excecution</li>
                                <li>Expert news &amp; analysis</li>
                                <li>Competitive spreads</li>
                                <li>Advanced trading tools</li>
                                <li>Tax-free spread betting profits</li>
                            </ul>
                            <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<!-- Javascript -->
@section('scripts')

<script src="{{ asset('wave/js/config-theme.js')}}"></script>    
@endsection


