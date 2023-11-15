@extends('site.app')
@section('content')

<div class="About-us">
    <h1 class="header-hakkımızda"> Hakkımızda </h1>
    <img src="{{asset('assets/img/hakkımızda.png')}}"  height="150" alt="">
    <h5 class="alt-baslık">Güvenilir emlak siteniz </h5>
    <hr>
    <div class="p-hakkımızda">
        <p>Emlakcım, sadece emlak sektörüne odaklanmış, müşterilerine ilan yayınlama ve katma değerli servis hizmetleri veren,
            Türkiye’nin gayrimenkul özelinde alım, satım, platformudur.</p>
        <p>Ülkenin dört köşesine yayılan saha ekibimiz ve 200 kişiden büyük bir takımla hem emlak arayanlar hem de profesyonel</p>
           <p> ve bireysel ilan verenlerin hayatını kolaylaştıracak teknoloji çözümleri sunmak için var gücümüzle çalışıyoruz.</p>
        <p>Global zincirlerden, kobi ölçeğindeki tüm emlak ofislerine kadar, her seviyedeki iş ortağımızın ihtiyaçlarına özel sunduğumuz üyelik paketlerimiz ve<p/>
        <p>ek hizmetlerimizle sektörün her seviyesine hizmet verirken, değerimizin karşılığını fazlasıyla vermeyi amaçlıyoruz.</p>
    </div>

   <br>
    <div class="social-tag">
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-solid fa-envelope"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>


</div>
    @endsection
