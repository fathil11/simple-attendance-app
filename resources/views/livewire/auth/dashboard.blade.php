<div class="flex mx-auto py-10 w-100 sm:px-6 lg:px-8 justify-between">
    <div
        class="flex-1 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $statistics['employees_count'] }}</h5>
        <p class="mb-3 text-lg font-normal text-gray-700 dark:text-gray-400">Total Karyawan</p>
    </div>

    <div
        class="ml-3 flex-1 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $statistics['employees_with_absence_count'] }}</h5>
        <p class="mb-3 text-lg font-normal text-gray-700 dark:text-gray-400">Jumlah Karyawan Pernah Cuti</p>
    </div>

    <div
        class="ml-3 flex-1 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $statistics['employees_without_absence_count'] }}</h5>
        <p class="mb-3 text-lg font-normal text-gray-700 dark:text-gray-400">Jumlah Karyawan Belum Pernah Cuti</p>
    </div>

    <div
        class="ml-3 flex-1 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $statistics['employees_with_absence_today_count'] }}</h5>
        <p class="mb-3 text-lg font-normal text-gray-700 dark:text-gray-400">Jumlah Karyawan Cuti Hari Ini</p>
    </div>
</div>

<div class="mx-auto w-100 sm:px-6 lg:px-8">
    <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <h2 class="text-lg text-gray-500 dark:text-gray-300">Karyawan Pertama</h2>
        <div class="flex flex-col mt-3">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Nomor Induk
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Alamat
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Tanggal Bergabung
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
                                        {{ $employee->join_date->isoFormat('D MMMM Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
