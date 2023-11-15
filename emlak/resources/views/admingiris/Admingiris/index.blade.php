@extends('admingiris.app')
@section('content')
    <section class="adminpage-color">
       <div class="container">
       <div class="row">
      <div class="col-lg-4"></div>
         <div class="col-lg-4">
          <div class="adminlogin p-t-50 p-b-90">
              <div class="loginbox flex-gb flex-w">
                  <span class="loginbox-form-title p-b-51">LOGIN</span>
                  <form class="admingiris-control">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kullanıcı Adı</label>
                          <input type="text" class="form-control" id="adminform"   placeholder="Admin kullanıcı adı">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Şifre</label>
                          <input type="password" class="form-control" id="adminform"  placeholder="Admin şifre">
                      </div>
                      <button type="submit" class="admingiris-btn"><a href="{{route('Adminİlanlar.index')}}"> Giriş</a></button>
                  </form>

              </div>

          </div>
      </div>

      </div>
       </div>
  </section>
@endsection
