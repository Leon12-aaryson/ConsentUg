<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">{{ config('app.name') }}</span>
    </div>
    <div class="sidebar-menu">
        <ul class="nav-links">
            @php
                $routes = [
                    [route('dashboard'), 'bxs-dashboard', 'Dashboard'],
                    [route('dashboard.blogs'), 'bx-edit', 'Blog Management'],
                    [route('dashboard.complaints.index'), 'bx-message-square-detail', 'Complaints'],
                    [route('users'), 'bx-user', 'Users'],
                    [route('dashboard.reports.index'), 'bx-file', 'Reports'],
                    [route('gallery.index'), 'bx-image', 'Gallery Management'],
                    [route('settings'), 'bx-cog', 'Settings'],
                    [route('logout'), 'bx-log-out', 'Log out'],
                ];
            @endphp
            @foreach ($routes as $route)
                <li data-tooltip="{{ $route[2] }}">
                    @if ($route[0] === route('logout'))
                        <form method="POST" action="{{ $route[0] }}" class="d-inline">
                            @csrf
                            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                               class="{{ request()->is('logout') ? 'active' : '' }}">
                                <i class='bx {{ $route[1] }}'></i>
                                <span class="link_name">{{ $route[2] }}</span>
                            </a>
                        </form>
                    @else
                        <a href="{{ $route[0] }}" class="{{ request()->url() == $route[0] ? 'active' : '' }}">
                            <i class='bx {{ $route[1] }}'></i>
                            <span class="link_name">{{ $route[2] }}</span>
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>