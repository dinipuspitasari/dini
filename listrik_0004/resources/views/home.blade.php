@extends('layouts.master_user')

@section('title', 'PLN')

@section('content')
<div class="container">
<h1>Dashboard</h1>
<div class="jumbotron mt-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/img/1.jpg" alt="First slide" width="10px" height="600px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/2.jpg" alt="Second slide" width="10px" height="600px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</div>
</div>
@endsection
