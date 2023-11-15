@extends('site.app')
@section('content')
    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="main">
                        <input type="checkbox" id="chk" aria-hidden="true">
                        <div class="signup">
                            <form action="{{route('register-user')}}" method="post">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                    @if(Session::has('fail'))
                                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                @csrf
                                <label for="chk" aria-hidden="true">Kayıt Ol</label>
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Kullanıcı Adı" required=""
                                    value="{{old('name')}}">
                                    <span class="text-danger">@error('name') {{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required=""
                                           value="{{old('email')}}">
                                    <span class="text-danger">@error('email') {{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Şifre" required=""
                                           value="">
                                    <span class="text-danger">@error('password')Şifre en az 5 karakter içermeli !@enderror</span>
                                </div>
                                <button type="submit" id="Register">Kayıt </button>
                                <br>
                                <a id="form-uyarı" href="girişyap">Bir hesaba sahibim</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
