<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

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

        .room-list {
            margin-top: 20px;
        }

        .room {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .room-number,
        .room-type,
        .status {
            font-size: 18px;
            color: #333;
        }

        .edit-btn,
        .delete-btn {
            padding: 8px;
            margin-left: 8px;
            cursor: pointer;
        }

        .add-room {
            margin-top: 20px;
        }

        .add-room h3 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px 0;
        }

        input,
        select {
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

<body class="hold-transition layout-top-nav">
    <div class="container">
        <h2>Quản lý Phòng</h2>

        <div class="room-list">
            <div class="room">
                <span class="room-number">101</span>
                <span class="room-type">Phòng Đơn</span>
                <span class="status">Trống</span>
                <button class="edit-btn">Sửa</button>
                <button class="delete-btn">Xóa</button>
            </div>

            <div class="room">
                <span class="room-number">202</span>
                <span class="room-type">Phòng Đôi</span>
                <span class="status">Đã đặt</span>
                <button class="edit-btn">Sửa</button>
                <button class="delete-btn">Xóa</button>
            </div>

            <!-- Thêm các phòng khác ở đây -->
        </div>

        <div class="add-room">
            <h3>Thêm Phòng mới</h3>
            <form action="#" method="post">
                <label for="new-room-number">Số phòng:</label>
                <input type="text" id="new-room-number" name="new-room-number" required>

                <label for="new-room-type">Loại phòng:</label>
                <select id="new-room-type" name="new-room-type" required>
                    <option value="Phòng Đơn">Phòng Đơn</option>
                    <option value="Phòng Đôi">Phòng Đôi</option>
                    <!-- Thêm các loại phòng khác ở đây -->
                </select>

                <label for="new-status">Trạng thái:</label>
                <select id="new-status" name="new-status" required>
                    <option value="Trống">Trống</option>
                    <option value="Đã đặt">Đã đặt</option>
                    <!-- Thêm các trạng thái khác ở đây -->
                </select>

                <button type="submit">Thêm</button>
            </form>
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>