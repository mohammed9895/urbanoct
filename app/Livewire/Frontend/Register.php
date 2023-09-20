<?php

namespace App\Livewire\Frontend;

use App\Models\Attendee;
use Livewire\Component;

class Register extends Component
{
    public $fullname;
    public $country;
    public $organization;
    public $profession;
    public $contact_number;
    public $email;

    public function render()
    {
        return view('livewire.frontend.register');
    }

    public function register()
    {
        $validated = $this->validate([
            'fullname' => 'required|string',
            'country' => 'required|string',
            'organization' => 'required|string',
            'profession' => 'required|string',
            'contact_number' => 'required|integer',
            'email' => 'required|email',
        ], [
            'required' => __('home.validation.required'),
            'string' =>__('home.validation.string'),
            'integer' =>__('home.validation.integer'),
            'email' =>__('home.validation.email'),
        ]);

        Attendee::create($validated);

        session()->flash('success', __('home.validation.success'));
    }
}
