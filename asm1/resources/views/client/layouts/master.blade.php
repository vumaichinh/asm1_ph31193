<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('client.layouts.partials.css')
</head>

<body>
    <section class="myHeader bg-light">
        @include('client.layouts.partials.header')
    </section>

    <section class="myNav">
        @include('client.layouts.partials.nav')
    </section>

    @yield('content')

    <section class="myFooter pt-4 ">
        @include('client.layouts.partials.footer')
    </section>

        
   @include('client.layouts.partials.js')
</body>

</html>
