@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn btn-primary">Read More</a>
</div>