<x-layout>
    <x-slot name="page_content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Detail Reminder</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label><strong>ID:</strong></label>
                    <p>{{ $reminder->id }}</p>
                </div>
                <div class="form-group">
                    <label><strong>Title:</strong></label>
                    <p>{{ $reminder->title }}</p>
                </div>
                <div class="form-group">
                    <label><strong>Description:</strong></label>
                    <p>{{ $reminder->description }}</p>
                </div>
                <div class="form-group">
                    <label><strong>Reminder Date:</strong></label>
                    <p>{{ $reminder->reminder_date }}</p>
                </div>
                <div class="form-group">
                    <label><strong>Created At:</strong></label>
                    <p>{{ $reminder->created_at }}</p>
                </div>
                <div class="form-group">
                    <label><strong>Updated At:</strong></label>
                    <p>{{ $reminder->updated_at }}</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('reminders.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('reminders.edit', $reminder->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('reminders.destroy', $reminder->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">Hapus</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>
