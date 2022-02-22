<div class="col-12 col-md-4 mb-0 mb-md-3">
    <div class="card shadow">
        <img src="{{$product->image? $product->image->path: null}}"
             class="card-img-top" height="300">
        <div class="card-body">
            <h5 class="card-title text-center font-weight-bold text-truncate m-0 mb-2">
                {{$product->name}}
            </h5>
            <div class="rateYo" data-rateyo-num-stars="5" data-rateyo-rating="4" data-rateyo-read-only="true" ></div>
            <div class="text-center">
                <p class="text-center m-0 text-muted font-italic text-truncate">
                    {{$product->category? $product->category->name: "No Category"}}
                </p>
            </div>
            <div class="text-center my-1">
                <span class="badge badge-primary badge-pill">
                    Price: {{$product->selling_price}}
                </span>

                    @if ($product->is_new == 0)
                        <span class="badge badge-danger badge-pill">Discount:{{$product->discount}}</span>
                    @endif

                <span class="badge badge-danger badge-pill">
                    Status:
                    @if ($product->is_new == 1)
                        <span>New</span>
                    @else
                        <span>Old</span>
                    @endif
                </span>
            </div>
            <div>
                <p class="text-truncate">
                    {{$product->description}}
                </p>
            </div>
            <div class="text-center">
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="product" value="{{$product->id}}">
                    <button type="submit" class="btn btn-danger btn-block btn-sm">Add to Cart</button>
                </form>
                <br>
                <a href="/product" class="text-muted"
                   style="font-size: 14px; outline: none; text-decoration: none;">
                    <button type="submit" href="/product" class="btn btn-danger btn-block btn-sm">Display Product</button>
                </a>
            </div>
        </div>
    </div>
</div>
