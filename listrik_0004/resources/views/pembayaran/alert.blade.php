@extends('layouts.master_user')

@section('content')
    <div class="container alert alert-dark" role="alert">
        <h4 class="alert-heading"></h4>
        <p>Apa anda ingin mencetak struk ?</p>
        </hr>
        <p class="mb-0"><a href="{{ url('/pembayaran') }}" class="btn btn-dark btn-block mb-3"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a></p>
        <p class="mb-0"><a href="{{ url('/pembayaran/print/'.$pembayaran->id) }}" class="btn btn-primary btn-block mb-2"><i class="fas fa-print"></i> Cetak Struk</a></p>
    </div>
@endsection
