@extends('layouts.master_user')

@section('title', 'PLN')

@section('subtitle')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('home/pembayaran') }}">Pembayaran</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
  </nav>
@endsection

@section('content')
    <div class="container">
        <a type="button" class="btn btn-dark" href={{url('/pembayaran')}}><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </br>
        </br>
        <div class="card">
            <div class="card-header">Daftar Pembayaran</div>
            <div class="card-body">
                <p>Nama Pelanggan = {{ $tagihan->pelanggan->nama_pelanggan }}</p>
                <p>Bulan & Tahun = {{ $tagihan->bulan_tahun->format('F Y') }}</p>
                <p>Meter Awal = {{ $tagihan->meter_awal }} kWh</p>
                <p>Meter Akhir = {{ $tagihan->meter_akhir }} kWh</p>
                <p>Jumlah Meter = {{ $tagihan->jumlah_meter }} kWh</p>
                <p>Tarif perkWh =Rp. {{ number_format($tagihan->pelanggan->tarif->tarifperkwh) }}</p>
                <p>Biaya Admin = Rp. 5,000</p>
                <p>Total = Rp. {{ number_format($tagihan->jumlah_meter * $tagihan->pelanggan->tarif->tarifperkwh + 5000) }}</p>
                <form action="{{ url('pembayaran/update/'.$tagihan->id) }}" method="POST">
                    @csrf
                    @if (session()->has('message'))
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading"></h4>
                            <p>{{ session()->get('message') }}</p>
                            <button class="close" type="button" data-dismiss="alert">&times;</button>
                            <p class="mb-0"></p>
                        </div>
                    @endif

                    <div class="form-group row">
                        <p for="bayar" class="col-md-2 col-form-label">Bayar</p>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="bayar" name="bayar" required>
                        </div>
                        <button class="btn btn-success btn-sm"><i class="fas fa-money-bill-wave"></i> Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
