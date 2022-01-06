@extends('layouts.master_admin')

@section('title', 'PLN')

@section('content')
    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div> --}}

    {{--  Content --}}
    <div class="container">
    <div class="col">
    <h2 class="mt-2"> Data tarif</h2>
    <hr>
    </div>
        <a class="btn btn-warning" href={{url('/admin/tarif/create')}}>Tambah Tarif</a>
        </br>
        </br>
        <div class="card">
            <table class="table table-striped table-hover table-bordered border-primary">
                <thead class="thead-info">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Id Tarif</th>
                        <th scope="col">Daya</th>
                        <th scope="col">Tarif Perkwh</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarif as $t)
                    <tr align="center">
                        <th>{{$loop->iteration}}</th>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->daya }}V</td>
                        <td>Rp.{{ $t->tarifperkwh }}</td>
                        <td><a type="button" class="btn btn-primary" href={{url('/admin/tarif/edit/'.$t->id)}}><i class="fas fa-edit"></i></a></td>
                        <td><a type="button" class="btn btn-danger" href={{url('/admin/tarif/delete/'.$t->id)}} onclick="return confirm('Anda Yakin ingin Menghapus {{$t->daya}} ?')"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
