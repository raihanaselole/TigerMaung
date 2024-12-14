<x-layout>
    <x-slot name="page_content">
        <form action="{{ route('reminders.update', $reminder->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $reminder->title }}" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" required>{{ $reminder->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Reminder Date</label>
                <input type="datetime-local" name="reminder_date" class="form-control" value="{{ $reminder->reminder_date }}" required>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </x-slot>
</x-layout>
