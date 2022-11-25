@php
    $rsvpOptions = [
        [
            'id' => 1,
            'name' => 'will come',
        ],
        [
            'id' => 2,
            'name' => 'will not come',
        ],
        [
            'id' => 3,
            'name' => 'might come',
        ],
        [
            'id' => 4,
            'name' => 'might not come',
        ],
    ];
@endphp

<div class="">
    <div class="flex justify-center py-5">
        <div class="form-control">
            <div class="input-group flex items-center">
                <button class="btn btn-sm btn-square btn-primary" wire:click="decrement">
                    -
                </button>
                <div class="p-5">
                    {{ $count }}
                </div>
                <button class="btn btn-sm btn-square btn-primary" wire:click="increment">
                    +
                </button>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="save" class="py-10">
        <div class="divide-y-4 divide-slate-400">
            @foreach (array_slice($allFormData, count($allFormData) - $count) as $index => $item)
                <div class="py-5">
                    <div class="font-bold text-2xl">
                        #{{ $loop->index + 1 }}
                    </div>

                    <div class="grid md:grid-cols-2 gap-5 py-5" wire:submit.prevent="save">
                        <div class="form-control w-full">
                            <label class="label font-semibold">
                                Full Name
                            </label>
                            <input type="text" placeholder="Enter your full name"
                                class="input w-full @error("allFormData.$loop->index.fullName") input-error @enderror"
                                name="fullName" wire:model="allFormData.{{ $index }}.fullName" />
                            @error("allFormData.$loop->index.fullName")
                                <label class="label text-error font-semibold text-sm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>

                        <div class="form-control w-full">
                            <label class="label font-semibold">
                                Phone Number
                            </label>
                            <input type="text" placeholder="Enter your phone number"
                                class="input w-full @error("allFormData.$index.phoneNumber") input-error @enderror"
                                name="phoneNumber" wire:model="allFormData.{{ $index }}.phoneNumber" />
                            @error("allFormData.$index.phoneNumber")
                                <label class="label text-error font-semibold text-sm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>


                        <div class="form-control w-full">
                            <label class="label font-semibold">
                                Email
                            </label>
                            <input type="text" placeholder="Enter your email"
                                class="input w-full  @error("allFormData.$index.email") input-error @enderror"
                                name="email" wire:model="allFormData.{{ $loop->index }}.email" />
                            @error("allFormData.$index.email")
                                <label class="label text-error font-semibold text-sm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>

                        <div class="form-control w-full">
                            <label class="label font-semibold">
                                Company
                            </label>
                            <input type="text" placeholder="Enter your company"
                                class="input w-full @error("allFormData.$index.company") input-error @enderror"
                                {{ $disableCompanyField ? 'disabled' : '' }} name="company"
                                wire:model="allFormData.{{ $loop->index }}.company" />
                            @error("allFormData.$index.company")
                                <label class="label text-error font-semibold text-sm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>


                        <div class="form-control w-full">
                            <label class="label font-semibold">
                                Designation
                            </label>
                            <input type="text" placeholder="Enter your designation"
                                class="input w-full @error("allFormData.$index.designation") input-error @enderror"
                                name="designation" wire:model="allFormData.{{ $loop->index }}.designation" />
                            @error("allFormData.$index.designation")
                                <label class="label text-error font-semibold text-sm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>


                        <div class="form-control w-full">
                            <label class="label font-semibold">
                                RSVP
                            </label>
                            <select
                                class="select select-primary @error("allFormData.$index.rsvp") select-error @enderror"
                                wire:model="allFormData.{{ $loop->index }}.rsvp">
                                <option selected hidden>Select RSVP option</option>
                                @foreach ($rsvpOptions as $option)
                                    <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                                @endforeach
                            </select>
                            @error("allFormData.$index.rsvp")
                                <label class="label text-error font-semibold text-sm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-between items-center space-x-5">
            <button class="btn btn-ghost bg-base-300" wire:click="increment" type="button">
                Add more
            </button>
            <div class="text-right {{ $errors->any() ? 'text-error' : '' }} grow font-semibold">
                {{ $errors->any() ? 'Invalid data found. Please recheck and submit' : '' }}
            </div>
            <button class="btn {{ $errors->any() ? 'btn-error' : 'btn-primary' }}">
                Next
            </button>
        </div>
    </form>

</div>
