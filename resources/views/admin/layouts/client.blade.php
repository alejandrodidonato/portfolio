@include('admin.includes.header')

<div class="container-fluid">
    <div class="row">
        @include('admin.includes.nav-client')
        @yield('main-content')

    </div>

</div>
@include('admin.includes.footer')
