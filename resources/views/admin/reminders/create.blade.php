<x-layout>
    <x-slot name='page_content'>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form class="forms-sample" action="{{ url('dashboard/reminders/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Nama reminder</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Masukkan Nama reminder">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="description" class="col-sm-4 col-form-label">Deskripsi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Masukkan Deskripsi">
                </div>
            </div>
            <div class="form-group row">
                <label for="reminder_date" class="col-sm-4 col-form-label">Tanggal Reminder</label>
                <div class="col-sm-8">
                    <input type="datetime-local" class="form-control" id="reminder_date" name="reminder_date">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>