@extends('layouts.master_admin')

@section('title', 'PLN')

@section('content')

    <!-- Content -->
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Update Tarif</h2>
    <hr>
    </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/admin/tarif/update/'.$tarif->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="daya" class="col-md-2 col-form-label">Daya</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="daya" value="{{ $tarif->daya }}" placeholder="Masukkan Daya">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tarifperkwh" class="col-md-2 col-form-label">Tarifperkwh/Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tarifperkwh" value="{{ $tarif->tarifperkwh }}" placeholder="Masukkan tarifperkwh/harga">
                                </div>
                            </div>

                            <!-- <button type="submit" class="btn btn-success">Simpan</button>
                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1">Makanan</label>
                                <input type="text" class="form-control" name="nama_menu" placeholder="Masukkan nama Makanan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga</label>
                                <input type="number" class="form-control" name="harga" placeholder="Masukkan harga">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto Makanan</label>
                                <input type="file" class="form-control-file" name="gambar_makanan"> -->
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button> --}}

                            {{-- <div class="alert alert-success" role="alert">
                                Tarif Telah di Update
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
