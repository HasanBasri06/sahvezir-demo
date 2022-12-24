@extends('admin.layout')

@section('title', 'Gönderi Paylaş')

@section('content')

    <table class="w-11/12">
        <thead>
            <tr>
                <th>İsim</th>
                <th>Konu</th>
                <th>Email</th>
                <th>Durum</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="h-7 bg-green-500 text-white">
                <td>Berat Akcıl</td>
                <td>İş İlanı</td>
                <td>Email</td>
                <td>
                    <span class="text-red-500">Sil</span>
                    &nbsp;
                    <span class="text-blue-500">Görüntüle</span>
                </td>
            </tr>
            
        </tbody>
    </table>

@endsection
