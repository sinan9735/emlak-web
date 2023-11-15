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
                        <form>
                            <img src="{{asset('assets/img/hakkımızda.png')}}"  height="150" alt="">
                            <button >  <a href="{{url('/employee/create')}}"> İlan Formunu görmek için tıkla ! </a>  </button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
