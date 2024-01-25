<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary pt-4 navbar-dark">
        <div class="container position-relative">
            <div class="navbar-collapse collapse me-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <img src="/assets/img/light.svg" alt="Volt logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center ms-auto">
                <a href="{{route('admin.dashboard')}}" class="btn btn-outline-white d-inline-flex align-items-center me-md-3">
                    Admin
                </a>
            </div>
        </div>
    </nav>
</header>
