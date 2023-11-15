@extends('admin.app')
@section('content')
    <div class="all-admin">
        <div class="container">
            <div class="row">
                <h3 class="admin-h3">Üye <span id="admin-span"> Listesi</span> </h3>
                <div class="col-lg-2"></div>
                <div class="col-lg-2">
                    <div class="table-admin">
                <table>
                    <tr>
                        <th class="table-header">Üye Adı</th>
                        <th class="table-header">Mail</th>

                    </tr>
                    <tr>
                        <td class="table-user">User1</td>
                        <td class="table-mail">test1mail@gmail.com</td>
                        <td><button class="table-buton">Sil</button></td>

                    </tr>
                    <tr>
                        <td class="table-user">User2</td>
                        <td class="table-mail">test2mail@gmail.com</td>
                        <td><button class="table-buton">Sil</button></td>
                    </tr>
                    <tr>
                        <td class="table-user">User3</td>
                        <td class="table-mail">test3mail@gmail.com</td>
                        <td><button class="table-buton">Sil</button></td>
                    </tr>
                </table>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
