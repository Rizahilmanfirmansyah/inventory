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
                    <a href="{{ route('customer.export')}}" class="btn btn-secondary">Export Data Customer</a>
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
                                <td class="col-2">
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
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Import Data
            </div>
            <div class="card-body">
                <form action="{{ route('customer.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                      <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
