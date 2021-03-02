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
                    <img src="{{ asset('wave/img/in-lazy.gif')}}" data-src="{{ asset('wave/img/in-wave-background-4.jpg')}}" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                </div>
                <span></span>
                <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-3-5@m">
                            <div class="uk-overlay">
                                <h1>Robot Forex Akrabot Menghasilkan Pendapatan Pasif 20% - 30% dari Modal Anda</h1>
                                <p class="uk-text-lead uk-visible@m">Miliki penghasilan tetap tanpa harus bekerja dengan robot autopilot trading forex. Robot Autopilot (software atau script algortima) ditambahkan dalam aplikasi trading forex agar otomatis melakukan transaksi buy dan sell. </p>
                                
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
        <div class="uk-grid-collapse uk-position-relative uk-grid uk-grid-stack" data-uk-grid="">            
            <div class="uk-width-1-1 uk-first-column">                
                <h3><i>“The poor and the middle class work for money. The rich have money work for them” – <span class="in-highlight">Robert Kiyoshi</span></i></h3>                
            </div>            
        </div>
    </div>
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded in-margin-medium-top@s">
                    <div class="uk-grid" data-uk-grid="">
                        <div class="uk-width-expand@s uk-width-2-5@m uk-card-media-right uk-cover-container uk-first-column">
                            <img class="uk-width-1-1 uk-margin-remove-bottom" src="{{ asset('wave/img/problem-0.jpg')}}" alt="sample-image">
                        </div>
                        <div class="uk-width-1-2@s uk-width-expand@m uk-flex uk-flex-middle">
                            <div class="uk-card-body">
                                <h1><span class="in-highlight">Mengapa Harus Investasi?</span></h1>
                                <p>
                                    Secara umum, investasi adalah penanaman aset atau dana yang dilakukan perusahaan atau perorangan untuk jangka waktu tertentu demi memperoleh imbal balik yang lebih besar di masa depan. Rahasia orang kaya adalah investasi, dimana investasi perlu dilakukan sedari dini agar kita dapat mempersiapkan kebutuhan yang terencana maupun yang tidak terencana di masa yang akan datang, seperti dana pendidikan, dana pada saat sakit, maupun dana pensiun. 
                                    <br><br>
                                    Orang kaya tidak lagi memikirkan dana di masa yang akan datang, tidak lagi bekerja 8-10 jam perhari karena uang yang mereka tanamkan bekerja untuk mereka menghasilkan uang.
                                </p>
                                                                
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid="">
                        <div class="uk-width-expand@s uk-width-2-5@m uk-card-media-right uk-cover-container uk-first-column">
                            <img class="uk-width-1-1 uk-margin-remove-bottom" src="{{ asset('wave/img/problem-1.jpg')}}" alt="sample-image">
                        </div>
                        <div class="uk-width-1-2@s uk-width-expand@m uk-flex uk-flex-middle">
                            <div class="uk-card-body ">
                                
                                <h1>Anda Adalah Orang yang <span class="in-highlight">Tepat Untuk Memulai Investasi?</span></h1>
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>Apakah Anda seorang Karyawan?</li>
                                    <li>Apakah Anda seorang Pegawai Negeri / Swasta?</li>
                                    <li>Apakah Anda seorang Entrepeneur?</li>
                                    <li>Apakah Anda seorang Freelance?</li>
                                    <li>Atau bahkan Anda belum memiliki pekerjaan tetap?</li>
                                </ul>                                
                                <p>Anda adalah orang yang tepat untuk memulai investasi, seperti yang disinggung diatas investasi harus dilakukan sejak dini agar anda terbebas secara finansial. Investasi dengan AKRABOT cocok untuk Anda karena dengan algoritma yang kami ciptakan Anda hanya perlu menanamkan dana Anda, sisanya AKRABOT bekerjasama dengan dana anda menghasilkan uang tambahan.</p>                                
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
                <h1><span class="in-highlight">Alasan Bergabung Menghasilkan Profit dengan AKRABOT? </span></h1>
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
                                    <h4 class="uk-margin-remove">KONSISTEN</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Alternative passive income yang dihasilkan konsisten setiap bulan dengan deposit awal terjangkau.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-robot fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">OTOMATIS</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Dana Anda akan bekerja otomatis menghasilkan uang lebih, Anda cukup memantau bagaimana uang anda bertambah setiap harinya.</p>
                        </div>
                    </div>                    
                    <div class="uk-grid-margin">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-tachometer-alt fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">CEPAT </h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Proses administrasi cepat Anda dapat segera menghasilkan setelah modal awal anda setor ke broker</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-tools fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">NYAMAN</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Modal awal untuk menggunakan jasa kami Anda atur sendiri, profit dan modal dapat Anda tarik kapan saja.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-user-shield fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">AMAN </h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">AKRABOT dipantau secara manual oleh tim forex expert kami untuk disesuaikan dengan kondisi pasar menggunakan analisa teknikal dan fundamental yang terukur.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-hand-holding-usd fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <h4 class="uk-margin-remove">MENGUNTUNGKAN</h4>
                                </div>
                            </div>
                            <p class="uk-margin-small-top">Pembagian profit 30%:70% Anda menerima 70% dari total profit. Kebijakan perusahaan kami, jika Anda mengalami kerugian, dana kami ganti 100%* </p>
                        </div>
                    </div>
                </div>
                <p class="uk-text-small uk-text-muted uk-margin-large-bottom">
                    *Syarat dan Ketentuan Berlaku
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
                        {{-- <p>Kami telah mentoring lebih dari 8000 user sehingga dapat menghasilkan profit setiap bulannya secara otomatis tanpa perlu titip dana ke orang lain.</p> --}}
                        <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-2@m in-margin-bottom-30@s" data-uk-grid="">
                            <div class="uk-first-column">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>Sumber penghasilan baru yang konsisten setiap bulan</li>
                                    <li>Rasa aman berinvestasi karena robot kami dibuat berdasarkan algoritma yang menyesuaikan pasar</li>
                                    <li>Mentoring bagaimana berinvestasi yang aman dan nyaman</li>
                                    <li>Komunitas trader yang juga ikut berpenghasilan secara pasif</li>
                                    
                                </ul>
                            </div>
                            <div class="in-margin-small-top@s in-margin-bottom@s">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>Uang anda bekerja untuk Anda sekalipun Anda tidur</li>
                                    <li>Bisnis dengan modal liquid, dana dapat ditarik kapan saja</li>
                                    <li>Model bisnis dengan modal sangat terjangkau namun penghasilan sangat besar</li>
                                    <li>Bagi hasil yang sangat menguntungkan 30%:70%</li>
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
                <h1 class="uk-margin-medium-bottom"><span class="in-highlight">Paket</span> Investasi</h1>
            </div>
            <div class="uk-width-3-4@m">
                <div class="uk-grid-collapse uk-child-width-1-2@m in-wave-pricing uk-grid" data-uk-grid="">
                    <div class="uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium">
                            <p class="uk-text-small uk-text-uppercase">Minimum pembayaran<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">IDR 3.000.000</span></p>
                            <h2 class="uk-margin-top uk-margin-remove-bottom">Ekonomis</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Mulai investasi anda dengan modal sangat terjangkau.</p>
                            <hr>
                            <ul class="uk-list">
                                <li>Modal awal cukup 5 Juta</li>
                                <li>Lot transaksi pertama 0,4 Lot</li>
                                <li>Biaya administrasi 500.000</li>
                                <li><br></li>
                                <li>Estimasi profit perbulan 1.000.000 </li>
                                <li><br></li>
                                <li>Bagi hasil 30% : 70%</li>
                                <li>*Anda menerima 70% dari total profit</li>
                            </ul>
                            <a href="{{ route('register') }}" class="uk-button uk-button-default uk-border-rounded uk-align-center">Buka Akun<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <p class="uk-text-small uk-text-uppercase">Minimum pembayaran<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">IDR 50.000.000</span></p>
                            <h2 class="uk-margin-top uk-margin-remove-bottom">Sultan</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Mulai raih penghasilan besar dengan aman dan nyaman</p>
                            <hr>
                            <ul class="uk-list ">
                                <li>Modal awal 50 juta</li>
                                <li>Lot transaksi 0,04 Lot</li>
                                <li>Biaya Administrasi 1.000.000</li>
                                <li><br></li>
                                <li>Estimasi profit perbulan 10.000.000</li>
                                <li><br></li>
                                <li>Bagi hasil 30% : 70%</li>
                                <li>*Anda menerima 70% dari total profit</li>
                            </ul>
                            <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Buka Akun<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section in-wave-17 in-offset-top-20 in-offset-bottom-40" tabindex="-1" uk-slider>
    <div class="uk-container">
        <div class="uk-width-1-1 uk-text-center">
            <h1 class="uk-margin-medium-bottom"><span class="in-highlight">Testimoni</span> dari para Traders</h1>
        </div>
        <div uk-slider>
            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                <li>
                    <img src="{{ asset('testimony_imgs/testimony_0.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{ asset('testimony_imgs/testimony_0.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{ asset('testimony_imgs/testimony_0.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{ asset('testimony_imgs/testimony_0.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{ asset('testimony_imgs/testimony_0.jpg')}}" alt="">
                </li>
            </ul>
        </div>
        
    
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        
    </div> 
    

</div>

@endsection



<!-- Javascript -->
@section('scripts')

<script src="{{ asset('wave/js/config-theme.js')}}"></script>    
@endsection


