<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 35rem;">
                <div class="card-header">
                    Add
                </div>
                <div class="card-body">
                    <form action="#" wire:submit.privent="addCustomer">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" wire:model="nama">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="alamat">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Email</label>
                            <input type="text" class="form-control" wire:model="email">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
