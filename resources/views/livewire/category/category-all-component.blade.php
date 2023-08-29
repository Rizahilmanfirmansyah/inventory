<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container">
        <div class="">
            <a href="{{ route('category.add')}}" class="btn btn-success">Add Category</a>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    @if (Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>   
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>
                                <a href="{{ route('category.edit', ['category_id'=>$category->id])}}" class="btn btn-secondary">Edit</a>
                                <a href="#" wire:click.prevent="delete({{$category->id}})" class="btn btn-secondary">Delete</a>
                            </td>
                        </tr>       
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
