<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/home"
        class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none brandheader">Lombok<span
            style="color: grey">Nation</span></a>

    <div class="col-md-4 mt-3">
        <div class="form-group searchicon">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="search" class="form-control rounded-pill" placeholder="Search Your Option"
                aria-label="search" style="margin-bottom: 10px">
        </div>
    </div>

    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-warning me-2">Login</button>
        <button type="button" class="btn btn-warning">Sign-Up</button>
    </div>
</header>

<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 gap-5 navheader">
    <li><a href="/" class="nav-link {{ ($title == "Home") ? 'active' : '' }} px-2 text-dark">Home</a></li>
    <li><a href="/about" class="nav-link {{ ($title == "About") ? 'active' : '' }} px-2 text-dark">About</a></li>
    <li><a href="/rekomendasi" class="nav-link px-2 text-dark">Recommendation</a></li>
</ul>
