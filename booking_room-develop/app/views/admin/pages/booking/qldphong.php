<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Boxed Layout</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>body {
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

.booking-list {
    margin-top: 20px;
}

.booking {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.booking-number, .customer-name, .room-number, .check-in-date, .check-out-date {
    font-size: 18px;
    color: #333;
}

.edit-btn, .delete-btn {
    padding: 8px;
    margin-left: 8px;
    cursor: pointer;
}

.add-booking {
    margin-top: 20px;
}

.add-booking h3 {
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

input, select {
    padding: 8px;
    width: 200px;
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
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <h2>Quản lý đặt phòng</h2>
    
    <div class="booking-list">
        <div class="booking">
            <span class="booking-number">BK001</span>
            <span class="customer-name">Nguyễn Văn A</span>
            <span class="room-number">101</span>
            <span class="check-in-date">2023-01-15</span>
            <span class="check-out-date">2023-01-20</span>
            <button class="edit-btn">Sửa</button>
            <button class="delete-btn">Xóa</button>
        </div>
        
        <div class="booking">
            <span class="booking-number">BK002</span>
            <span class="customer-name">Trần Thị B</span>
            <span class="room-number">202</span>
            <span class="check-in-date">2023-02-10</span>
            <span class="check-out-date">2023-02-15</span>
            <button class="edit-btn">Sửa</button>
            <button class="delete-btn">Xóa</button>
        </div>
        
        <!-- Thêm các đặt phòng khác ở đây -->
    </div>

    <div class="add-booking">
        <h3>Thêm Đặt phòng mới</h3>
        <form action="#" method="post">
            <label for="new-booking-number">Số đặt phòng:</label>
            <input type="text" id="new-booking-number" name="new-booking-number" required>

            <label for="new-customer-name">Tên khách hàng:</label>
            <input type="text" id="new-customer-name" name="new-customer-name" required>

            <label for="new-room-number">Số phòng:</label>
            <input type="text" id="new-room-number" name="new-room-number" required>

            <label for="new-check-in-date">Ngày nhận phòng:</label>
            <input type="date" id="new-check-in-date" name="new-check-in-date" required>

            <label for="new-check-out-date">Ngày trả phòng:</label>
            <input type="date" id="new-check-out-date" name="new-check-out-date" required>

            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
