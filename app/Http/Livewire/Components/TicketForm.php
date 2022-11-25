<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class TicketForm extends Component
{
    public $allFormData = [];

    public $formData = [
        "fullName" => "",
        'phoneNumber' => '',
        'email' => "",
        'company' => "",
        'designation' => "",
        'rsvp' => ""
    ];

    public $count = 0;
    public $disableCompanyField = false;

    public function __construct()
    {
        $this->count++;
        array_push($this->allFormData, $this->formData);
    }


    public function increment()
    {
        $this->count++;

        if ($this->count > count($this->allFormData)) {
            array_push($this->allFormData, $this->formData);
        }
    }

    public function decrement()
    {
        if ($this->count > 1) {
            $this->count--;
        }
    }

    public function save()
    {
        foreach (array_slice($this->allFormData, count($this->allFormData) - $this->count) as $index => $value) {
            $this->validate([
                "allFormData.$index.fullName" => ['required'],
                "allFormData.$index.phoneNumber" => ['required'],
                "allFormData.$index.email" => ['required'],
                "allFormData.$index.company" => ['required'],
                "allFormData.$index.designation" => ['required'],
                "allFormData.$index.rsvp" => ['required', 'numeric'],
            ], [
                "allFormData.$index.fullName.required" => "Please enter your full name",
                "allFormData.$index.phoneNumber.required" => "Please enter your phone number",
                "allFormData.$index.email.required" => "Please enter your email",
                "allFormData.$index.company.required" => "Please enter your company",
                "allFormData.$index.designation.required" => "Please enter your designation",
                "allFormData.$index.rsvp.required" => "Please enter your RSVP status",
                "allFormData.$index.rsvp.numeric" => "Please enter your RSVP status",
            ]);
        }
    }
    public function render()
    {
        return view('livewire.components.ticket-form');
    }
}
