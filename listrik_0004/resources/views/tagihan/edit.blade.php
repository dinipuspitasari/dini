@extends('layouts.master_admin')

@section('title', 'PLN')

@section('subtitle')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href={{url('/admin/tarif')}}>Tagihan</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
  </nav>
@endsection

@section('content')

    <!-- Content -->
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Update Tagihan</h2>
    <hr>
    </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/admin/tagihan/update/'.$tagihan->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="id_pelanggan" class="col-md-2 col-form-label">Nama Pelanggan</label>
                                <div class="col-sm-10">
                                    <input type="mtext" class="form-control" value="{{ $tagihan->pelanggan->nama_pelanggan }}" name="id_pelanggan" placeholder="Masukkan nama pelanggan" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tarifperkwh" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" value="{{ $tagihan->bulan_tahun }}" name="bulan_tahun">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="meter_awal" class="col-md-2 col-form-label">Meter Awal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $tagihan->meter_awal }}" name="meter_awal" placeholder="Masukkan meter awal">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="meter_awal" class="col-md-2 col-form-label">Meter akhir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $tagihan->meter_akhir }}" name="meter_akhir" placeholder="Masukkan meter akhir">
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="status" class="col-md-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="status" name="status" placeholder="masukkan status">
                                        <option>...</option>
                                        <option value="0" @if ($tagihan->status == 0) selected @endif>Menunggu Pembayaran</option>
                                        <option value="1" @if ($tagihan->status == 1) selected @endif>Menunggu Konfirmasi</option>
                                        <option value="2" @if ($tagihan->status == 2) selected @endif>Pembayaran Selesai</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
