<?php

namespace App\Livewire\Frontend;

use App\Mail\Registration;
use App\Models\Activity;
use App\Models\ActivityAttendee;
use App\Models\Attendee;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class RegsiterModel extends ModalComponent
{
    public Activity $activity;
    public $fullname;
    public $country;
    public $organization;
    public $field;
    public $contact_number;
    public $email;


    public function render()
    {
        return view('livewire.frontend.regsiter-model');
    }

    public function register()
    {
        $validated = $this->validate([
            'fullname' => 'required|string',
            'organization' => 'required|string',
            'field' => 'required|string',
            'contact_number' => 'required|integer|unique:activity_attendees',
            'email' => 'required|email|unique:activity_attendees',
        ], [
            'required' => __('home.validation.required'),
            'string' => __('home.validation.string'),
            'integer' => __('home.validation.integer'),
            'email' => __('home.validation.email'),
            'unique' => __('home.validation.unique')
        ]);

        $data = array_merge($validated, ['activity_id' => $this->activity->id]);

        ActivityAttendee::create($data);
        session()->flash('success', __('home.validation.success'));
        Mail::to($this->email)
            ->locale(app()->getLocale())
            ->queue(new Registration($this->fullname));
        $this->reset();
    }
}
