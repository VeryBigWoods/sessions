<div class="mx-auto w-1/2">
    <form wire:submit.prevent="saveTodo">
        <div class="mt-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autocomplete="off" wire:model.defer="name" />
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="due" value="{{ __('Due') }}" />
            <x-datetime-picker wire:model="due" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Save') }}
            </x-jet-button>
        </div>
    </form>
</div>
