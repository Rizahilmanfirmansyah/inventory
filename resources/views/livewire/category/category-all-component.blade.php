<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    @if (Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> 
                    @endif
                    <a href="{{ route('category.add')}}" class="btn btn-success">Add Category</a>
                    <br><br>
                    <table id="data-table" class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td>
                                    <a href="{{ route('category.edit', ['category_id'=>$category->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    &nbsp;
                                    <a href="#" wire:click.prevent="deleteConfirmation({{$category->id}})" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
 
</div>
