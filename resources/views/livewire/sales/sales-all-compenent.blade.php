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
                    <a href="{{ route('sales.export')}}" class="btn btn-secondary position">Export Data</a>
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
                            @foreach ($sales as $sale)
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
                            @endforeach                 
                        </tbody>   
                    </table>
                </div>
            </div>
        </div>
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Import Data Sales
            </div>
            <div class="card-body">
                <form action="{{ route('sales.import')}}" method="POST" enctype="multipart/form-data">
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
</div>
