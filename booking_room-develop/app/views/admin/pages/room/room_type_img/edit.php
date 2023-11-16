<?php
include '../../controllers/admin/handlerRoomTypeImages.php';
edit();
$_SESSION['errors_editRoomTypeImage'] = [];
$errors_editRoomTypeImage = $_SESSION['errors_editRoomTypeImage'];
$_SESSION['errors_editRoomTypeImage'] = [];
if (isset($_GET['id']) && isset($_GET['act'])) {
    $result = get_info_room_type_image($_GET['id']);
}
$room_type =  getRoomTypeWithImages();
foreach ($room_type as $item) {
    // var_dump($item['id']);
}


?>


<div class="content-wrapper">
    <form class="type-room needs-validation p-5" method="post" enctype="multipart/form-data" novalidate>
        <h2 class="text-center add_title text-uppercase">Edit room type image</h2>
        <div class="form-row">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom01">Name Room Image</label>
                <input type="text" class="form-control" name="name_img" id="validationCustom01" value="<?= $result['name_img'] ?>" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <label class="mt-3">Path</label>
            <div class="custom-file mb-3 col-lg-12 col-md-12 col-12">

                <label class="my-3 custom-file-label" for="validationCustom05 validatedCustomFile">Choose file...</label>
                <input type="file" class="form-control custom-file-input" name='path' id="validationCustom05 validatedCustomFile">
                <input type="hidden" name="old_image" value="<?= $result['path'] ?>">
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class=" ">

                <p class="mt-3">Old Image:</p>
                <img src="/public/assets/uploads/<?= $result['path'] ?>" height="200" alt="Old image" width="200" class="">
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom01"> Room Type</label>
                <select class="form-control disable" name="roomTypeId" id="validationCustom01" required>
                    <?php foreach ($room_type as $item) : ?>
                        <option value="<?= $item['id'] ?>" <?= ($result['room_type_id'] === $item['id']) ? 'selected' : '' ?>>
                            <?= $item['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom01">New Room Type</label>
                <select class="form-control" name="new_room_type" id="validationCustom01" required>
                    <option value="0">---Choose name type new---</option>
                    <?php foreach ($room_type as $item) : ?>
                        <option value="<?= $item['name'] ?>">
                            <?= $item['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom04">Status</label>
                <select class="custom-select" id="validationCustom04" name="status" required>
                    <option selected disabled value="">Choose...</option>
                    <option <?= ($result['status'] === 0) ? 'selected' : '' ?>>0</option>
                    <option <?= ($result['status'] === 1) ? 'selected' : '' ?>>1</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>

        </div>

        <input class="btn btn-primary mt-4" type="submit" name="btn_edit_room_type_img" value="Save change">
    </form>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</div>