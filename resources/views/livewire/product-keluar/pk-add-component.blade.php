<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    Product Keluar
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addProductOut">
                        <div class="form-group">
                            <label for="" class="form-label">Produk</label>
                            <select name="" id="" class="form-control" wire:model="product_id">
                                <option value="#" selected>Pilih Jenis Product</option>
                                @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->nama}}</option>
                                @endforeach
                            </select>
                            @error('product_id') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Supplier</label>
                            <select name="" id="" class="form-control" wire:model="customer_id">
                                <option value="#" selected>Supplier Dari</option>
                                @foreach ($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Quantity</label>
                            <input type="text" class="form-control" wire:model="qty">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" wire:model="tanggal">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('product_keluar.all')}}" class="btn btn-primary">Cancel</a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
