@props(['active'])

@php
    if (! empty($attributes['slides'])) {
        $slides = $attributes['slides'];
    } else {
        $slides = null;
    }
@endphp

<div data-swiper="{{ $slides }}" x-data="{ active: window.location.hash.split('#')[1] == undefined ? '{{ $active }}' : window.location.hash.split('#')[1] }">
    <div data-tabs-swiper>
        <ul data-tabs-swiper-wrapper {{ ((! $attributes->has('override')) || ($attributes->has('override') && ! in_array('class', explode(',', $attributes->get('override'))))) ? $attributes->merge(['class' => 'inline-flex']) : $attributes }}>
            {!! $navs !!}
        </ul>
    </div>

    {!! $content !!}
</div>
