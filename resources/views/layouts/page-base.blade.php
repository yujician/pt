@include('components.header')
<title>{{ $title }}</title>

@if ($script != '')
{{ $script }}
@endif

{{-- 福田印刷&emsp;ECサイト --}}

</head>
<body>

@include('components.navigation_guest')

@include('components.top-slider')

{{ $slot }}

@include('components.home.explain-note')

@include('components.home.brand-slider')

@include('components.footer')
