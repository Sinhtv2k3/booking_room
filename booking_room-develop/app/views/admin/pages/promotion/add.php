<?php
include '../../controllers/admin/handlerPromotion.php';
add();
?>
<div class="content-wrapper">
    <form class="type-room needs-validation p-5" method="post" enctype="multipart/form-data" novalidate>
        <h2 class="text-center add_title text-uppercase">Add New Promotion</h2>
        <div class="form-row ">
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom01">Name</label>
                <input type="text" class="form-control" name="name" id="validationCustom01" value="" required>
                <div class="invalid-feedback">
                    Please provide a valid name.
                </div>
            </div>



            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom03">Start Date</label>
                <input type="date" class="form-control" name="start_date" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please select a start date.
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom04">End Date</label>
                <input type="date" class="form-control" name="end_date" id="validationCustom04" required>
                <div class="invalid-feedback">
                    Please select an end date.
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom05">Discount (%)</label>
                <input type="number" class="form-control" name="discount" id="validationCustom05" min="0" required>
                <div class="invalid-feedback">
                    Please provide a valid discount value.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label class="my-3" for="validationCustom02">Description</label>
                <textarea class="form-control" name="description" id="validationCustom02" required></textarea>
                <div class="invalid-feedback">
                    Please provide a description.
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

        <input class="btn btn-primary mt-4" type="submit" name="add_promotion" value="Add new">
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