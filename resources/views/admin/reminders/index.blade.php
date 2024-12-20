<x-layout>
    <x-slot name="page_content">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/reminders/create') }}" class="btn btn-primary mb-15">+ Tambah Reminder</a>
        <table id="studentTable" class="table table-striped">
            <thead>
                <tr>
                    <th class="fixed-width">
                    </th>
                    <th class="h6 text-gray-300" style="text-align: center;">Nama Reminder</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Reminder Date</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reminders as $reminder)
                <tr>
                    <td class="fixed-width">
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $reminder->title }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $reminder->reminder_date }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <a href="{{ url('dashboard/reminders/show', $reminder->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/reminders/edit', $reminder->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form action="{{ url('dashboard/reminders/destroy', $reminder->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>
