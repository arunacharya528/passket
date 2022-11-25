<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class TabLayout extends Component
{
    public $selectedTab = 3;
    public $tabs = [
        [
            'title'=>"Purchase Ticket",
            'icon_path'=>"/assets/ticket-icon.png"
        ],
        [
            'title' => "RSVP",
            'icon_path' => "/assets/rsvp-icon.png"
        ],
        [
            'title' => "Guest",
            'icon_path' => "/assets/guest-icon.png"
        ]
    ];

    public function setTab($tabNo)
    {
        $this->selectedTab = $tabNo;
    }

    public function render()
    {
        return view('livewire.layouts.tab-layout');
    }
}
