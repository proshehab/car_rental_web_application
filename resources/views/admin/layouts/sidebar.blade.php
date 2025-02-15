   <!-- Sidebar -->
   <div class="bg-dark text-white" style="width: 250px; height: 100vh;">
    <div class="container-fluid">
        <h3 class="text-center py-4">Admin Panel</h3>
        <ul class="nav flex-column px-2">
            <li class="nav-item">
                <a class="nav-link text-white" href="admin_dashboard.html">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin.manage-cars')}}">
                    Manage Cars
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="booking_management.html">
                    Manage Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="user_management.html">
                    Manage Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="settings.html">
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin.logout')}}">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>