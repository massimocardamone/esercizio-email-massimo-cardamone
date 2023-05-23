<x-layoute>
    <x-navbar></x-navbar>

    <h1 class="text-center">Dettaglio prodotto:</h1>

    <div class="container vh-100 my-5">
        <div class="row">
                <div class="col-12">
                    <h3 class="text-center my-3">{{$product['title']}}</h3>
                    <h3 class="text-center my-3">{{$product['category']}}</h3>
                    <h3 class="text-center my-3">{{$product['price']}}</h3>
                </div>
            
        </div>
    </div>

</x-layoute>