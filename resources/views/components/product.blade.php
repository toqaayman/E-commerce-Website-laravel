<div class="col-12 col-md-4 mb-0 mb-md-3">
    <div class="card shadow">
        <img style="width:100%; height:15vw; object-fit:cover;" src="{{ asset('storage/'.$product->image) }}" alt="{{$product->title}}"
             class="card-img-top" height="300">
        <div class="card-body">
            <h5 class="card-title text-center font-weight-bold text-truncate m-0 mb-2">
                {{ucfirst($product->title)}}
            </h5>
            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
            <div class="text-center">
                <p class="text-center m-0 text-muted font-italic text-truncate">
                    {{$product->category->title}}
                </p>
            </div>
            <div class="text-center my-1">
                <span class="badge badge-primary badge-pill">
                    Price: {{$product->price." EGP"}}
                </span>

                <span class="badge badge-danger badge-pill">
                    Status:
                    {{ $product->stock_quantity > 0 ? "In Stock" : "Out of Stock" }}
                </span>
            </div>
            <div>

            </div>
            <div class="text-center">
                <form action="{{ route('atc', ['product'=>$product->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-block btn-sm">Add to Cart</button>
                        </form>
                </form>
                <br>
                <a href="{{ route('product', ['product' => $product->id]) }}" class="text-muted"
                   style="font-size: 14px; outline: none; text-decoration: none;">
                    <button class="btn btn-danger btn-block btn-sm">Display Product</button>
                </a>
            </div>
        </div>
    </div>
</div>
