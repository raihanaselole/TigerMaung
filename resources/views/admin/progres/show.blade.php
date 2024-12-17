<x-layout>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id progres</th>
                <th>Nama Progres</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Tenggat Waktu</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $progress->id }}</td>
                <td> {{ $progress->task_name }}</td>
                <td>{{ $progress->description }}</td>
                <td>{{ $progress->status }}</td>
                <td>{{ $progress->due_date }}</td>
            </tr>

        </table>
    </x-slot>
</x-layout>