@extends('layouts.master_admin')

@section('title', 'PLN')

@section('subtitle')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tagihan</li>
    </ol>
  </nav>
@endsection

@section('content')

    {{--  Content --}}
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Data Tagihan</h2>
    <hr>
    </div>
        <a class="btn btn-warning" href={{url('/admin/tagihan/create')}}>Tambah Tagihan</a>
        </br>
        </br>
        <div class="card">
        <table class="table table-striped table-hover table-bordered border-primary">
                <thead class="thead-info">
                    <tr align="center">
                        <th scope="col">No</th>
                        {{-- <th scope="col">Id Tagihan</th> --}}
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Bulan & Tahun</th>
                        <th scope="col">Jumlah Meter</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detail/Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tagihan as $h)
                    <tr align="center">
                        <th>{{$loop->iteration}}</th>
                        <td>{{ $h->pelanggan->nama_pelanggan }}</td>
                        <td>{{ $h->bulan_tahun->format('F Y') }}</td>
                        <td>{{ $h->jumlah_meter }} kWh</td>
                        @if($h->status)<td><span class="bg-success text-white p-1 rounded">Telah Dibayar</span></td>
                        @else<td><span class="bg-danger text-white p-1 rounded">Menunggu Pembayaran</span></td>
                        @endif
                        <td>
                            <a type="button" class="btn btn-outline-info" href={{url('/admin/tagihan/details/'.$h->id)}}><i class="fas fa-eye"></i></a> |
                            <a type="button" class="btn btn-outline-primary" href={{url('/admin/tagihan/edit/'.$h->id)}}><i class="fas fa-edit"></i></a> |
                            <a type="button" class="btn btn-outline-danger" href={{url('/admin/tagihan/delete/'.$h->id)}} onclick="return confirm('Anda Yakin ingin Menghapus {{$h->pelanggan->nama_pelanggan}} ?')"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        {{-- <td><a type="button" class="btn btn-primary" href={{url('/admin/tagihan/edit/'.$h->id)}}><i class="fas fa-edit"></i></a></td>
                        <td><a type="button" class="btn btn-danger" href={{url('/admin/tagihan/delete/'.$h->id)}} onclick="return confirm('Anda Yakin ingin Menghapus {{$h->pelanggan->nama_pelanggan}} ?')"><i class="fas fa-trash-alt"></i></a></td> --}}
                    </tr>
                    @endforeach

                    {{-- <tr align="center">
                        <th>1</th>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td><a type="button" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                        <td><a type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
