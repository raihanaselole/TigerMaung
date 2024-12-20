<x-layout>
    <x-slot name='page_content'>
        <table id="studentTable" class="table table-striped">
            <thead>
                <tr>
                    <th class="fixed-width">
                    </th>
                    <th class="h6 text-gray-300" style="text-align: center;">No</th>
                    <th class="h6 text-gray-300" style="text-align: center;">ID Progres</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Nama Progres</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Deskripsi</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Status</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Tenggat Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fixed-width">
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">1</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $progress->id }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $progress->task_name }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $progress->description }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $progress->status }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $progress->due_date }}</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </x-slot>
</x-layout>