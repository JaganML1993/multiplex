@forelse($products as $product)
            <!-- major-nutrients -->
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                         <a href="{{ route('category.product.detail',['id' => $product->id]) }}"><img src="{{ url('').'/'.$product->image }}" alt="Gallery Image"></a>
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="{{ route('category.product.detail',['id' => $product->id]) }}">{{$product->name}}</a></h3>
                            </div>
                            <a href="{{ route('category.product.detail',['id' => $product->id]) }}" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
            </div>
            @empty
                <h5>No product found</h5>
            @endforelse