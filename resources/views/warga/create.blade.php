@extends('layout.boostrap')

@section('content')

<div class="card shadow mb-6">
    
    <div class="card-body">
    <h1 class="font-weight-bold " >Tambah Data Warga</h1>
    <hr>
<form name="form" action="/warga/store" method="POST">
    @csrf

    <div class="col-md-12">
        <div class="mb-2">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" id="nama" required="required" >
        </div>
    </div>


    <div class="col-md-12">
            <div class="mb-2">
              <label for="nik" class="form-label">No NIK</label>
              <input type="text" class="form-control" name="nik" id="nik"  required="required">
            </div>
    </div>

    <div class="col-md-12">
        <div class="mb-2">
          <label for="no_kk" class="form-label">No Kartu Keluarga </label>
          <input type="text" class="form-control" name="no_kk" id="no_kk"  required="required">
       </div>
     </div>

        <div class="col-md-12">
            <div class="mb-2">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                <option name="0" no-selected>---Choice---</option>
                <option name="L" value="L">Laki - Laki</option>
                <option name="P" value="P">Perempuan</option>
                </select>
            </div>
       </div>

    <div class="col-12">
  <div class="mb-2">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea type="text" class="form-control" rows="5" name="alamat" id="alamat" placeholder="1234 Main St" required="required" ></textarea>
  </div>
</div>

<div class="modal-footer">
            <a href="/warga"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-success">Save</button>
</div>
</form>
 </div>
</div>

@endsection