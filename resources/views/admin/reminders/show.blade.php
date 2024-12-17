<x-layout>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id reminder</th>
                <th>Nama reminder</th>
                <th>Deskripsi</th>
                <th>Reminder date</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $reminders->id }}</td>
                <td> {{ $reminders->title }}</td>
                <td>{{ $reminders->description }}</td>
                <td>{{ $reminders->reminder_date }}</td>
            </tr>

        </table>
    </x-slot>
</x-layout>