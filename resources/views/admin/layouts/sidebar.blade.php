   <!-- Sidebar -->
<div class="sidebar">
    <h3 class="text-center py-4">Admin Panel</h3>

    <a href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
    </a>

    <a href="{{ route('admin.manage-cars') }}"
       class="{{ request()->routeIs('admin.manage-cars') ? 'active' : '' }}">
        <i class="fas fa-car me-2"></i> Manage Cars
    </a>

    <a href="{{ route('admin.manage-bookings') }}"
       class="{{ request()->routeIs('admin.manage-bookings') ? 'active' : '' }}">
        <i class="fas fa-book me-2"></i> Manage Bookings
    </a>

    <a href="#"
       class="{{ request()->routeIs('admin.manage-users') ? 'active' : '' }}">
        <i class="fas fa-users me-2"></i> Manage Users
    </a>

    <a href="#"
       class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
        <i class="fas fa-cogs me-2"></i> Settings
    </a>

    <a href="{{ route('admin.logout') }}">
        <i class="fas fa-sign-out-alt me-2"></i> Logout
    </a>
</div>
