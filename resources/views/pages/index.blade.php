@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <h6 class="card-title"></h6>
                <p class="card-text"></p>
            </div>
            <div class="card-footer">
                <a href="resources/views/product.php?id=" class="btn btn-primary">Find Out More!</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Admin / user panel -->
        <div class="card my-4">
            <h5 class="card-header">
            </h5>
            <div class="card-body user-panel">
                <h6 id="name">
                    <i class="fas fa-user"></i>
                </h6>
                <h6 id="date">
                    <i class="far fa-calendar-alt"></i>
                </h6>
                <h6>
                    <a href="/webshop/resources/views/add_new_ad.php"><i class="fas fa-ad"></i> Add new Ad </a>
                </h6>
                <h6>
                    <a href="/webshop/resources/views/my_ads.php?id="><i class="far fa-address-card"></i> My Ads </a>
                </h6>
            </div>
        </div>

    </div>
</div>
@endsection
