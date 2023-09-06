<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 35rem;">
                <div class="card-header">
                    Edit-Sales
                </div>
                <div class="card-body">
                    <form action="#" wire:submit.privent="editSales">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" wire:model="nama">
                            @error('nama') <span class="error">{{ $message }}</span> @enderror                                
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="alamat">
                            @error('alamat') <span class="error">{{ $message }}</span> @enderror                                
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Email</label>
                            <input type="text" class="form-control" wire:model="email">
                            @error('email') <span class="error">{{ $message }}</span> @enderror                                
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon">
                            @error('telepon') <span class="error">{{ $message }}</span> @enderror                                
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
