@extends('site.app')
@section('content')
    <section class="ilanlar">
        <div class="middle_title-ilanlar">
            <h2>İlanlar </h2>
        </div>
    </section>
    <div class="resort_gallery_inner imageGallery1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{asset('assets/img/room/rezidans.png.')}}" height="200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Emlakcım Rezidans</h5>
                            <p class="card-text" id="ilanım-acıklama">Kiralık 3+1 110 m² lüx eşyalı rezidans.</p>
                            <li class="list-group-item ilanım-sehir ilanım-ilce ilanım-mahalle" id="ilanım-sehir">ilan Şehir/ilan ilçe/ilan mahalle</li>
                            <li class="list-group-item ilanım-tarih" >İlan Tarih</li>
                            <a href="{{route('İlanDetay.index')}}" class="btn btn-primary" id="ilan-btn">İlana Git</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{asset('assets/img/room/villa.png')}}" height="200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Emlakcım Villa</h5>
                            <p class="card-text" id="ilanım-acıklama">Satılık dublex bahçeli 130 m² villa.</p>
                            <li class="list-group-item ilanım-sehir ilanım-ilce ilanım-mahalle" id="ilanım-sehir">ilan Şehir/ilan ilçe/ilan mahalle</li>
                            <li class="list-group-item ilanım-tarih" >İlan Tarih</li>
                            <a href="{{route('İlanDetay.index')}}" class="btn btn-primary" id="ilan-btn">İlana Git</a>
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
                            <a href="{{route('İlanDetay.index')}}" class="btn btn-primary" id="ilan-btn">İlana Git</a>
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
                            <a href="{{route('İlanDetay.index')}}" class="btn btn-primary" id="ilan-btn">İlana Git</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
