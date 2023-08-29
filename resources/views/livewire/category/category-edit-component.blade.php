<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 24rem">
                <div class="card-header">
                    Add-Category
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="editCategory">
                        <div class="form-group">
                            <label for="Name">Nama Kategori</label>
                            <input type="text" class="form-control" wire:model="name">
                        </div>
                        <button type="submit" class="btn btn-success">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
