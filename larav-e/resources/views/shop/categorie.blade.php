@extends('shop')

@section('content')
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Films</li>
            <li class="breadcrumb-item"><a href="#">Les goonies</a></li>
            <li class="breadcrumb-item"><a href="#">Star Wars</a></li>
            <li class="breadcrumb-item"><a href="#">Star Trek</a></li>
            <li class="breadcrumb-item"><a href="#">Superman</a></li>
        </ol>
    </nav>

    
    <main role="main">

        <div class="py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow prodContainer">
                            <div class="imagePreloader " style="background-image:url({{asset('Storage/produits/1.jpg')}});"></div>
                            <div class="card-body">
                                <p class="card-text">nom du t-shirt <br>description du t-shirt </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">29.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow prodContainer">
                            <div class="imagePreloader" style="background-image:url({{asset('Storage/produits/2.jpg')}});"></div>
                            <div class="card-body">
                                <p class="card-text">nom du t-shirt <br>description du t-shirt </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">29.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow prodContainer">
                            <div class="imagePreloader" style="background-image:url({{asset('Storage/produits/3.jpg')}});"></div>
                            <div class="card-body">
                                <p class="card-text">nom du t-shirt <br>description du t-shirt </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">29.99 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow prodContainer">
                            <div class="imagePreloader" style="background-image:url({{asset('Storage/produits/4.jpg')}});"></div>
                            <div class="card-body">
                                <p class="card-text">nom du t-shirt <br>description du t-shirt </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">29.99 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow prodContainer">
                        <div class="imagePreloader" style="background-image:url({{asset('Storage/produits/5.jpg')}});"></div>
                        <div class="card-body">
                            <p class="card-text">nom du t-shirt <br>description du t-shirt </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">29.99 €</span>
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow prodContainer">
                        <div class="imagePreloader" style="background-image:url({{asset('Storage/produits/6.jpg')}});"></div>
                        <div class="card-body">
                            <p class="card-text">nom du t-shirt <br>description du t-shirt </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">29.00 €</span>
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                </div>

                <div class="row">


                </div>
            </div>
        </div>

    </main>

@endsection