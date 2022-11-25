@php
    $oldRsvpData = [
        [
            'fullName' => 'Some name',
            'phoneNumber' => 'Some phone number',
            'email' => 'some@email.com',
            'company' => 'some company',
            'designation' => 'Some designation',
            'rsvp' => 'Some rsvp',
        ],

        [
            'fullName' => 'Some name',
            'phoneNumber' => 'Some phone number',
            'email' => 'some@email.com',
            'company' => 'some company',
            'designation' => 'Some designation',
            'rsvp' => 'Some rsvp',
        ],
        [
            'fullName' => 'Some name',
            'phoneNumber' => 'Some phone number',
            'email' => 'some@email.com',
            'company' => 'some company',
            'designation' => 'Some designation',
            'rsvp' => 'Some rsvp',
        ],
    ];
@endphp

<div>
    <div class="flex flex-row bg-base-300">
        @foreach ($tabs as $index => $tab)
            <div class="flex flex-col rounded-none p-5 text-center items-center cursor-pointer w-44 {{ $selectedTab === $index ? '!bg-base-200' : '' }}"
                wire:click="setTab({{ $index }})">
                <img src="{{ asset($tab['icon_path']) }}" class="w-16 h-16" />
                <div class="font-semibold">{{ $tab['title'] }}</div>
            </div>
        @endforeach
    </div>

    <div class="absolute top-0">
        <div class="flex flex-row">
            <div class="btn btn-sm rounded-none" wire:click="setTab(0)">Ticket Form</div>
            <div class="btn btn-sm rounded-none" wire:click="setTab(1)">RSVP Form</div>
            <div class="btn btn-sm rounded-none" wire:click="setTab(2)">Guest</div>
            <div class="btn btn-sm rounded-none" wire:click="setTab(3)">Ticket Payment form</div>
            <div class="btn btn-sm rounded-none" wire:click="setTab(4)">Ticket form after rsvp code</div>
            <div class="btn btn-sm rounded-none" wire:click="setTab(5)">Ticket form after guest voucher</div>
        </div>
    </div>

    <div class="bg-base-200 px-5 md:px-20 py-5">
        @switch($selectedTab)
            @case(0)
                <livewire:components.ticket-form />
            @break

            @case(1)
                <livewire:components.rsvp-code-form />
            @break

            @case(2)
                <livewire:components.rsvp-code-form />
            @break

            @case(3)
                <livewire:components.ticket-payment-form />
            @break

            @case(4)
                <livewire:components.ticket-form :allFormData="$oldRsvpData" :count="count($oldRsvpData)" :disableCompanyField="true" />
            @break

            @case(5)
                <livewire:components.ticket-form />
            @break
        @endswitch
    </div>


</div>
