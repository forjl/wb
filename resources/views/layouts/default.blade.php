<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title','WB APP') - 我的第一个laravel项目</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	</head>

	<body>

    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>

	</body>
</html>
