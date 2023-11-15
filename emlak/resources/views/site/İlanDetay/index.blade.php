@extends('site.app')
@section('content')
   <section class="İlandetay-page">
    <div class="container">
        <div class="row">
            <div class="classfied-detail-blog">
                <div class="classfied-detail">
                    <div class="DeteailTitle">
                        <h1>Emlakcım Villa</h1>
                    </div>
                    <div class="classfiedDetailContent">
                        <div class="classfiedDetailPhotos">
                            <div class="classfiedDetailMainPhoto">
                                <label class="loader">
                                    <div class="column small-11 small-centered">
                                        <div class="slider slider-for">
                                            <div class="item-slider">
                                                <img  class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/1.jpg')}}" width="200" height="250" />
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/2.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/3.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/4.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/4.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/4.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                        </div>
                                        <div class="slider slider-nav">
                                            <div class="item-slider">
                                                <img  class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/1.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/2.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/3.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/4.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/4.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                            <div class="item-slider">
                                                <img class="ilandetay-slider" src="{{asset('assets/img/slider/ilandetay/4.jpg')}}"  height="250" draggable="false"/>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="Info">
                            <h3 id="info-fiyat">11.250.000 TL </h3>
                            <h2 id="Info-adres">
                                <a  href="#" data-click-category="İlan Detay Events" data-click-event="Click - Detay Alanı" data-click-label="Adres Breadcrumb | İzmir">
                                    İzmir</a>
                                <span>/</span>
                                <a   href="#" data-click-category="İlan Detay Events" data-click-event="Click - Detay Alanı" data-click-label="Adres Breadcrumb | Konak">
                                    Konak</a>
                            </h2>
                            <ul class="InfoList">
                                <li>
                                    <strong>İlan No</strong>&nbsp;
                                    <span class="InfoList-id" id="classifiedId" data-classifiedid="1068583635">1068583635</span>
                                </li>
                                <li>
                                    <strong>
                                        İlan Tarihi</strong>&nbsp;
                                       <span class="yayin-tarih">19 Aralık 2022</span>
                                </li>
                                <li>
                                    <strong>Emlak Tipi</strong>&nbsp;
                                    <span class="bina-tipi">Satılık &nbsp;</span>
                                </li>
                                <li>
                                    <strong>m² (Brüt)</strong>&nbsp;
                                    <span class="bina-burut">600</span>
                                </li>
                                <li>
                                    <strong>Oda Sayısı</strong>&nbsp;
                                    <span class="oda-sayisi">3+1</span>
                                </li>
                                <li>
                                    <strong>Kat Sayısı</strong>&nbsp;
                                    <span class="bina-kat">4</span>
                                </li>
                                <li>
                                    <strong>Isıtma</strong>&nbsp;
                                    <span class="bina-isitma">Doğalgaz (Kombi)</span>
                                </li>
                                <li>
                                    <strong>Bina Yaşı</strong>&nbsp;
                                    <span class="bina-yas">1</span>
                                </li>
                                <li>
                                    <strong>Eşyalı</strong>&nbsp;
                                    <span class="esyali">Hayır</span>
                                </li>
                                <form class="acıklama-box" name="form-acıklama" action="index.asp" method="post">
                                    <b id="acıklama">İlan Açıklama</b><br/>
                                    <textarea class="explain-box" cols="40" rows="8" disabled ></textarea><br /><br />
                                </form>
                                <p class="classifiedIdBox ">
                                    <a href="" rel="nofollow" class="classifiedFeedback">
                                        <i class="fas fa-flag"></i>
                                        <span>İlan ile İlgili Şikayetim Var</span>
                                    </a>
                                </p>
                            </ul>

                        </div>
                        <div class="OtherBoxes">
                            <div class="UserBox">
                                <div class="username-info-area">
                                    <h5>Sinan Üremiş</h5>
                                </div>
                            </div>
                            <div class="getUserInfo noBorder">
                                <p class="userRegistrationDate">
                                    Hesap Açma Tarihi
                                    <span>Kasım 2022</span>
                                </p>
                            </div>
                            <ul id="phoneInfoPart" class="userContactInfo" data-hj-suppress="">
                                <li>
                                    <strong class="mobile">Cep</strong>
                                    <span class="usernumber">0 (535) 461 11 11</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
    @endsection
