<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Log Product Activity
                </div>
                <div class="card-body">
                    <table class="table nowrap" id="data-activity">
                        <thead>
                            <tr>
                                <th>Log Name</th>
                                <th>Desciption</th>
                                <th>Activity At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products_masuk as $product)
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
