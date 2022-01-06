@extends('layouts.master_user')

@section('title', 'PLN')

@section('subtitle')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
    </ol>
  </nav>
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Pembayaran</div>
            <table class="table table-striped table-hover table-bordered border-primary">
                <thead class="thead-info">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Bulan & Tahun</th>
                        <th scope="col">Jumlah Meter</th>
                        <th scope="col">Tarif pekWh</th>
                        <th scope="col">Biaya Admin</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Bayar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tagihan as $h)
                    <tr align="center">
                        <th>{{$loop->iteration}}</th>
                        <td>{{ $h->pelanggan->nama_pelanggan }}</td>
                        <td>{{ $h->bulan_tahun->format('F Y') }}</td>
                        <td>{{ $h->jumlah_meter }} kWh</td>
                        <td>Rp. {{ number_format($h->pelanggan->tarif->tarifperkwh) }}</td>
                        <td>Rp. 5,000</td>
                        <td>Rp. {{ number_format($h->jumlah_meter * $h->pelanggan->tarif->tarifperkwh + 5000) }}</td>
                        <td><a type="button" class="btn btn-success" href={{url('/pembayaran/details/'.$h->id)}}><i class="fas fa-money-bill-wave"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
