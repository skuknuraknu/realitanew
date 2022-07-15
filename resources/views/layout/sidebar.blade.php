  <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            {{-- <img src="assets/img/unsyiah.png" width="150"> --}}
                            <img src="{{ asset('assets/img/usk_baru.png') }}" class="img-fluid desktop-logo" alt="logo" width="100">
                            {{-- <img src="assets/img/usk_teks.png" class="header-brand-img toggle-logo" alt="logo"> --}}
                            {{-- <img src="assets/img/usk_teks.png" class="header-brand-img light-logo" alt="logo"> --}}
                            {{-- <img src="assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo"> --}}
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="/"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Data Center</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    {{-- <li><a href="{{ route('ikk.index')}}" class="slide-item">Indikator Kinerja Kegiatan</a></li> --}}
                                    <li><a href="{{ route('ikk.index')}}" class="slide-item ikk_btn">Indikator Kinerja Kegiatan</a></li>
                                    <li><a href="{{ route('kkm.index')}}" class="slide-item">Kontrak Kinerja Kementerian</a></li>
                                    <li><a href="{{ route('rangka.index')}}"  class="slide-item">Rancangan Anggaran</a></li>
                                    <li><a href="{{ route('kodefikasi.index')}}"  class="slide-item">Kodefikasi Jenis Belanja</a></li>
                                </ul>
                            </li>  

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Data Creator</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    {{-- <li><a href="{{ route('ikk.index')}}" class="slide-item">Indikator Kinerja Kegiatan</a></li> --}}
                                    <li><a href="{{ route('perkin.index')}}" class="slide-item ikk_btn">Perkin</a></li>
                                    <li><a href="{{ route('rekat.index')}}" class="slide-item ikk_btn">RKT</a></li>
                                    <li><a href="{{ route('rabkeg.index')}}" class="ps-5 slide-item ikk_btn">RAB KEGIATAN</a></li>
                                    <li><a href="{{ route('rabper.index')}}" class="ps-5 slide-item ikk_btn">RAB PERALATAN</a></li>
                                    <li><a href="{{ route('rabgdg.index')}}" class="ps-5 slide-item ikk_btn">RAB GEDUNG</a></li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Data Verification</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    {{-- <li><a href="{{ route('ikk.index')}}" class="slide-item">Indikator Kinerja Kegiatan</a></li> --}}
                                    <li><a href="{{ route('verPerkin.index')}}" class="slide-item ikk_btn">Perkin</a></li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Data Print</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    {{-- <li><a href="{{ route('ikk.index')}}" class="slide-item">Indikator Kinerja Kegiatan</a></li> --}}
                                    <li><a href="{{ route('perkinReport.index')}}" class="slide-item ikk_btn">Perkin</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>