@props(['href', 'color'])

@php
  $color = [
      'primary' => 'bg-primary-600 border border-transparent text-white hover:bg-primary-700 active:bg-primary-900 focus:border-primary-900',
      'secondary' => 'border-2 border-primary-400 text-primary-600 hover:bg-primary-100 hover:text-primary-700 active:bg-primary-200',
      'tertiary' => 'text-primary-600 border border-transparent hover:bg-primary-100 hover:text-primary-900 active:bg-primary-200',
  ][$color ?? 'primary'];
@endphp

@if(isset($href))
  <a
    {{ $attributes
        ->class([$color ,'inline-flex items-center justify-center px-4 py-2 rounded-md font-bold text-sm focus:outline-none  focus-visible:ring ring-primary-400 disabled:opacity-25 transition ease-in-out duration-150'])
        ->merge(['href' => $href])
     }}
  >
    {{ $slot }}
  </a>
@else
  <button
    {{ $attributes
        ->class([$color, 'inline-flex items-center justify-center px-4 py-2 rounded-md font-bold text-sm focus:outline-none  focus-visible:ring ring-primary-400 disabled:opacity-25 transition ease-in-out duration-150'])
        ->merge(['type' => 'submit'])
     }}
  >
    {{ $slot }}
  </button>
@endif

