<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-center title text-uppercase"> List Promotion</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Room-type</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="index.php?act=add_promotion" class="btn btn-outline-success btn-add-room my-3">+ADD NEW</a>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name Promotion</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Discount (%)</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>STT</td>
                                        <td>Name Promotion</td>
                                        <td>Start Date</td>
                                        <td>End Date</td>
                                        <td>Discount (%)</td>
                                        <td>Description</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                        <td>Action</th>
                                    </tr>
                                    </tr>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
    function del(name) {

        return confirm('Do you want to delete ? ')

    }
</script>
</div>