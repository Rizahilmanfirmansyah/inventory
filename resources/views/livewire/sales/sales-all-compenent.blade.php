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
    </div>
</div>
