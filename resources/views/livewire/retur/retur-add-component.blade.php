<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 35rem;">
                <div class="card-header">
                    Add Retur
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addRetur">
                        <div class="form-group">
                            <label for="product_id" class="form-label">Nama Produk</label>
                           <input type="text" class="form-control" wire:model="product">
                        </div>
                        <div class="form-group">
                            <label for="product_id" class="form-label">Nama Customer Retur</label>
                            <input type="text" class="form-control" wire:model="customer">
                        </div>
                        <div class="form-group">
                            <label for="product_id" class="form-label">Nama Ekspedisi Retur</label>
                            <select name="" class="form-control" id="" wire:model="ekspedisi">
                                <option value="" selected>Pilih Ekspedisi</option>
                                <option value="J&T">J&T</option>
                                <option value="Ninja Xpress">Ninja Xpress</option>
                                {{-- @foreach ($ekspedisiInventory as $ekspedisi)
                                <option value="{{$ekspedisi->id}}">{{$ekspedisi->name}}</option>          
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" wire:model="qty">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" wire:model="tanggal">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
