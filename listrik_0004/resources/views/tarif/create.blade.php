@extends('layouts.master_admin')

@section('title', 'PLN')

@section('content')

    <!-- Content -->
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Tambah Tarif</h2>
    <hr>
    </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/tarif/store" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="daya" class="col-md-2 col-form-label">Daya</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="daya" placeholder="Masukkan Daya">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tarifperkwh" class="col-md-2 col-form-label">Tarifperkwh/Harga</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="tarifperkwh" placeholder="Masukkan tarifperkwh/harga">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Simpan</button>
                            {{-- <div class="alert alert-success" role="alert">
                                Tarif Telah di Tambahkan
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
