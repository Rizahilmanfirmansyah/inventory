<div>
    <div class="container">
        <div class="card" style="width: 60rem;">
            <div class="card-header text-center">
                Log Retur Table
            </div>
            <div class="card-body">
                <table class="table" id="data-activity-retur">
                    <thead>
                        <tr>
                            <th>Log Name</th>
                            <th>Description</th>
                            <th>Activity At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($returs as $retur)
                        <tr>
                            <td>{{$retur->log_name}}</td>
                            <td>{{$retur->description}}</td>
                            <td>{{$retur->created_at}}</td>
                        </tr>         
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#data-activity-retur', {
            order: [['2', 'desc']]
        });
    </script>
</div>
