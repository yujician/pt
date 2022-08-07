@include('components.header')
<title>{{ $title }}</title>
{{-- 
@if ($script != '')
{{ $script }}
@endif --}}

</head>
<body>

@include('components.header-navibar')

</header>

<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

@include('components.footer')
