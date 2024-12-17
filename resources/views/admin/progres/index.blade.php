<x-layout>
    <x-slot name='page_content'>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/progres/create') }}" class="btn btn-primary mb-15">+ Tambah progres</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>ID</th>
                <th>Nama Progres</th>
                <th>Status</th>
                <th>Tenggat Waktu</th>
                <th>Aksi</th>
            </tr>
            @foreach ($progress as $progres)
            <tr>
                <td>{{ $progres->id }}</td>
                <td>{{ $progres->task_name }}</td>
                <td> 
                    @if ($progres->status == 'not started')
                        <span class="text-13 py-2 px-8 bg-danger-50 text-danger-600 d-inline-flex align-items-center gap-8 rounded-pill">{{ $progres->status }}</span>
                    @elseif ($progres->status == 'in progress')
                        <span class="text-13 py-2 px-8 bg-warning-50 text-warning-600 d-inline-flex align-items-center gap-8 rounded-pill">{{ $progres->status }}</span>
                    @elseif ($progres->status == 'completed')
                        <span class="text-13 py-2 px-8 bg-success-50 text-success-600 d-inline-flex align-items-center gap-8 rounded-pill">{{ $progres->status }}</span>
                    @endif
                </td>
                <td>{{ $progres->due_date }}</td>
                <td>
                    <a href="{{ url('dashboard/progres/show', $progres->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/progres/edit', $progres->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/progres/destroy', $progres->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            @endforeach
        </table>
    </x-slot>
</x-layout>