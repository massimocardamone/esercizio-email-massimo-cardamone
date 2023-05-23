<x-layoute>
    <x-navbar>

    </x-navbar>

    <h1 class="text-center my-5"> I nostri prodotti: </h1> 

    <div class="container">
      <div class="row">
          @foreach ($products as $product)
          <div class="col-12 col-md-4">
              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{$product['title']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$product['category']}}</h6>
                    <a href="{{route('detail-product', ['id' =>$product['id']])}}" class="btn btn-outline">Dettaglio prodotto</a>
                  </div>
                </div>

          </div>
              
          @endforeach
      </div>
    </div>

</x-layoute>



