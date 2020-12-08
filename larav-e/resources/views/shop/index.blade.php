@extends('home')
@section('content')
    
        <div class="container">
          <div class="row">
          {{-- {{ dump($produits) }} --}} 

        @foreach ($produits as $produit)
            <div class="col-md-4 prodContainer">
              <div class="card mb-4 box-shadow">
                    <div class="imagePreloader" style="background-image:url({{asset('storage/produits/'.$produit->photo_principale)}});"></div>
                
                <div class="card-body">
                       <p class="card-text">{{ $produit->nom }} <br> {{ $produit->description }}</p>
                       <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{number_format($produit->prix_ht,2)}}€</span>
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                       </div>
                </div>
              </div>
            </div>
        @endforeach
         
        </div>
      </div>
      

 
@endsection