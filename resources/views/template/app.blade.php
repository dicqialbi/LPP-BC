@include('template.head')

<body>
    <div id="app">
        @include('template.sidebar')
        <header class="m-0 p-0">
            {{-- <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="bg-dark p-4">
                    <h4 class="text-white">Collapsed content</h4>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                  </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </nav>
            </div> --}}
        </header>
        <div id="main">

            @yield('content')

            @include('template.footer')
        </div>
    </div>
    <script src="{{ url('/')}}/assets/js/app.js"></script>

    <script src="{{ url('/')}}/assets/js/pages/dashboard.js"></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
    </script>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:33:33 GMT -->

</html>