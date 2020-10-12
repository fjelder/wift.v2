<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchPeople extends Component
{
	public $search = '';
    public function render()
    {
        return view('livewire.search-people', [
            'people' => \App\Models\People::where('first_name', 'like',  $this->search.'%')->get(),
        ]);
    }
}
