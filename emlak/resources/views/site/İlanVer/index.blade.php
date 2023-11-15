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
                                    <a href="{{route('ilanlistem.index')}}"> <span> İlanlarım</span></a>
                                </li>
                                <li><a><i class="fa-solid fa-address-card" style="font-size:36px;"></i> </a>
                                    <a href="{{route('userprofile.index')}}" id="uyelik-hover"> <span>Üyelik İşlemleri</span> </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="panel">
                        <div class="control">
                            <h1 class="panel-title">İlan <span>Bilgileri</span></h1>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label">İlan Başlığı
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="text" id="ilan-baslık"  placeholder="Rezidans">
                                    <span class="panel-uyarı">Lütfen ilan başlığı giriniz.</span>
                                </div>
                            </div>
                            <div class="panel-item-2">
                                <div class="new-panel-item">
                                    <p class="new-panel-label" >İlan Açıklaması
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <form  name="form" action="index.asp" method="post" id="ilanver-acıklama">
                                        <textarea class="input-first" id="ilan-acıklama" cols="50" rows="5"></textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">İl
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="text" id="ilan-il" placeholder="İzmir" required>
                                    <span class="panel-uyarı" id="il">Lütfen il'i giriniz.</span>
                                </div>
                            </div>
                            <div class="panel-item-2">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">İlçe
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="text" id="ilan-ilçe" placeholder="Konak" required >
                                    <span class="panel-uyarı" id="ilçe">Lütfen ilçe'i giriniz.</span>
                                </div>
                            </div>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Mahalle
                                        <span  class="panel-required" >*</span>
                                    </p>
                                    <input class="input-first" type="text" id="ilan-mahalle" placeholder="Karataş">
                                    <span class="panel-uyarı" id="mahalle">Lütfen mahalle'yi giriniz.</span>
                                </div>
                            </div>
                            <div class="panel-item-2">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Satılık & Kiralık
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <select class="input-first" type="text" id="ilan-durum">
                                        <option value="Satılık" id="satılık">Satılık</option>
                                        <option value="Kiralık" id="kiralık">Kiralık</option>
                                    </select>
                                    <span class="panel-uyarı"></span>
                                </div>
                            </div>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Eşyalı & Eşyasız
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <select class="input-first" type="text" id="ilan-esya">
                                        <option value="Eşyalı" id="esyali">Eşyalı</option>
                                        <option value="Eşyasız" id="esyasiz">Eşyasız</option>
                                    </select>
                                    <span class="panel-uyarı"></span>
                                </div>
                            </div>
                            <div class="panel-item-2">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Oda Sayısı
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="number" id="ilan-oda" placeholder="3+1">
                                    <span class="panel-uyarı" id="oda">Lütfen toplam oda sayısını giriniz.</span>
                                </div>
                            </div>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">m²
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="number" id="ilan-m²" placeholder="120 m²">
                                    <span class="panel-uyarı">Lütfen toplam m²'yi giriniz.</span>
                                </div>
                            </div>
                            <div class="panel-item-2">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Bina Yaşı
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="number" id="ilan-m²" placeholder="2">
                                    <span class="panel-uyarı">Lütfen bina yaşını giriniz</span>
                                </div>
                            </div>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Isıtma Türü
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <select class="input-first" type="text" id="ilan-isitma">
                                        <option value="Merkezi Isıtma" id="merkezi-isitma">Merkezi Isıtma</option>
                                        <option value="Doğalgaz" id="dogalgaz">Doğalgaz</option>
                                        <option value="Diğer" id="diger">Diğer</option>
                                    </select>
                                    <span class="panel-uyarı"></span>
                                </div>
                            </div>
                            <div class="panel-item-2">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Fiyat
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="number" id="ilan-fiyat"  placeholder="TL">
                                    <span class="panel-uyarı" ></span>
                                </div>
                            </div>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Tarih
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="date" id="ilan-tarih" name="trip-start"
                                           value="2023-01-01"
                                           min="2023-01-01" max="2023-12-31" >
                                </div>
                            </div>
                            <div class="panel-item-2">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Görsel Ekle
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="file" accept="image/*" id="img-files" multiple>
                                    <span class="panel-uyarı " id="image-untitle">Lütfen görsel ekleyiniz.</span>
                                </div>
                            </div>
                            <div class="panel-item">
                                <div class="panel-control">
                                    <p class="panel-label" id="knm">Telefon No
                                        <span  class="panel-required">*</span>
                                    </p>
                                    <input class="input-first" type="tel" id="ilan-telno" name="phone"
                                           placeholder="0545-528-72-97">
                                </div>
                            </div>
                            <form>

                                <input type="button" id="btn-ilanyayınla" class="btn-ilan" value="Yayınla" onClick="alert('İlanınız incelendikten sonra yayınlanacaktır'); return true">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
