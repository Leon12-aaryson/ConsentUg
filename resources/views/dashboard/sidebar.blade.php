<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i> <!-- Change this icon -->
        <span class="logo_name">{{ config('app.name') }}</span>
    </div>
    <div class="sidebar-menu">
        <ul class="nav-links">
            @php
                $routes = [
                    ['dashboard', 'bxs-dashboard', 'Dashboard'],
                    ['dashboard/blogs', 'bx-edit', 'Blog Management'],
                    ['users', 'bx-user', 'Users'],
                ];
            @endphp
            @foreach ($routes as $route)
                <li>
                    <a href="{{ $route[0] }}" class="{{ request()->is(trim($route[0], '/')) ? 'active' : '' }}">
                        <i class='bx {{ $route[1] }}'></i>
                        <span class="link_name">{{ $route[2] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <ul class="profile">
            <li>
                <a href="settings" class="{{ request()->is('settings') ? 'active' : '' }}">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Settings</span>
                </a>
            </li>
            <li>
                <a href="logout" class="{{ request()->is('logout') ? 'active' : '' }}">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
</div>
