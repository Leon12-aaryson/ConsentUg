<header>
    <nav class="navbar navbar-expand-lg w-100">
        <div class="container-fluid">
            <div class="main">
                <label for="">
                    <i class='bx bx-menu'></i>
                </label>
                <!-- Logo and Title -->
                <a class="navbar-brand" href="#">
                    {{ ucfirst(request()->segment(1) ?: 'Dashboard') }}
                </a>
            </div>

            <!-- Toggle Button for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="sub-menu">
                <img src="{{ Auth::user()->profile_photo_url ?: asset('images/profile.png') }}"
                    alt="{{ Auth::user()->name }}" width="30" height="30" class="rounded-circle"
                    id="profileImage">
                <div class="sub-menu-dropdown" id="subMenu">
                    <div class="prof d-flex align-items-center gap-2">
                        <img src="{{ Auth::user()->profile_photo_url ?: asset('images/profile.png') }}"
                            alt="{{ Auth::user()->name }}" width="30" height="30" class="rounded-circle">
                        <h3 class="mb-0">{{ \Illuminate\Support\Str::ucfirst(Auth::user()->name) }}</h3>
                    </div>
                    <hr>
                    <a href="" class="sub-menu-link">
                        <p><span><i class='bx bx-user-circle'></i>
                            </span>Profile</p>
                        <i class='bx bx-chevron-right'></i>
                    </a>
                    <a href="{{ route('settings') }}" class="sub-menu-link">
                        <p><span><i class='bx bx-cog'></i>
                            </span> Settings</p>
                        <i class='bx bx-chevron-right'></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="sub-menu-link">
                        @csrf
                        <button type="submit"
                            style="background: none; border: none; padding: 0; color: grey; display: flex; align-items: center;">
                            <p><span><i class='bx bx-log-out'></i></span> Logout</p>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </nav>
</header>

<style>
    .navbar .sub-menu {
        position: relative;
    }

    .sub-menu ul {
        padding-left: unset;
    }

    .prof h3 {
        font-size: 1rem;
    }

    .sub-menu-dropdown.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .sub-menu-dropdown {
        position: absolute;
        margin-top: 2rem;
        padding: 0.5rem;
        z-index: 1035;
        top: 100%;
        right: 8%;
        background: #ffffff;
        align-content: left;
        border-radius: .3rem;
        color: grey;
        width: 20vw;
        display: none;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .sub-menu-dropdown hr {
        margin: 10px 0 10px;
        width: 100%;
        border: 0;
        height: 1px;
        background: #ccc;
    }

    .sub-menu-link {
        text-decoration: none;
        display: flex;
        align-items: center;
        margin: 8px 0;
        color: grey;
        transition: transform .3s;
    }

    .sub-menu-link:hover p {
        font-weight: 600;
        color: green;
        transition: .3s all ease;
    }

    .sub-menu-link:hover i {
        transform: translateX(0.5px);
    }

    .sub-menu-link p {
        width: 100%;
        margin: unset;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .sub-menu-link a {
        margin: unset;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const profileImage = document.getElementById('profileImage');
        const subMenu = document.getElementById('subMenu');

        profileImage.addEventListener('click', function(event) {
            event.stopPropagation();
            subMenu.classList.toggle('show');
        });

        // Close the dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.sub-menu')) {
                subMenu.classList.remove('show');
            }
        });
    });
</script>
