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
                    Data-Penjualan
                </div>
                <div class="card-body">
                    @if (Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>
                    @endif
                    <a href="{{ route('sales.add')}}" class="btn btn-success position">Add Customer</a>
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
                        @foreach ($sales as $sale)
                        <tr>
                            <td>{{$sale->nama}}</td>
                            <td>{{$sale->alamat}}</td>
                            <td>{{$sale->email}}</td>
                            <td>{{$sale->telepon}}</td>
                            <td>
                                <a href="{{ route('sales.edit', ['sales_id'=>$sale->id])}}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>    
                        @endforeach                 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
