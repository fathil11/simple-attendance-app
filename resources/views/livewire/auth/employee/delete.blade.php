<x-jet-dialog-modal wire:model="showDeleteEmployeeModal">
    <x-slot name="title">
        {{ __('Hapus Karyawan!') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Apakah anda yakin untuk menghapus karyawan ini?') }}

        <div class="mt-4">
            <table>
                <tr>
                    <td>Nomor Induk</td>
                    <td class="p-1">:</td>
                    <td class="font-bold">{{ $selectedEmployee?->code  }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td class="p-1">:</td>
                    <td class="font-bold">{{ $selectedEmployee?->name  }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="p-1">:</td>
                    <td class="font-bold">{{ $selectedEmployee?->address  }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td class="p-1">:</td>
                    <td class="font-bold">{{ $selectedEmployee?->birth_date->isoFormat('DD MMMM Y')  }}</td>
                </tr>
                <tr>
                    <td>Tanggal Bergabung</td>
                    <td class="p-1">:</td>
                    <td class="font-bold">{{ $selectedEmployee?->join_date->isoFormat('DD MMMM Y')  }}</td>
                </tr>
            </table>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('showDeleteEmployeeModal', false)" wire:loading.attr="disabled">
            {{ __('Batal') }}
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-3" wire:click="deleteEmployee({{ $selectedEmployee?->id }})" wire:loading.attr="disabled">
            {{ __('Hapus Karyawan') }}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>
