<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <style>
        .position{
            margin-top: 5px;
        }
    </style>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    Data-Supplier
                </div>
                <div class="card-body">
                    @if (Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>
                    @endif
                    <a href="{{ route('customer.add')}}" class="btn btn-success position">Add Customer</a>
                    <table class="table">
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
                        <tr>
                            <td>{{$supplier->nama}}</td>
                            <td>{{$supplier->alamat}}</td>
                            <td>{{$supplier->email}}</td>
                            <td>{{$supplier->telepon}}</td>
                            <td>
                                <a href="{{ route('suppliers.edit', ['suppliers_id'=>$supplier->id])}}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>    
                        @endforeach                 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
