<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Add User
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addUser">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" wire:model="name">
                        @error('name') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="nama" class="form-control" wire:model="email">
                        @error('email') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="nama" class="form-control" wire:model="password">
                        @error('password') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="" wire:model="role" class="form-control" id="">
                            <option value="" selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="normal-user">Normal User</option>
                        </select>
                        @error('role') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>