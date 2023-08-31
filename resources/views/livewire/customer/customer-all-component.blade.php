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
                    Data-Customer
                </div>
                <div class="card-body">
                    <a href="{{ route('customer.add')}}" class="btn btn-success position">Add Customer</a>
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
                        @foreach ($customers as $customer)
                        <tbody>
                            <tr>
                                <td>{{$customer->nama}}</td>
                                <td>{{$customer->alamat}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->telepon}}</td>
                                <td>
                                    <a href="{{ route('customer.edit', ['customer_id'=>$customer->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    <a href="#" wire:click.prevent="delete({{$customer->id}})" class="btn btn-danger fa fa-trash"></a>
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
