@extends('layouts.master_admin')

@section('title', 'Aplikasi Listrik | Pelanggan')

@section('content')

    {{--  Content --}}
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Data Pelanggan</h2>
    <hr>
    </div>
        <div class="card">
        <table class="table table-striped table-hover table-bordered border-primary">
                <thead class="thead-info">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Nomor KWH</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $u)
                    <tr align="center">
                        <th>{{$loop->iteration}}</th>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->nama_pelanggan }}</td>
                        <td>{{ $u->nomor_kwh }}</td>
                        <td>{{ $u->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
