<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Dashboard</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css"
    />
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">

        
    
    </head>
    <body>
        <div class="sidebar">
            <h3 class="text-center py-4">Admin Panel</h3>
            <a href="admin_dashboard.html"
                ><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a
            >
            <a href="car_management.html"
                ><i class="fas fa-car me-2"></i> Manage Cars</a
            >
            <a href="booking_management.html"
                ><i class="fas fa-book me-2"></i> Manage Bookings</a
            >
            <a href="user_management.html"
                ><i class="fas fa-users me-2"></i> Manage Users</a
            >
            <a href="settings.html"
                ><i class="fas fa-cogs me-2"></i> Settings</a
            >
            <a href="login.html"
                ><i class="fas fa-sign-out-alt me-2"></i> Logout</a
            >
        </div>

        <div class="content p-12">
            <h2>Data Table with Pagination</h2>
            <table
                id="dataTable"
                class="table table-striped"
                style="width: 80%"
            >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

        <footer class="text-right py-3">
            <div class="container">
                <p>&copy; 2025 Car Rental. All Rights Reserved.</p>
                
            </div>
        </footer>
        <script>
            $(document).ready(function () {
                $("#dataTable").DataTable();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
