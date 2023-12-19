@extends('layout.sipa')
@section('kontent')
<h3>DATA LOMBA PASKIBRA TINGKAT PROVINSI BANTEN</h3>
<form method="POST" action="{{'/isian/'.$data->Nama}}">
    @csrf
    <div class="mb-3">
        <label for="Nama_Pasukan" class="form-label">Nama Pasukan:</label>
        <input type="text" id="Nama_Pasukan" name="Nama_Pasukan" class="form-control" placeholder="Masukkan Nama Pasukan" value="{{$data->Nama_Pasukan}}">
    </div>

    <div class="mb-3">
        <label for="Email" class="form-label">Email:</label>
        <input type="text" id="Email" name="Email" class="form-control" placeholder="Masukkan Email" value="{{$data->Email}}">
    </div>

    <div class="mb-3">
        <label for="Asal_Sekolah" class="form-label">Asal Sekolah:</label>
        <input type="text" id="Asal_Sekolah" name="Asal_Sekolah" class="form-control" placeholder="Masukkan Asal Sekolah" value="{{$data->Asal_Sekolah}}">
    </div>

    <div class="mb-3">
        <label for="Asal_Daerah" class="form-label">Asal Daerah:</label>
        <input name="Asal_Daerah" type="text" id="Asal_Daerah" class="form-control" placeholder="Masukkan Asal Daerah" value="{{Session::get('Asal_Daerah')}}">
    </div>
      
    <div class="mb-3">
        <label for="Nama_Pelatih" class="form-label">Nama Pelatih:</label>
        <input name="Nama_Pelatih" type="text" id="Nama_Pelatih" class="form-control" placeholder="Masukkan Nama Pelatih" value="{{Session::get('Nama_Pelatih')}}">
    </div>

    <div class="mb-3">
        <button>Submit</button> <a class="btn btn-secondry" href="/isian">Kembali</a>
    </div>
</form>
@endsection