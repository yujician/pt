@include('components.header')
<title>{{ $title }}</title>

</head>
<body>

@include('components.navigation_guest')

		{{-- @include('layouts.navigation') --}}
		
		{{-- <section>
        	{{ $header }}
		</section> --}}
		<section>
			<div class="container">
				<div class="col-sm-12 row py-2">
					<div class="form-group">
						<label for="u_company_name">{{ $title }}</label>
					</div>
				</div>
			</div>
		</section>
		
    <section>
			<div class="container">
				<div class="col-sm-12 row py-2">
					<div class="form-group">
    				{{ $slot }}
					</div>
				</div>
			</div>
    </section>

@include('components.footer')

