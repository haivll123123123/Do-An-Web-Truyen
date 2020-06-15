<!DOCTYPE HTML>
<html>
<head>
    @include('blocks.head')
</head>
<body>
<div id="layout">
    <div id="top">
        @include('blocks.top')
    </div>
	<div id="menu">
        @include('blocks.menu')
	</div>
    <div id="main">
        @yield('content')
	</div>
    <div id="bottom">
        @include('blocks.bottom')
    </div>
</div>
</body>
</html>