@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                    <div class="card-body">
                        @isset($url)
                        <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nama_admin" class="col-md-2 col-form-label">Nama Admin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_admin" id="nama_admin" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-2 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" id="username" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-2 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-2 col-form-label">Username</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username" required>
                                    <div class="invalid-feedback">
                                        masukkan Username
                                      </div>
                                </div>

                                <label for="password" class="col-md-2 col-form-label">Password</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_pelanggan" class="col-md-2 col-form-label">Nama Pelanggan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="masukkan nama" required>
                                </div>

                                <label for="id_tarif" class="col-md-2 col-form-label">Id Tarif</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="id_tarif" name="id_tarif" placeholder="masukkan id tarif" required>
                                        <option>...</option>
                                        @foreach ($tarif as $tarif)
                                            <option value="{{$tarif->id}}">{{$tarif->daya}}V</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nomor_kwh" class="col-md-2 col-form-label">Nomor kwh</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor_kwh" id="nomor_kwh" placeholder="masukkan nomor kwh" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukkan alamat" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama admin') }}</label>

                            <div class="col-md-6">
                                <input id="nama_admin" type="text" class="form-control @error('nama_admin') is-invalid @enderror" name="name" value="{{ old('nama_admin') }}" required autocomplete="name" autofocus>

                                @error('nama_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="name" value="{{ old('username') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
