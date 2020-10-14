@props(['submit', 'type'])


<div class="{{$type}}">
  <div class="card-header">
    <x-jet-section-title>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">{{ $description }}</x-slot>
        </x-jet-section-title>
  </div>
  <div class="card-body">
    <form wire:submit.prevent="{{ $submit }}">
    {{ $form }}
    @if (isset($actions))
        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
            {{ $actions }}
        </div>
    @endif
  </div>
</div>