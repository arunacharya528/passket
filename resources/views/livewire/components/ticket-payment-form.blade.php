<div>
    <span class="font-semibold">We Accept</span>

    <div class="flex flex-row space-x-5">
        @foreach ($paymentOptions as $index => $option)
            <label
                class="flex flex-row items-center bg-base-100 p-1 rounded-md shadow-md {{ $index === $selectedIndex ? 'outline outline-success outline-4' : '' }}"
                wire:click="select({{ $index }})">
                <input type="radio" name="payment_gateway" value="{{ $option['value'] }}"
                    class="radio radio-success self-start">
                <img src="{{ asset($option['image']) }}" class="w-64" />
            </label>
        @endforeach
    </div>
    <div class="flex justify-between py-5">
        <div class="btn btn-ghost bg-base-300">Back</div>
        <div class="btn btn-primary">Next</div>
    </div>
</div>
