<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label, $type, $name, $placeholder, $smalltext, $mask;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = null, $type = "text", $name, $placeholder = null, $smalltext = null, $mask = null)
    {
        //
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->smalltext = $smalltext;
        $this->mask = $mask;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return <<<'blade'
<div class="form-group">
    @if($label)<label>{{ $label }}</label>@endif
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" placeholder="{{ $placeholder }}" wire:model="{{ $name }}" @if($mask) data-mask="{{ $mask }}" data-mask-visible="true" @endif>
    @if($smalltext)<small class="form-text text-muted">{{ $smalltext }}</small>@endif
</div>
blade;
    }
}
