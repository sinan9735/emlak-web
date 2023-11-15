@extends('admin.app')
@section('content')
    <div class="all-admin">
        <div class="container">
            <div class="row">
                <h3 class="admin-h3">Onay Bekleyen <span id="admin-span"> İlanlar</span> </h3>
                <div class="col-lg-2"></div>
                <div class="col-lg-2">
                    <div class="table-admin">
                        <table>
                            <tr>
                                <th class="table-header">Üye Adı</th>
                                <th class="table-header">İmg</th>
                                <th class="table-header">Başlık</th>
                                <th class="table-header">Tarih</th>
                                <th class="table-header">Durum</th>
                                <th class="table-header">Tipi</th>
                                <th colspan="2" class="table-header">İlan Onay</th>

                            </tr>
                            <tr>
                                <td class="table-user">User1</td>
                                <td class="yönetim-img"><a href="ilanagit">Test-image </a> </td>
                                <td class="yönetim-başlık">Bahçelievlerde Satılık 3+1 Daire</td>
                                <td class="yönetim-tarih">20.12.2022</td>
                                <td class="yönetim-durum">Satılık</td>
                                <td class="yönetim-tipi">Apartman Dairesi</td>
                                <td class="yönetim-onayla"><button id="btn-onay">Onayla</button></td>
                                <td class="yönetim-sil"><button id="btn-onay">Sil</button></td>
                            </tr>
                            <tr>
                                <td class="table-user">User2</td>
                                <td class="yönetim-img"><a href="ilanagit">Test-image </a> </td>
                                <td class="yönetim-başlık">Bahçelievlerde Satılık 3+1 Daire</td>
                                <td class="yönetim-tarih">20.12.2022</td>
                                <td class="yönetim-durum">Satılık</td>
                                <td class="yönetim-tipi">Apartman Dairesi</td>
                                <td class="yönetim-onayla"><button id="btn-onay">Onayla</button></td>
                                <td class="yönetim-sil"><button id="btn-onay">Sil</button></td>
                            </tr>
                            <tr>
                                <td class="table-user">User3</td>
                                <td class="yönetim-img"><a href="ilanagit">Test-image </a> </td>
                                <td class="yönetim-başlık">Bahçelievlerde Satılık 3+1 Daire</td>
                                <td class="yönetim-tarih">20.12.2022</td>
                                <td class="yönetim-durum">Satılık</td>
                                <td class="yönetim-tipi">Apartman Dairesi</td>
                                <td class="yönetim-onayla"><button id="btn-onay">Onayla</button></td>
                                <td class="yönetim-sil"><button id="btn-onay">Sil</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
