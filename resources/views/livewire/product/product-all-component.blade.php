<div>
    <style>
        .position{
            margin-top: 12px;
        }
    </style>
    <div class="container">
        <div class="justify-content-center">
            <a href="{{ route('product.add')}}" class="btn btn-success">Add Product</a>
            <div class="card position" style="width: 60rem;">
                <div class="card-header">
                    Product
                </div>
                <div class="card-body">
                    @if (Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>       
                    @endif
                    <table class="table">
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
                        <tr>                            
                            <td><img src="{{ asset('assets/images/product')}}/{{$product->image}}" alt="" style="width: 120px;"></td>
                            <td>{{$product->nama}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->harga}}</td>
                            <td>{{$product->category->name ?? ''}}</td>
                            <td>
                                <a href="{{ route('product.edit',['product_id'=>$product->id])}}" class="btn btn-success">Edit</a>
                                <a href="#" wire:click.prevent="delete({{$product->id}})" class="btn btn-secondary">Delete</a>
                            </td>                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
