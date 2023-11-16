<?php
include '../../controllers/admin/handlerRoomType.php';
add();
$_SESSION['errors_addRoomType'] = [];
$errors_addRoomType = $_SESSION['errors_addRoomType'];
$_SESSION['errors_addRoomType'] = [];
?>

<div class="content-wrapper">
    <form class="type-room needs-validation p-5" method="post" enctype="multipart/form-data" novalidate>
        <h2 class="text-center add_title text-uppercase">Add new room type</h2>
        <div class="form-row ">
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom01">Name</label>
                <input type="text" class="form-control" name="name" id="validationCustom01" value="" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom02">Price</label>
                <input type="number" class="form-control" name="price" id="validationCustom02" value="" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom03">Bed_type</label>
                <input type="text" class="form-control" name="bed_type" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom04">isSmoking</label>
                <select class="custom-select" id="validationCustom04" name="isSmoking" required>
                    <option selected disabled value="">Choose...</option>
                    <option>0</option>
                    <option>1</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>

            <label class="mt-3">Thumb Nail</label>
            <div class="custom-file mb-3 col-lg-12 col-md-12 col-12">

                <label class="my-3 custom-file-label" for="validationCustom05 validatedCustomFile">Choose file...</label>
                <input type="file" class="form-control custom-file-input" name='thumb_nail' id="validationCustom05 validatedCustomFile" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-12 w-100">
                <label class="my-3" for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name=" description" rows="3"></textarea>
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

        <input class="btn btn-primary mt-4" type="submit" name="btn_add_room_type" value="Add new">
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