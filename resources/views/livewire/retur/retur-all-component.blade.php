<div>
    {{-- Do your work, then step back. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Data Retur
                </div>
                <div class="card-body">
                    <a href="{{ route('retur.add')}}" class="btn btn-success">Add Retur</a>
                    <a href="{{ route('retur.export')}}" class="btn btn-secondary">Export Data</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table" id="data-retur-all">
                        <thead>
                            <tr>
                                <th>Nama Product</th>
                                <th>Nama Customer</th>
                                <th>Ekspedisi</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($returs as $retur)
                            <tr>
                                <td>{{$retur->product}}</td>
                                <td>{{$retur->customer}}</td>
                                <td>{{$retur->ekspedisi}}</td>
                                <td>{{$retur->qty}}</td>
                                <td>{{$retur->tanggal}}</td>
                                <td>
                                    <a href="{{ route('retur.edit', ['retur_id'=>$retur->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    <a href="#" wire:click.prevent="delete({{$retur->id}})" class="btn btn-danger fa fa-trash"></a>
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
                Import Data Retur
            </div>
            <div class="card-body">
                <form action="{{ route('retur.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="retur"></label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#data-retur-all', {
            order: [['4', 'desc']]
        });
    </script>
</div>
