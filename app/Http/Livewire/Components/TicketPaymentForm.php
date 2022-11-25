<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class TicketPaymentForm extends Component
{
    public $paymentOptions = [
        [
            'value' => "khalti",
            "image" => "assets/khalti.png"
        ],
        [
            'value' => "imepay",
            "image" => "assets/imppay.png"
        ]
    ];
    public $selectedIndex = null;

    public function select($index)
    {
        $this->selectedIndex = $index;
    }

    public function render()
    {
        return view('livewire.components.ticket-payment-form');
    }
}
