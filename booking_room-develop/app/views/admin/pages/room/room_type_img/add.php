<?php
include '../../controllers/admin/handlerRoomTypeImages.php';
add();

$_SESSION['errors_addRoomType'] = [];
$errors_addRoomType = $_SESSION['errors_addRoomType'];
$_SESSION['errors_addRoomType'] = [];
?>

<div class="content-wrapper">
    <form class="type-room needs-validation p-5" method="post" enctype="multipart/form-data" novalidate>
        <h2 class="text-center add_title text-uppercase">Add new room type image</h2>
        <div class="form-row ">
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom01">Name Image</label>
                <input type="text" class="form-control" name="name_img" id="validationCustom01" value="" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <label class="mt-3">Path</label>
            <div class="custom-file mb-3 col-lg-12 col-md-12 col-12">

                <label class="my-3 custom-file-label" for="validationCustom05 validatedCustomFile">Choose file...</label>
                <input type="file" class="form-control custom-file-input" name='path[]' multiple="multiple" id="validationCustom05 validatedCustomFile" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <?php $room_type = select_room_type_all(false); ?>
                <label class="my-3" for="">Room Type</label>

                <select name="room_name" id="" class="form-control" id="validationCustom02" required>
                    <option value="0">--Choose room--</option>
                    <?php foreach ($room_type as $value) : ?>

                        <option value="<?= $value['name'] ?>"><?= $value['name'] ?></option>
                    <?php endforeach ?>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom04">Status</label>
                <select class="custom-select" id="validationCustom04" name="status" required>
                    <option selected disabled value="">Choose...</option>
                    <option>0</option>
                    <option>1</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>

        </div>

        <input class="btn btn-primary mt-4" type="submit" name="btn_add_room_type_img" value="Add new">
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