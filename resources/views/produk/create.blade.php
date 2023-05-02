@extends('layout.app')
@section('content')
    <div class="div mt-8 col-md-6">
        <h2 class="mt-4">Form Tambah produk</h2>
        <form action="{{route('simpan.produk')}}"  method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf


        <div class="mb-3 mt-4">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama_produk" placeholder="nama produk">
          </div>
          <div class="mb-3">
            <label for="keterangan" class="form-label">keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="harga">
          </div>

          <div class="mb-3">
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah">
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </form>
    </div>
</div>
@endsection
