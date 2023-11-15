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
                    <div class="col-lg-3"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h4 class="green">
                        <span id="uyelik"> Üyelik Bilgileri</span>
                    </h4>
                    <form id="userprofil-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">İsim</label>
                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Test Kullanıcı" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control"  placeholder="Test Mail" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Şifre</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Test Şifre" disabled>
                            <button type="submit" class="profil-sifre">Değiştir</button>
                        </div>

                         <button type="submit" class="btn btn-primary btn-profil">Kaydet</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
