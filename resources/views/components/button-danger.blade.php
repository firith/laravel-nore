@props(['href', 'color'])

@php
  $color = [
      'primary' => 'bg-danger-600 border border-transparent text-white hover:bg-danger-700 active:bg-danger-900 focus:border-danger-800',
      'secondary' => 'border-2 border-danger-400 text-danger-600 hover:bg-danger-100 hover:text-danger-700 active:bg-danger-200',
      'tertiary' => 'text-danger-600 border border-transparent hover:bg-danger-100 hover:text-danger-700 active:bg-danger-200',
  ][$color ?? 'primary'];
@endphp

@if(isset($href))
  <a
    {{ $attributes
        ->class([$color ,'inline-flex items-center justify-center px-4 py-2 rounded-md font-bold text-sm focus:outline-none  focus-visible:ring ring-danger-400 disabled:opacity-25 transition ease-in-out duration-150'])
        ->merge(['href' => $href])
     }}
  >
    {{ $slot }}
  </a>
@else
  <button
    {{ $attributes
        ->class([$color, 'inline-flex items-center justify-center px-4 py-2 rounded-md font-bold text-sm focus:outline-none  focus-visible:ring ring-danger-400 disabled:opacity-25 transition ease-in-out duration-150'])
        ->merge(['type' => 'submit'])
     }}
  >
    {{ $slot }}
  </button>
@endif

