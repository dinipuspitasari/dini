@extends('layouts.master_admin')

@section('title', 'PLN')

@section('subtitle')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href={{url('/admin/tagihan')}}>Tagihan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
  </nav>
@endsection

@section('content')

    <!-- Content -->
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Tambah Tagihan</h2>
    <hr>
    </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/tagihan/store" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="id_pelanggan" class="col-md-2 col-form-label">Nama Pelanggan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="masukkan nama pelanggan">
                                        <option>...</option>
                                        @foreach ($pelanggan as $pelanggan)
                                            <option value="{{$pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bulan_tahun" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="bulan_tahun">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="meter_awal" class="col-md-2 col-form-label">Meter Awal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="meter_awal" placeholder="Masukkan meter awal">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="meter_akhir" class="col-md-2 col-form-label">Meter akhir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="meter_akhir" placeholder="Masukkan meter akhir">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="jumlah_meter" class="col-md-2 col-form-label">Jumlah Meter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jumlah_meter" placeholder="Masukkan jumlah meter">
                                </div>
                            </div>


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
