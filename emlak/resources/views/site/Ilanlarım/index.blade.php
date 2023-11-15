@extends('site.app')
@section('content')
    <div class="all-userprofil">
        <div class="user-setting">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <nav class="user-profil">
                            <ul class="user-menu">
                                <li><a><i class="fa-solid fa-pen-to-square" style="font-size:36px;"></i> </a>
                                    <a href="{{route('yeniilanver.index')}}"> <span> İlan Ver</span></a>
                                </li>
                                <li><a><i class="fa fa-book" style="font-size:36px;"></i></a>
                                    <a href="#ilanlar"> <span> İlanlarım</span></a>
                                </li>
                                <li><a><i class="fa-solid fa-address-card" style="font-size:36px;"></i> </a>
                                    <a href="{{route('userprofile.index')}}" id="uyelik-hover"> <span>Üyelik İşlemleri</span> </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
    <div class="ilanlarım">
        <h4 class="green-ilanlarım">
            <span id="ilanlarım-title"> İlanlarım</span>
        </h4>
        <div class="container">
        <div class="row">
            <div class="col-lg-3">
               <div class="card">
                  <img src="{{asset('assets/img/room/daire.png')}}" height="200" class="card-img-top" alt="...">
                     <div class="card-body">
                <h5 class="card-title">Emlakcım Apartmanı</h5>
                <p class="card-text" id="ilanım-acıklama">İlan açıklama(Satılık  daire 130 m² .)</p>
                <li class="list-group-item ilanım-sehir ilanım-ilce ilanım-mahalle" id="ilanım-sehir">ilan Şehir/ilan ilçe/ilan mahalle</li>
                <li class="list-group-item ilanım-tarih" >İlan Tarih</li>
                <li class="list-group-item ilanım" id="ilanım-durum">Yayında & Onay bekliyor</li>
                <a href="#" class="btn btn-primary git-ilanlarım" id="ilan-btn">İlana Git</a>
                <a href="#" class="btn btn-düzenle düzenle-ilanlarım">Düzenle</a>
                <a href="#" class="btn btn-Sil sil-ilanlarım">Sil</a>
            </div>
        </div>
      </div>
            <div class="col-lg-3">
        <div class="card">
            <img src="{{asset('assets/img/room/prestij.png')}}" height="200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Emlakcım Prestij Evleri</h5>
                <p class="card-text" id="ilanım-acıklama">İlan açıklama(Satılık  100 m² ev.)</p>
                <li class="list-group-item ilanım-sehir ilanım-ilce ilanım-mahalle" id="ilanım-sehir">ilan Şehir/ilan ilçe/ilan mahalle</li>
                <li class="list-group-item ilanım-tarih" >İlan Tarih</li>
                <li class="list-group-item ilanım" id="ilanım-durum">Yayında & Onay bekliyor</li>
                <a href="#" class="btn btn-primary git-ilanlarım" id="ilan-btn">İlana Git</a>
                <a href="#" class="btn btn-düzenle düzenle-ilanlarım">Düzenle</a>
                <a href="#" class="btn btn-Sil sil-ilanlarım">Sil</a>
               </div>
             </div>
           </div>
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{asset('assets/img/room/rezidans.png.')}}" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Emlakcım Rezidans</h5>
                        <p class="card-text" id="ilanım-acıklama">Kiralık 3+1 110 m² lüx eşyalı rezidans.</p>
                        <li class="list-group-item ilanım-sehir ilanım-ilce ilanım-mahalle" id="ilanım-sehir">ilan Şehir/ilan ilçe/ilan mahalle</li>
                        <li class="list-group-item ilanım-tarih" >İlan Tarih</li>
                        <li class="list-group-item ilanım" id="ilanım-durum">Yayında & Onay bekliyor</li>
                        <a href="#" class="btn btn-primary git-ilanlarım" id="ilan-btn">İlana Git</a>
                        <a href="#" class="btn btn-düzenle düzenle-ilanlarım">Düzenle</a>
                        <a href="#" class="btn btn-Sil sil-ilanlarım">Sil</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{asset('assets/img/room/daire.png')}}" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Emlakcım Apartmanı</h5>
                        <p class="card-text" id="ilanım-acıklama">İlan açıklama(Satılık  daire 130 m² .)</p>
                        <li class="list-group-item ilanım-sehir ilanım-ilce ilanım-mahalle" id="ilanım-sehir">ilan Şehir/ilan ilçe/ilan mahalle</li>
                        <li class="list-group-item ilanım-tarih" >İlan Tarih</li>
                        <li class="list-group-item ilanım" id="ilanım-durum">Yayında & Onay bekliyor</li>
                        <a href="#" class="btn btn-primary git-ilanlarım" id="ilan-btn">İlana Git</a>
                        <a href="#" class="btn btn-düzenle düzenle-ilanlarım">Düzenle</a>
                        <a href="#" class="btn btn-Sil sil-ilanlarım">Sil</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    @endsection
