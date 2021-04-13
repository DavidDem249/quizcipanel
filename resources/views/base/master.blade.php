<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <link rel="stylesheet" href="{{ asset('iziToast/dist/css/iziToast.min.css') }}">
    
    @yield('style')
</head>

<body>
    <div id="app">
        
        @include('layouts.sidebar')

        <div id="main">

            @include('layouts.nav')

            
            @yield('content')


            {{-- @include('layouts.footer') --}}

            @yield('footer')
        </div>
    </div>
    

    @include('layouts.script') 


    @yield('script')
</body>

</html>