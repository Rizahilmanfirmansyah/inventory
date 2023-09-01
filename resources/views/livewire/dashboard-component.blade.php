<div>
    <h3>Dashboard Hi, Admin</h3>
    <br>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            {{-- <span class="currency float-left mr-1">$</span> --}}
                            <span class="count">{{$product}}</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Product</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg ti-briefcase"></i>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-6">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{$customer}}</span>
                            <span></span>
                        </h3>
                        <p class="text-light mt-1 m-0">Customer</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg ti-shopping-cart"></i>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{$supplier}}</span>
                        </h3>
                        <p class="text-light mt-1 m-0">Supplier</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg ti ti-truck"></i>
                    </div><!-- /.card-right -->

                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h3 class="mb-0 fw-r">
                            <span class="count">{{$user}}</span>
                        </h3>
                        <p class="text-light mt-1 m-0">New users</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg ti-user"></i>
                    </div><!-- /.card-right -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Custom Table</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table" id="">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Avatar</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="serial">1.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5469 </td>
                            <td>  <span class="name">Louis Stanley</span> </td>
                            <td> <span class="product">iMax</span> </td>
                            <td><span class="count">231</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">2.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5468 </td>
                            <td>  <span class="name">Gregory Dixon</span> </td>
                            <td> <span class="product">iPad</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">3.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5467 </td>
                            <td>  <span class="name">Catherine Dixon</span> </td>
                            <td> <span class="product">SSD</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">4.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5466 </td>
                            <td>  <span class="name">Mary Silva</span> </td>
                            <td> <span class="product">Magic Mouse</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-pending">Pending</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div>
</div>
