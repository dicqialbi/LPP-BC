@include('pegawai.head')


<body>
    <div id="app">
        @include('admin.sidebar')
        <header class="m-0 p-0">
        </header>
        <div id="main">

            @yield('content')

            @include('pegawai.footer')
        </div>
    </div>
    <script src="{{ url('/')}}/assets/js/app.js"></script>
    <script src="{{ url('/')}}/assets/js/extensions/simple-datatables.js"></script>
    <script src="{{ url('/')}}/assets/js/pages/dashboard.js"></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
    </script>

</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:33:33 GMT -->

</html>