<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="content">
        	@if (Session::has('message'))
        		<div class="flash alert-info">
        			<p>{{ Session::get('message') }}</p>
        		</div>
        	@endif
         
        	@yield('content')
        </div>

    </body>
</html>