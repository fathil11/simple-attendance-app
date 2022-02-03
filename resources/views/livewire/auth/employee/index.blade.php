<div class="mx-auto w-100 sm:px-6 lg:px-8 py-10">
    <div class="px-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col mt-3">
            <div class="flex py-4 justify-between">
                <div>
                    <label for="table-search" class="sr-only">Cari</label>
                    <div class="relative mt-1">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" wire:model="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari karyawan">
                    </div>
                </div>

                <button wire:click="showEmployeeCreateModal()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                    Tambah Karyawan
                  </button>
            </div>
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th wire:click="sortBy('id')" scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        ID
                                        <x-sort-direction-icon sortField="id" :sortBy="$sortBy" :sortAsc="$sortAsc"/>
                                    </th>
                                    <th wire:click="sortBy('code')" scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Nomor Induk
                                        <x-sort-direction-icon sortField="code" :sortBy="$sortBy" :sortAsc="$sortAsc"/>
                                    </th>
                                    <th wire:click="sortBy('name')" scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Nama
                                        <x-sort-direction-icon sortField="name" :sortBy="$sortBy" :sortAsc="$sortAsc"/>
                                    </th>
                                    <th wire:click="sortBy('address')" scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Alamat
                                        <x-sort-direction-icon sortField="address" :sortBy="$sortBy" :sortAsc="$sortAsc"/>
                                    </th>
                                    <th wire:click="sortBy('birth_date')" scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Tanggal Lahir
                                        <x-sort-direction-icon sortField="birth_date" :sortBy="$sortBy" :sortAsc="$sortAsc"/>
                                    </th>
                                    <th wire:click="sortBy('join_date')" scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Tanggal Bergabung
                                        <x-sort-direction-icon sortField="join_date" :sortBy="$sortBy" :sortAsc="$sortAsc"/>
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @foreach ($employees as $employee)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $employee->id }}</td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $employee->code }}</td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $employee->name }}</td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $employee->address }}</td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $employee->birth_date->isoFormat('D MMMM Y') }}</td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $employee->join_date->isoFormat('D MMMM Y') }}</td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                        <button wire:click="showCreateAbsenceModal({{ $employee->id }})" class="text-green-400 font-thin hover:bg-green-400 hover:text-white p-1 rounded">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <button wire:click="showEmployeeEditModal({{ $employee->id }})" class="text-yellow-400 font-thin hover:bg-yellow-400 hover:text-white p-1 rounded">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                        </button>
                                        <button wire:click="showEmployeeDeleteModal({{ $employee->id }})" class="text-red-500 font-thin hover:bg-red-500 hover:text-white p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-6">
            {{ $employees->links() }}
        </div>

        <livewire:auth.employee.absence.create/>
        <livewire:auth.employee.create/>
        <livewire:auth.employee.edit/>
        <livewire:auth.employee.delete/>
    </div>
</div>
