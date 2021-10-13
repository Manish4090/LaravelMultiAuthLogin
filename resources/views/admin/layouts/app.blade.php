<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
		<!-- Fonts -->
       
		<link rel="stylesheet" href="{{ asset('css/backend/tailwind-dark.css') }}">
		<link rel="stylesheet" href="{{ asset('css/backend/jquery-ui.css') }}">
		<link rel="stylesheet" href="{{ asset('css/backend/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/backend/jquery.dataTables.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/backend/custom_style.css') }}">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		<script src="{{ asset('js/backend/admin_custom.js') }}" defer></script>

        <!-- Styles -->
        <!---link rel="stylesheet" href="{{ asset('css/app.css') }}"--->
	
		

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('admin.layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ @$header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
			<div class="container">
                {{ @$slot }}
				</div>
            </main>
        </div>
    </body>
</html>
