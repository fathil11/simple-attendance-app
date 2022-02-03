<x-jet-dialog-modal wire:model="showEditEmployeeModal">
    <x-slot name="title">
        {{ __('Tambah Karyawan') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Silahkan isi data karyawan baru.') }}

        <div class="mt-8">
            <!-- Name -->
            <div class="mt-4 col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="{{ __('Nama') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="employee.name"/>
                <x-jet-input-error for="employee.name" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="mt-4 col-span-6 sm:col-span-4">
                <x-jet-label for="address" value="{{ __('Alamat') }}" />
                <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="employee.address"/>
                <x-jet-input-error for="employee.address" class="mt-2" />
            </div>

            <!-- Birth Date -->
            <div class="mt-4 col-span-6 sm:col-span-4">
                <x-jet-label for="birth_date" value="{{ __('Tanggal Lahir') }}" />
                <x-jet-input id="birth_date" type="date" class="mt-1 block w-full" wire:model.defer="employee.birth_date"/>
                <x-jet-input-error for="employee.birth_date" class="mt-2" />
            </div>

            <!-- Join Date -->
            <div class="mt-4 col-span-6 sm:col-span-4">
                <x-jet-label for="join_date" value="{{ __('Tanggal Gabung') }}" />
                <x-jet-input id="join_date" type="date" class="mt-1 block w-full" wire:model.defer="employee.join_date"/>
                <x-jet-input-error for="employee.join_date" class="mt-2" />
            </div>

        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('showEditEmployeeModal', false)" wire:loading.attr="disabled">
            {{ __('Batal') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-3" wire:click="editEmployee()" wire:loading.attr="disabled">
            {{ __('Simpan Karyawan') }}
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
