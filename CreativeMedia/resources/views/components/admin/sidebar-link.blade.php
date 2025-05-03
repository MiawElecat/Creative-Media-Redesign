@props(['active' => false, 'href'])

@php
$baseClasses = 'flex items-center px-3 py-2 text-sm font-medium rounded-md group transition-all duration-150 ease-in-out';
$activeClasses = 'text-white bg-gradient-to-r from-orange-500 to-orange-600 dark:from-orange-600 dark:to-orange-700 shadow-sm'; // Gradasi oranye saat aktif
$inactiveClasses = 'text-gray-300 hover:bg-gray-700 dark:hover:bg-slate-700 hover:text-white';

$classes = $active ? $baseClasses . ' ' . $activeClasses : $baseClasses . ' ' . $inactiveClasses;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>