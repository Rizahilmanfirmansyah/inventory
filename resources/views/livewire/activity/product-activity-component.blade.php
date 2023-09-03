<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Log Name</th>
                                <th>Desciption</th>
                                <th>Activity At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->log_name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
