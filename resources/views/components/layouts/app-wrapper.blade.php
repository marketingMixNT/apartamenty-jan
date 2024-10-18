<x-preloader :home="$home"/>
<x-nav.navbar :home="$home"/>



{{ $slot }}

{{-- <x-map :home="$home"/> --}}
{!! $home->map !!}

<x-footer :home="$home"/>
<x-mobile-buttons :home="$home"/>


<!-- Profitroom -->
<script src="{{$home->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}"
    async></script>