<header class="admin-header-area">
<div class="admin-profil">
    <div class="sidebar">
        <div class="setting">
            <div class="logocolor">
                <img src="{{asset('assets/img/anasayfa-logo.png')}}" alt="">
            </div>
        <div class="logo-details">
            <i class='bx bx-align-left'></i>
            <span class="logo-name">Emlakcım Admin</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{route('homeadmin.index')}}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Üyeler</span>
                </a>
            </li>
            <li>
                <a href="{{route('Adminİlanlar.index')}}">
                    <i class='bx bx-home-heart'></i>
                    <span class="link-name">İlanlar</span>
                </a>
            </li>
            <li>
                <a href="{{route('onaysayfa.index')}}">
                    <i class='bx bx-time'></i>
                    <span class="link-name">Onay Bekleyen İlanlar</span>
                </a>
            </li>
            <li>
                <a href="{{route('homeadmin.index')}}">
                    <i class='bx bx-log-out'></i>
                    <span class="link-name">Çıkış</span>
                </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="admin-panel">
        <div class="baslıkayar">
            <h1 class="admin-header">Yönetim Paneli</h1>
            <div class="bildirim-logo">
                <i id="admin-bildirim" class="fa-solid fa-bell"></i>
                <i id="admin-bildirim2" class="fa-solid fa-envelope"></i>
            </div>
        </div>
    </div>
</div>
</header>
