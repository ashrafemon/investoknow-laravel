<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-columns"></i>
                    </div>
                    Package
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.package.index')}}">All Package</a>
                        <a class="nav-link"
                            href="{{route('admin.package.create')}}">Create New Package</a>
                    </nav>
                </div>
                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    Faq
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">All Questions</a>
                        <a class="nav-link"
                            href="">Create New Question</a>
                    </nav>
                </div> -->

                <a class="nav-link" href="{{route('admin.user.index')}}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    User Management
                </a>

                <a class="nav-link" href="{{route('admin.order.index')}}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    Order Management
                </a>

                <div class="sb-sidenav-menu-heading">Addons</div>
                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery"
                    aria-expanded="false" aria-controls="collapseGallery">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    Gallery
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseGallery" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">All Images</a>
                        <a class="nav-link"
                            href="">Add New Image</a>
                    </nav>
                </div> -->

                
            </div>
        </div>
    </nav>
</div>
