<div class="container">
    <div class="jsutify-content-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Add User
            </div>
            <div class="card-body">
                <form action="{{ route('aksireg')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>