<nav id="sidebar">
    <div class="sidebar-header">
        <h3>LombokNation</h3>
    </div>
 
    <ul class="nav flex-column">
        <p style="font-size: 14px">Welcome, admin {{auth()->user()->name}}</p>
        <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" style="color: aliceblue" href="/dashboard"> <span><i class="fa-solid fa-house-chimney"></i></span> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }}" style="color: aliceblue" href="/dashboard/posts"> <span><i class="fa-solid fa-newspaper"></i></span> Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/users') ? 'active' : '' }}" style="color: aliceblue" href="/dashboard/users"> <span><i class="fa-solid fa-users"></i></span> User</a>
        </li>
    </ul>
</nav>