<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Log Product Activity
                </div>
                <div class="card-body">
                    <table class="table nowrap" id="data-activity-log-product">
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
    <script>
        new DataTable('#data-activity-log-product', {
            order: [['2', 'desc']]
        });
    </script>
</div>
