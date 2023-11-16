<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Fixed Sidebar</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        .customer-list {
            margin-top: 20px;
        }

        .customer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .customer-name,
        .customer-email,
        .customer-phone {
            font-size: 18px;
            color: #333;
        }

        .edit-btn,
        .delete-btn {
            padding: 8px;
            margin-left: 8px;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
        }

        .edit-btn:hover,
        .delete-btn:hover {
            background-color: #2980b9;
        }

        .add-customer {
            margin-top: 20px;
        }

        .add-customer h3 {
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

        input {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 8px 16px;
            background-color: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        </head>

        <body>
            <div class="container">
                <h2>Quản lý Khách hàng</h2>

                <div class="customer-list" id="customerList">
                    <!-- Customer details will be dynamically added here -->
                </div>

                <div class="add-customer">
                    <h3>Thêm Khách hàng mới</h3>
                    <form id="addCustomerForm">
                        <label for="new-customer-name">Tên Khách hàng:</label>
                        <input type="text" id="new-customer-name" name="new-customer-name" required>

                        <label for="new-customer-email">Email:</label>
                        <input type="email" id="new-customer-email" name="new-customer-email" required>

                        <label for="new-customer-phone">Số điện thoại:</label>
                        <input type="tel" id="new-customer-phone" name="new-customer-phone" required>

                        <button type="submit">Thêm</button>
                    </form>
                </div>
            </div>
        </body>
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
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script>const customersData = [
    { name: 'John Doe', email: 'john@example.com', phone: '123-456-7890' },
    { name: 'Jane Doe', email: 'jane@example.com', phone: '987-654-3210' },
    { name: 'Alice Smith', email: 'alice@example.com', phone: '555-123-4567' },
    { name: 'Bob Johnson', email: 'bob@example.com', phone: '789-555-1234' },
];
</script>
</body>

</html>