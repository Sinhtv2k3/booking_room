<?php
include '../../controllers/admin/handlerRoomType.php';
edit();
$_SESSION['errors_addRoomType'] = [];
$errors_addRoomType = $_SESSION['errors_addRoomType'];
$_SESSION['errors_addRoomType'] = [];
if (isset($_GET['id']) && isset($_GET['act'])) {
    $result = get_info_room_type($_GET['id']);
}
?>

<div class="content-wrapper">
    <form class="type-room needs-validation p-5" method="post" enctype="multipart/form-data" novalidate>
        <h2 class="text-center add_title text-uppercase">Edit new room type</h2>
        <div class="form-row">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom01">Name</label>
                <input type="text" class="form-control" name="name" id="validationCustom01" value="<?= $result['name'] ?>" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom02">Price</label>
                <input type="number" class="form-control" name="price" id="validationCustom02" value="<?= $result['price'] ?>" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom03">Bed_type</label>
                <input type="text" class="form-control" name="bed_type" id="validationCustom03" value="<?= $result['bed_type'] ?>" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom04">isSmoking</label>
                <select class="custom-select" id="validationCustom04" name="isSmoking" required>
                    <option selected disabled value="">Choose...</option>
                    <option <?= ($result['isSmoking'] === 0) ? 'selected' : '' ?>>0</option>
                    <option <?= ($result['isSmoking'] === 1) ? 'selected' : '' ?>>1</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <label class="mt-3">Thumb Nail</label>
            <div class="custom-file mb-3 col-lg-12 col-md-12 col-12 ">

                <label class="my-3 custom-file-label" for=" ">Choose file...</label>

                <input type="file" class="form-control custom-file-input" name='thumb_nail' id=" ">
                <input type="hidden" name="old_image" value="<?= $result['thumb_nail'] ?>">

                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class=" ">

                <p class="mt-3">Old Image:</p>
                <img src="/public/assets/uploads/<?= $result['thumb_nail'] ?>" height="200" alt="Old image" width="200" class="">
            </div>
            <div class="form-group col-lg-12 col-md-12 col-12 w-100 mt-5">
                <label class="my-3" for="exampleFormControlTextarea1 ">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"><?= $result['description'] ?></textarea>
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

        <input class="btn btn-primary mt-4" type="submit" name="btn_edit_room_type" value="Save change">
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