@extends('layout.sipa')
@section('kontent')
<table class=table border= "2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama Pasukan</th>
            <th>Email</th>
            <th>Asal Sekolah</th>
            <th>Asal Daerah</th>
            <th>Nama Pelatih</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->Nama_Pasukan}}</td>
            <td>{{$item->Email}}</td>
            <td>{{$item->Asal_Sekolah}}</td>
            <td>{{$item->Asal_Daerah}}</td>
            <td>{{$item->Nama_Pelatih}}</td>
            <td>
                <a class="btn-e" href="{{url('/isian/'.$item->Nama_Pasukan.'/edit')}}">/Edit</a>  
                <form onsubmit="return confirm('Apakah Yakin?')" class="d-inline" action="{{'/isian/'.$item->Nama_Pasukan}}" method="post">@csrf @method('DELETE')
                <button class="hapus">Hapus</button>
             </form>                
            </td>         
        </tr>
        @endforeach
    </tbody>
</table>
@endsection