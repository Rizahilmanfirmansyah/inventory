<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 35rem;">
                <div class="card-header">
                    Add-Product
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="editProduct" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" wire:model="nama">
                            @error('nama') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Harga</label>
                            <input type="text" class="form-control" wire:model="harga">
                            @error('harga') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Quantity</label>
                            <input type="text" class="form-control" wire:model="qty">
                            @error('qty') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Kategori</label>
                            <select name="" id="" class="form-control" wire:model="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" wire:model="img">
                            <br>
                            @if ($this->img)
                            <img src="{{$img->temporaryUrl()}}" style="width: 200px;" alt="">
                            @else
                            <img src="{{ asset('assets/images/product')}}/{{$image}}" alt="">        
                            @endif
                            @error('image') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
