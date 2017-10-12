<!DOCTYPE html>

<html lang="en">

<head>

@include('partials._head')

</head>

<body>

@include('partials._nav')
    
{{-- Container starts --}}
<div class="container">

@include('partials._messages')

@yield('content')

@include('partials._footer')

</div>
{{-- Container ends --}}

    @include('partials._js')

  </body>

</html>