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
        <form class="forms-sample" action="{{ url('dashboard/reminders/update', $reminders->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Masukkan reminders</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder=" Masukkan reminders" value="{{ $reminders->title }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="description" class="col-sm-4 col-form-label">description</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Masukkan description" value="{{ $reminders->description }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="reminder_date" class="col-sm-4 col-form-label">reminder_date</label>
                <div class="col-sm-8">
                    <input type="datetime-local" class="form-control" id="reminder_date" name="reminder_date"
                     value="{{ $reminders->reminder_date }}">
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
