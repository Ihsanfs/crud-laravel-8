@extends('layout.app')
@section('content')
<div class="div mt-4">

<h2>list data produk</h2>


</div>
<a href="{{route('tambah.produk')}}" class="btn btn-secondary btn-round"><i class="fa fa-plus"></i> Tambah</a>
<table class="table display table table-striped table-hover" >
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama produk</th>
        <th scope="col">keterangan</th>
        <th scope="col">harga</th>
        <th scope="col">jumlah</th>
        <th scope="col">action</th>



      </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($produk as $item)
      <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$item->nama_produk}}</td>
        <td>{{$item->keterangan}}</td>
        <td>{{$item->harga}}</td>
        <td>{{$item->jumlah}}</td>
        <td>

            <a href="{{route('edit.produk', $item->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> edit</a>
            <form action="{{route('delete.produk',$item->id)}}" method="post">
                @csrf
                @method('delete')
                <a href="{{route('delete.produk', $item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> del</a>
                </form>
        </td>
      </tr>
      @endforeach
      <td colspan="6" class="text-center">
        @if($produk->count() > 0)
      @else
      Data masih kosong
  </td>
  @endif
    </tbody>
  </table>
@endsection
