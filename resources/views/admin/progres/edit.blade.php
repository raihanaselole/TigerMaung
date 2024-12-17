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
        <form class="forms-sample" action="{{ url('dashboard/progres/update', $progress->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="task_name" class="col-sm-4 col-form-label">Masukkan Progress</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="task_name" name="task_name"
                        placeholder="Masukkan Masukkan Progress" value="{{ $progress->task_name }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="description" class="col-sm-4 col-form-label">description</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Masukkan description" value="{{ $progress->description }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">status</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status" name="status">
                        <option disabled selected value="">Pilih Status</option>
                        <option value="not started" {{ $progress->status == 'not started' ? 'selected' : '' }}>Not Started</option>
                        <option value="in progress" {{ $progress->status == 'in progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="completed" {{ $progress->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="due_date" class="col-sm-4 col-form-label">due_date</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="due_date" name="due_date"
                     value="{{ $progress->due_date }}">
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