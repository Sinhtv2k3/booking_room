<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý nhân viên</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .employee-list {
            margin-top: 20px;
        }

        .employee-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .employee-name {
            font-size: 18px;
            color: #333;
        }

        .edit-btn, .delete-btn {
            padding: 8px 16px;
            margin-left: 8px;
            cursor: pointer;
            box-sizing: border-box; /* Đảm bảo padding và border không làm thay đổi kích thước của phần tử */
        }

        .edit-btn {
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
        }

        .delete-btn {
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
        }

        .edit-btn:hover, .delete-btn:hover {
            opacity: 0.8;
        }

        .add-employee {
            margin-top: 20px;
        }

        .add-employee h3 {
            color: #333;
        }

        form {
            display: flex;
            align-items: center;
        }

        label {
            margin-right: 10px;
        }

        input, select {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 8px 16px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">
            <h2>Quản lý nhân viên</h2>

            <div class="employee-list">
                <div class="employee-item">
                    <span class="employee-name">Nguyễn Văn A</span>
                    <button class="edit-btn">Sửa</button>
                    <button class="delete-btn">Xóa</button>
                </div>

                <div class="employee-item">
                    <span class="employee-name">Trần Thị B</span>
                    <button class="edit-btn">Sửa</button>
                    <button class="delete-btn">Xóa</button>
                </div>
                <!-- Thêm các nhân viên khác ở đây -->
            </div>

            <div class="add-employee">
                <h3>Thêm nhân viên mới</h3>
                <form action="#" method="post">
                    <label for="new-employee-name">Tên nhân viên:</label>
                    <input type="text" id="new-employee-name" name="new-employee-name" required>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</div>
<!-- ./wrapper -->
</body>
</html>
