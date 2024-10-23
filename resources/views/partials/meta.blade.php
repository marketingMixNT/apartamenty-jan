<!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MG2JMZ4H');
</script>
<!-- End Google Tag Manager -->

<!-- Event snippet for Potwierdzenie rezerwacji conversion page -->
<script>
    gtag('event', 'conversion', {
        'send_to': 'AW-829775353/D3VbCOLayuAZEPm71YsD',
        'value': 1.0,
        'currency': 'PLN',
        'transaction_id': ''
    });
</script>

<script async src="https://app.cookieasy.pl/plugin/gtumi243j6qrr0j.js"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="author" content="Hotel Jan">

@if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://www.jan-krakow.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('assets/images/superior/superior-6.webp')}}">