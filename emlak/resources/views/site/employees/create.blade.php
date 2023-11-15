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
                            <form action="{{url('employee')}}" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}


                                <label> İsim </label> <br>
                                <input type="text" name="name" id="name" class="form-control"> <br>
                                <label>Adres</label><br>
                                <input type="text" name="address" id="address" class="form-control"> <br>
                                <label>Telefon No</label><br>
                                <input type="text" name="mobile" id="mobile" class="form-control"><br>
                                <input class="form-control" name="photo" type="file" id="photo">

                                <input type="submit" value="Gönder" class="btn btn-success"><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
