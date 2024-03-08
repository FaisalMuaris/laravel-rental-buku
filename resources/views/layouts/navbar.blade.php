<div class="body-content h-100">
    <div class="row g-0 h-100 ">
        <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarNavAltMarkup">

            @if (Auth::user()->role_id == 1)
                <a href="/dashboard" @if (Request::path() == 'dashboard') class="active" @endif>Dashboard</a>
                <a href="/books" @if (Request::path() == 'books') class="active" @endif>Books</a>
                <a href="/categories" @if (Request::path() == 'categories') class="active" @endif>Categories</a>
                <a href="/users" @if (Request::path() == 'users') class="active" @endif>Users</a>
                <a href="/rent-logs" @if (Request::path() == 'rent-logs') class="active" @endif>Rent Log</a>
                <a href="/logout">Logout</a>
            @else
                <a href="/profile" @if (Request::path() == 'profile') class="active" @endif>Profile</a>
                <a href="/logout">Logout</a>
            @endif
        </div>
        <div class="content col-lg-10 p-5">
            @yield('content')
        </div>
    </div>
</div>
