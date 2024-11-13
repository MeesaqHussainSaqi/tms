<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
    @include('layouts.header')
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-3">
                {{-- @include('layouts.sidebar') 
            </div> --}}
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

    @include('layouts.footer')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     --}}
</body>

</html>

<script>
    $(document).ready(function(){
        $('#sidebarToggle').on('click', function() {
            let sidebar = $('#sidebar');
            if (sidebar.width() === 250) {
                sidebar.width(70); // Collapse the sidebar
                $('.sidebar-content').hide(); // Hide the content
                $('#sidebarToggle').html('➔'); // Change the button icon
            } else {
                sidebar.width(250); // Expand the sidebar
                $('.sidebar-content').fadeIn(); // Show the content
                $('#sidebarToggle').html('☰'); // Change the button icon
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#sidebarToggle').on('click', function() {
            let sidebar = $('#sidebar');
            let content = $('.container-fluid');
            if (sidebar.width() === 250) {
                sidebar.width(70); // Collapse the sidebar
                content.css('margin-left', '70px'); // Adjust content margin
                $('.sidebar-content').hide(); // Hide the content
                $('#sidebarToggle').html('➔'); // Change the button icon
            } else {
                sidebar.width(250); // Expand the sidebar
                content.css('margin-left', '250px'); // Adjust content margin
                $('.sidebar-content').fadeIn(); // Show the content
                $('#sidebarToggle').html('☰'); // Change the button icon
            }
        });
    });
</script>