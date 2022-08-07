@include('components.header')

@if ($script != '')
{{ $script }}
@endif

{{-- 福田印刷&emsp;ECサイト --}}

</head>
<body>

@include('components.navigation_guest')

{{ $slot }}

@include('components.footer')
