@include('template.head')
<body>
    <div id="app">
        @include('template.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

           @yield('content')

            @include('template.footer')
        </div>
    </div>
    <script src="{{ url('/')}}/assets/js/app.js"></script>

<script src="{{ url('/')}}/assets/js/pages/dashboard.js"></script>

</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:33:33 GMT -->
</html>
