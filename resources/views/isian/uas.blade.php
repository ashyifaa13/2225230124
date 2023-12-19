@extends('layout.sipa')
@section('kontent')
<h3 class="ncip">DATA LOMBA PASKIBRA TINGKAT PROVINSI BANTEN</h3>
<center>
<form class= "ciip" method="POST" action="/isian">
    @csrf
<div class="mb-3">
        <label for="Nama_Pasukan" class="form-label">Nama Pasukan:</label>
        <input name="Nama_Pasukan" type="text" id="Nama_Pasukan" class="form-control" placeholder="Masukkan Nama Pasukan" value="{{Session::get('Nama_Pasukan')}}">
</div>
<div class="mb-3">
        <label for="Email" class="form-label">Email:</label>
        <input name="Email" type="text" id="Email" class="form-control" placeholder="Masukkan Email" value="{{Session::get('Email')}}">
</div>
<div class="mb-3">
        <label for="Asal_Sekolah" class="form-label">Asal Sekolah:</label>
        <input name="Asal_Sekolah" type="text" id="Asal_Sekolah" class="form-control" placeholder="Masukkan Asal Sekolah" value="{{Session::get('Asal_Sekolah')}}">
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
    <button>Submit</button>
</div>
</form>
</center>
@endsection