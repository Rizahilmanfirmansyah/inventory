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
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table" id="data-table">
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
                        @foreach ($products as $product)
                        <tbody>
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
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
