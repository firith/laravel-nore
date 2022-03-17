<div {{ $attributes->class("grid grid-cols-3 gap-4") }}>
  <div class="col-span-full lg:col-span-2 px-4 py-4 bg-white rounded-md shadow">
    {{ $slot }}
  </div>
</div>
