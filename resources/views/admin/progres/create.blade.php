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

        <form class="forms-sample" action="{{ url('dashboard/progres/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="task_name" class="col-sm-4 col-form-label">Nama Progres</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="task_name" name="task_name"
                        placeholder="Masukkan Nama Progres">
                </div>
            </div>
            
            <div class="form-group row mt-15">
                <label for="description" class="col-sm-4 col-form-label">Deskripsi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Masukkan Deskripsi">
                </div>
            </div>
            <div class="form-group row mt-15">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status" name="status">
                        <option disabled selected value="">Pilih Status</option>
                        <option value="not started">Not Started</option>
                        <option value="in progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-15">
                <label for="due_date" class="col-sm-4 col-form-label">Tenggat Waktu</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="due_date" name="due_date">
                </div>
            </div>
            <div class="form-group row mt-15">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>