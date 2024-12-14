<x-layout>
    <x-slot name="page_content">
        <form action="{{ route('reminders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Reminder Date</label>
                <input type="datetime-local" name="reminder_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </x-slot>
</x-layout>
