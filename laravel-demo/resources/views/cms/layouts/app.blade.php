<html>
@section('title', 'Task manager')
@include('cms.layouts.header', ['title' => 'Test'])
<body>
@section('sidebar')
    <h1>Menu 1</h1>
    <h1>Menu 2</h1>
    <h1>Menu 3</h1>
@show
<div class="container">
    @yield('content')
</div>
</body>
@include('cms.layouts.footer')
</html>
