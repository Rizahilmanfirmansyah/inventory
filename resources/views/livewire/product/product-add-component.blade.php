<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 35rem;">
                <div class="card-header">
                    Add-Product
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addProduct" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" wire:model="nama">
                            @error('nama') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Harga</label>
                            <input type="text" class="form-control" wire:model="harga">
                            @error('harga') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Quantity</label>
                            <input type="text" class="form-control" wire:model="qty">
                            @error('qty') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <select name="" id="" class="form-control" wire:model="category_id">
                                <option value="" selected>Pilih Kategori</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto Produk</label>
                            <input type="file" class="form-control" wire:model="image">
                            <br>
                            @if ($this->image)
                            <img src="{{$image->temporaryUrl()}}" style="width: 200px;" alt="">
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
