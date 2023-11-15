@extends('site.app')
@section('content')
    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="main">
                        <input type="checkbox" id="chk" aria-hidden="true">

                        <div class="login">
                            <form action="{{route('login-user')}}" method="post">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                    @csrf
                                <label for="chk" aria-hidden="true">Giriş Yap</label>
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Email" required=""
                                               value="{{old('email')}}">
                                        <span class="text-danger">@error('email') Bu E-mail adresine kayıtlı hesap bulunamadı!@enderror</span>
                                    </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Şifre" required=""
                                    value="">
                                    <span class="text-danger">@error('password')Şifre en az 5 karakter içermeli !@enderror</span>
                                </div>
                                <button onclick="myFunction()"id="Login">Giriş </button>
                                <br>
                                <a id="form-uyarı" href="kayitol">Yeni kullacı mısınız ?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
