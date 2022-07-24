@extends('layout.boostrap')

@section('content')
    

<div class="container">
  <h1> Data Warga </h1>
  <hr>
  <div class="table-responsive">
<table table class="table table-bordered " width="100%" cellspacing="0">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">NIK</th>
        <th scope="col">No KK</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
      <tfoot>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">NIK</th>
                      <th scope="col">No KK</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </tfoot>
      
      <?php $i = 1;?>
      <?php foreach ($warga as $item ):?>
      
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $i++; ?> </th>
        <td><?= $item['nama']; ?></td>
        <td><?= $item['nik']; ?></td>
        <td><?= $item['no_kk'];?></td>
        <td><?= $item['jenis_kelamin']; ?></td>
        <td><?= $item['alamat']; ?></td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <a href="/warga/{{$item->id}}/edit"><button class="btn btn-info" >Edit</button></a>
          <a href="/warga/create" ><button class="btn btn-success" > Add </button></a>
          
          <form action="/warga/{{$item->id}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit" value="Delete">Delete</i></button>
          </form>
          </div>
          
       
          
        
        
        </td>
      </tr>
    </tbody>
    
    <?php endforeach; ?>
  </table>
  </div>
</div>
@endsection