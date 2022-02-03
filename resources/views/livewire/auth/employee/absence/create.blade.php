<x-jet-dialog-modal wire:model="showCreateAbsenceModal">
    <x-slot name="title">
        {{ __('Tambah Cuti Karyawan') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Silahkan isi data cuti karyawan.') }}

        <table class="mt-4">
            <tr>
                <td>Nomor Induk</td>
                <td class="p-1">:</td>
                <td class="font-bold">{{ $employee?->code  }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td class="p-1">:</td>
                <td class="font-bold">{{ $employee?->name  }}</td>
            </tr>
        </table>

        <div class="mt-8">
            <!-- Absence Date -->
            <div class="mt-4 col-span-6 sm:col-span-4">
                <x-jet-label for="absence_date" value="{{ __('Tanggal Cuti') }}" />
                <x-jet-input id="absence_date" type="date" class="mt-1 block w-full" wire:model.defer="absence.absence_date"/>
                <x-jet-input-error for="absence.absence_date" class="mt-2" />
            </div>

            <!-- Duration -->
            <div class="mt-4 col-span-6 sm:col-span-4">
                <x-jet-label for="duration" value="{{ __('Lama Cuti (hari)') }}" />
                <x-jet-input id="duration" type="text" class="mt-1 block w-full" wire:model.defer="absence.duration"/>
                <x-jet-input-error for="absence.duration" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4 col-span-6 sm:col-span-4">
                <x-jet-label for="description" value="{{ __('Keterangan') }}" />
                <x-jet-input id="description" type="text" class="mt-1 block w-full" wire:model.defer="absence.description"/>
                <x-jet-input-error for="absence.description" class="mt-2" />
            </div>


        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('showCreateAbsenceModal', false)" wire:loading.attr="disabled">
            {{ __('Batal') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-3" wire:click="storeAbsence()" wire:loading.attr="disabled">
            {{ __('Tambah Cuti') }}
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
