<html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.navbar')

    @include('layouts.content_visi')

    @include('layouts.content_map')

    @include('layouts.content_berita')

    @include('layouts.content_gallery')

    @include('layouts.content_yt')

    @include('layouts.footer')

    <script src="{{ asset('js/gallery.js') }}"></script>
</body>
</html>