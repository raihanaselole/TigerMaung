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
        <table id="studentTable" class="table table-striped">
            <thead>
                <tr>
                    <th class="fixed-width">
                    </th>
                    <th class="h6 text-gray-300" style="text-align: center;">Nama Progres</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Status</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Tenggat Waktu</th>
                    <th class="h6 text-gray-300" style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($progress as $progres)
                <tr>
                    <td class="fixed-width">
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $progres->task_name }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        @if ($progres->status == 'not started')
                        <span class="text-13 py-2 px-8 bg-danger-50 text-danger-600 d-inline-flex align-items-center gap-8 rounded-pill">{{ $progres->status }}</span>
                    @elseif ($progres->status == 'in progress')
                        <span class="text-13 py-2 px-8 bg-warning-50 text-warning-600 d-inline-flex align-items-center gap-8 rounded-pill">{{ $progres->status }}</span>
                    @elseif ($progres->status == 'completed')
                        <span class="text-13 py-2 px-8 bg-success-50 text-success-600 d-inline-flex align-items-center gap-8 rounded-pill">{{ $progres->status }}</span>
                    @endif
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $progres->due_date }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>