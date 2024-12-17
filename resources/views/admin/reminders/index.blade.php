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
        <table class="table table-bordered">
            <tr class="table-success">
                <th>ID</th>
                <th>Title</th>
                <th>Reminder Date</th>
                <th>Aksi</th>
            </tr>
            @foreach ($reminders as $reminder)
            <tr>
                <td>{{ $reminder->id }}</td>
                <td>{{ $reminder->title }}</td>
                <td>{{ $reminder->reminder_date }}</td>
                <td>
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
        </table>
    </x-slot>
</x-layout>
