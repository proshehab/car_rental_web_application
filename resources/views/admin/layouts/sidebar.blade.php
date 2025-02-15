   <!-- Sidebar -->
   <div class="sidebar">
    <h3 class="text-center py-4">Admin Panel</h3>
    <a href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt me-2 "></i> Dashboard</a
    >
    <a href="{{route('admin.manage-cars')}} "
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
    <a href="{{route('admin.logout')}}"
        ><i class="fas fa-sign-out-alt me-2"></i> Logout</a
    >
</div>