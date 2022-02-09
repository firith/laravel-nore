@props(['href', 'color'])

@php
  $color = [
      'primary' => 'bg-gray-600 border border-transparent text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900',
      'secondary' => 'border-2 border-gray-500 text-gray-600 hover:bg-gray-100 hover:text-gray-700 active:bg-gray-200',
      'tertiary' => 'text-gray-600 border border-transparent hover:bg-gray-100 hover:text-gray-900 active:bg-gray-200',
  ][$color ?? 'primary'];
@endphp

@if(isset($href))
  <a
    {{ $attributes
        ->class([$color ,'inline-flex items-center justify-center px-4 py-2 rounded-md font-bold text-sm focus:outline-none  focus-visible:ring ring-gray-400 disabled:opacity-25 transition ease-in-out duration-150'])
        ->merge(['href' => $href])
     }}
  >
    {{ $slot }}
  </a>
@else
  <button
    {{ $attributes
        ->class([$color, 'inline-flex items-center justify-center px-4 py-2 rounded-md font-bold text-sm focus:outline-none  focus-visible:ring ring-
        -400 disabled:opacity-25 transition ease-in-out duration-150'])
        ->merge(['type' => 'submit'])
     }}
  >
    {{ $slot }}
  </button>
@endif

