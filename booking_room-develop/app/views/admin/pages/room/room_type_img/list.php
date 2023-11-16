<?php
// include '../../controllers/admin/room-type.php';
include '../../controllers/admin/handlerRoomType.php';

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2 ">
                <div class="col-sm-6">
                    <h1 class="text-center title text-uppercase"> Room type image</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item ">Room</li>
                        <li class="breadcrumb-item active">Room-type-image</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body ">
                            <a href="index.php?act=add_room_type_img" class="btn btn-outline-success btn-add-room my-3">+ADD NEW</a>
                            <table id="example1" class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name Room Image</th>
                                        <th>Room Type</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php
                                            $roomType = getRoomTypeWithImages();
                                            $displayedRoomTypes = [];

                                            foreach ($result as $key => $item) {

                                                $roomTypeId = $item['room_type_id'];

                                                // Kiểm tra xem đã hiển thị loại phòng này chưa
                                                if (!in_array($roomTypeId, $displayedRoomTypes)) {
                                                    // Lưu ID loại phòng vào mảng để đảm bảo không hiển thị lại
                                                    $displayedRoomTypes[] = $roomTypeId;

                                                    // Tìm thông tin về loại phòng từ $roomType dựa trên $roomTypeId
                                                    $roomTypeInfo = null;
                                                    foreach ($roomType as $type) {
                                                        if ($type['id'] === $roomTypeId) {
                                                            $roomTypeInfo = $type;
                                                            break;
                                                        }
                                                    }

                                                    if ($roomTypeInfo) {
                                                        // Xây dựng chuỗi path
                                                        $pathString = '';
                                                        foreach ($result as $item) {
                                                            if ($item['room_type_id'] === $roomTypeId) {
                                                                $pathString .= $item['path'] . ', ';
                                                            }
                                                        }
                                                        $pathString = rtrim($pathString, ', '); // Xóa dấu phẩy cuối cùng

                                                        // Hiển thị thông tin loại phòng và chuỗi path
                                                        echo '<tr>';
                                                        echo '<td>' . ($key + 1) . '</td>';
                                                        echo '<td>' . $item['name_img'] . '</td>';
                                                        echo '<td>' . $roomTypeInfo['name'] . '</td>';
                                                        echo '<td class="d-flex flex-column parent-img-room-type">';
                                                        $paths = explode(', ', $pathString);
                                                        foreach ($paths as $path) {
                                                            echo '<img src="/public/assets/uploads/' . $path . '" alt="Image" class="img-room-type">';
                                                        }
                                                        echo '</td>';
                                                        // echo '<td><img src="/public/assets/uploads/' . $roomTypeInfo['thumb_nail'] . '" alt="Image" class="img-room-type"></td>';
                                                        echo '<td>' . $item['status'] . '</td>';
                                                        echo '<td><a href="./index.php?id=' . $item['id'] . '&act=edit_room_type_img" class="btn btn-outline-warning">Sửa</a></td>';
                                                        echo '<td><a onclick="return del()" href="index.php?id=' . $item['id'] . '&act=del_room_type_img" class="btn btn-outline-danger" name="delete">Xóa</a></td>';
                                                        echo '</tr>';
                                                    }
                                                }
                                            }
                                            ?> -->

                                    <?php
                                    $result = getRoomTypeImages();
                                    $roomType = getRoomTypeWithImages();

                                    // Tạo mảng kết hợp ánh xạ room_type_id với roomType
                                    $roomTypeMap = [];
                                    foreach ($roomType as $item) {
                                        $roomTypeMap[$item['id']] = $item;
                                    }

                                    foreach ($result as $key => $value) {
                                        $roomTypeId = $value['room_type_id'];

                                        if (isset($roomTypeMap[$roomTypeId])) {
                                            $item = $roomTypeMap[$roomTypeId];
                                    ?>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $value['name_img'] ?></td>
                                            <td><?= $item['name'] ?></td>
                                            <td><img src="/public/assets/uploads/<?= $value['path'] ?>" alt="" class="img-room-type"></td>
                                            <td><?= $value['status'] ?></td>
                                            <td><a href="./index.php?id=<?= $value['id'] ?>&act=edit_room_type_img" class="btn btn-outline-warning">Sửa</a></td>
                                            <td><a onclick="return del()" href="./index.php?id=<?= $value['id'] ?>&act=del_room_type_img" class="btn btn-outline-danger" name="delete">Xóa</a></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Bed_type</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot> -->
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