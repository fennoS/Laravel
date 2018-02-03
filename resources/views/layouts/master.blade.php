<!DOCTYPE html>
<html>
@include('layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include ('layouts.header')
    @include ('layouts.nav')
    <div class="content-wrapper">
        <section class="content-header">
            {{-- error message --}}
        </section>
        @yield ('content')
    </div>
    @include ('layouts.footer')
</div>
</body>
</html>
