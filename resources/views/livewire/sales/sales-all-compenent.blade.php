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
                    Data-Penjualan
                </div>
                <div class="card-body">
                    <a href="{{ route('sales.add')}}" class="btn btn-success position">Add Sales</a>
                    <a href="{{ route('sales.export')}}" class="btn btn-primary position">Export Data</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif 
                    <table class="table " id="data-table">
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
                        <tbody>
                            <tr>
                                <td>{{$sale->nama}}</td>
                                <td>{{$sale->alamat}}</td>
                                <td>{{$sale->email}}</td>
                                <td>{{$sale->telepon}}</td>
                                <td class="col-2">
                                    <div class="">
                                        <a href="{{ route('sales.edit', ['sales_id'=>$sale->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                        &nbsp;
                                        <a href="#" wire:click.prevent="delete({{$sale->id}})" class="btn btn-danger fa fa-trash"></a>    
                                    </div>
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
                Import Data For Sales
            </div>
            <div class="card-body">
                <form action="{{ route('sales.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        </div>
                      </div>
                      <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
