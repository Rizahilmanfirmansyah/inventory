<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div  class="container">
        <div class="card" style="width: 50rem;">
            <div class="card-header">
                Detail Product
            </div>
            <div class="card-body">
                <tbody>
                    <tr>
                        <th>Nama Produk</th>
                        <th>:</th>
                        <th>{{$detail->nama}}</th>
                    </tr>
                    <tr>
                        <th>Foto</th>
                        <td>:</td>
                        <td>
                            <img src="{{ asset('assets/images/product')}}/{{$detail->image}}" alt="">
                        </td>
                    </tr>
                </tbody>
            </div>
        </div>
    </div>
</div>
