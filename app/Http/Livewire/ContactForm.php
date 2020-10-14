<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
	public $post;
	public $first_name, $last_name, $phone_number_1;

	public function mount()
	{
		
	}
    public function render()
    {
        return view('livewire.contact-form');
    }
}
