@props(['employer','width' => 90])

<img src="{{ asset($employer->logo) }}" alt="emp-logo" class="rounded-xl" width="{{ $width }}">
