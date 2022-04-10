<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Dashboard LombokNation</h3>
    </div>

    <ul class="list-unstyled components">
        <p>{{auth()->user()->name}}</p>
        <li class="active">
            <a href="/dashboard">Home</a>
        </li>
        <li>
            <a href="/dashboard/post">Posts</a>
        </li>
        <li>
            <a href="#">User</a>
        </li>
        <li>
            <a href="#">Admin</a>
        </li>
    </ul>

</nav>