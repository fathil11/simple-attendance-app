<x-jet-dialog-modal wire:model="showEditEmployeeModal">
    <x-slot name="title">
        {{ __('Edit Karyawan') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Silahkan ganti isi dari data karyawan berikut.') }}

        <div class="mt-4">
            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="{{ __('Nama') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('showEditEmployeeModal', false)" wire:loading.attr="disabled">
            {{ __('Batal') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-3" wire:click="updateEmployee({{ $selectedEmployee?->id }})" wire:loading.attr="disabled">
            {{ __('Edit Karyawan') }}
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
