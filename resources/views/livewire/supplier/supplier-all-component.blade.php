<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <style>
        .position{
            margin-top: 5px;
        }
    </style>
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Data-Supplier
                </div>
                <div class="card-body">
                    <a href="{{ route('suppliers.add')}}" class="btn btn-success position">Add Supplier</a>
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
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($suppliers as $supplier)
                        <tbody>
                            <tr>
                                <td>{{$supplier->nama}}</td>
                                <td>{{$supplier->alamat}}</td>
                                <td>{{$supplier->email}}</td>
                                <td>{{$supplier->telepon}}</td>
                                <td>
                                    <a href="{{ route('suppliers.edit', ['suppliers_id'=>$supplier->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    <a href="#" wire:click.prevent="delete({{$supplier->id}})" class="btn btn-danger fa fa-trash"></a>
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
