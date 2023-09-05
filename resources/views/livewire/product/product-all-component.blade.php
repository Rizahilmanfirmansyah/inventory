<div>
    <style>
        .position{
            margin-top: 12px;
        }
    </style>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card position" style="width: 60rem;">
                <div class="card-header">
                    Product
                </div>
                <div class="card-body">
                    <a href="{{ route('product.add')}}" class="btn btn-success">Add Product</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                    <table class="table" id="product-all">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Quantity</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>                            
                                <td><img src="{{ asset('assets/images/product')}}/{{$product->image}}" alt="" style="width: 120px;"></td>
                                <td>{{$product->nama}}</td>
                                <td>{{$product->qty}}</td>
                                <td>{{$product->harga}}</td>
                                <td>{{$product->category->name ?? ''}}</td>
                                <td class="col-2">
                                    <a href="{{ route('product.edit',['product_id'=>$product->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    <a href="#" wire:click.prevent="deleteProduct({{$product->id}})" class="btn btn-danger fa fa-trash"></a>
                                </td>                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#product-all', {
            order: [['2', 'desc']]
        });
    </script>
</div>
