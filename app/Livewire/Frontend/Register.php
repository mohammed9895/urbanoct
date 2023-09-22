<?php

namespace App\Livewire\Frontend;

use App\Mail\Registration;
use App\Models\Attendee;
use Illuminate\Support\Facades\Mail;
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
            'contact_number' => 'required|integer|unique:attendees',
            'email' => 'required|email|unique:attendees',
        ], [
            'required' => __('home.validation.required'),
            'string' => __('home.validation.string'),
            'integer' => __('home.validation.integer'),
            'email' => __('home.validation.email'),
            'unique' => __('home.validation.unique')
        ]);

        Attendee::create($validated);
        session()->flash('success', __('home.validation.success'));
        Mail::to($this->email)
            ->locale(app()->getLocale())
            ->queue(new Registration($this->fullname));
        $this->reset();
    }
}
