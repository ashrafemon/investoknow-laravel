@include('admin.partials.header')
@include('admin.partials.navbar')
        
        <div id="layoutSidenav">
            @include('admin.partials.sidenav')
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>

                @include('admin.partials.copyright')
            </div>
        </div>

@include('admin.partials.footer')