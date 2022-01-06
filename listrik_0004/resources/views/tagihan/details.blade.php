@extends('layouts.master_admin')

@section('title', 'PLN')

@section('subtitle')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin/tagihan') }}">Tagihan</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
  </nav>
@endsection

@section('content')
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Detail Tagihan</h2>
    <hr>
    </div>
        </br>
        </br>
        <div class="card">
            <div class="card-body">
                <p>Nama Pelanggan = {{ $tagihan->pelanggan->nama_pelanggan }} </p>
                <p>Bulan & Tahun = {{ $tagihan->bulan_tahun->format('F Y') }} </p>
                <p>Meter Awal = {{ $tagihan->meter_awal }} kWh</p>
                <p>Meter Akhir =  {{ $tagihan->meter_akhir }} kWh</p>
                <p>Jumlah Meter =  {{ $tagihan->jumlah_meter }} kWh</p>
                @if($tagihan->status)<p>Status = <span class="bg-success text-white p-1 rounded">Telah Dibayar</span></p>
                @else<p>Status = <span class="bg-danger text-white p-1 rounded">Menunggu Pembayaran</span></p>
                @endif
            </div>
        </div>
    </div>
@endsection
