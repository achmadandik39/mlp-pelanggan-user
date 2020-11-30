@extends('layouts.app')
@section('Judul Halaman','Pengaduan Keluhan')
@section('content')
<div class="container">
@if(session('sukses'))
<div class="alert alert-success" role="alert">
Keluhan Berhasil Dikirimkan
</div>
@endif
<div class="row">
<div class="col">
	<h1>Pengaduan Keluhan</h1><br/>
	<p>Untuk melaporkan keluhan silahkan klik tombol dibawah</p><br/>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Buat Pengaduan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Pengaduan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/keluhanpelanggan/create" method="POST">
		{{csrf_field()}}
				<div class="form-group">
			<label for="inputState">Jenis Keluhan</label>
			<select name="tipe_keluhan" id="inputState" class="form-control">
				<option selected>Keluhan</option>
				<option>Keluhan...</option>
			</select>
			</div>

		<div class="form-group">
			<label for="exampleFormControlTextarea1">Isi</label>
			<textarea name="isi_keluhan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
		</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection