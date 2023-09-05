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
                    <a href="{{ route('customer.export')}}" class="btn btn-secondary position">Export Data Customer</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->nama}}</td>
                                <td>{{$customer->alamat}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->telepon}}</td>
                                <td class="col-2">
                                    <a href="{{ route('customer.edit', ['customer_id'=>$customer->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    <a href="#" wire:click.prevent="delete({{$customer->id}})" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr> 
                            @endforeach                 
                        </tbody>   
                    </table>
                </div>
            </div>
        </div>
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Import Data Customer
            </div>
            <div class="card-body">
                <form action="{{ route('customer.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        {{-- <label class="input-group-text" for="inputGroupFile01">Upload</label> --}}
                        <input type="file" name="file" class="form-control" id="inputGroupFile01">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
        </div>
    </div>
</div>
