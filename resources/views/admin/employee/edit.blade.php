@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3">कर्मचारी सम्पादन गर्नुहोस्</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.employee.index') }}" class="btn btn-primary align-item-end">कर्मचारी
                                    सूची</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="container">
                <form class="row" action="{{ route('admin.employee.update', $employee) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6  fs-3 mt-4">
                        <label for="validationDefault01" class="form-label">नाम</label>
                        <input type="text" class="form-control" id="validationDefault01"
                            value="{{ old('name', $employee->name) }}" name="name" required>
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="validationDefault02" class="form-label">नाम अंग्रेजीमा</label>
                        <input type="text" class="form-control" id="validationDefault02"
                            value="{{ old('name_en', $employee->name_en) }}" name="name_en" required>
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="department_id" class="form-label">विभाग</label>
                        <select class="form-select" id="department_id" name="department_id">
                            <option value="department_id">---छान्नुहोस्----</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="designation_id" class="form-label">पद</label>
                        <select class="form-select" id="designation_id" name="designation_id">
                            <option value="designation_id">---छान्नुहोस्----</option>
                            @foreach ($designations as $designation)
                                <option value="{{ $designation->id }}">{{ $designation->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 fs- 3mt-4">
                        <label for="validationDefault03" class="form-label">तह</label>
                        <input type="number" class="form-control" id="validationDefault06" name="position">
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="validationDefault03" class="form-label">इमेल</label>
                        <input type="email" class="form-control" id="validationDefault03"
                            value="{{ old('email', $employee->email) }}" name="email">
                    </div>

                    <div class="col-md-6 fs-3 mt-4">
                        <label for="validationDefault03" class="form-label">फोन</label>
                        <input type="text" class="form-control" id="validationDefault03"
                            value="{{ old('phone', $employee->phone) }}" name="phone">
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="validationDefault03" class="form-label">फोटो</label>
                        <input type="file" class="form-control" id="validationDefault03" name="photo">
                    </div>
                    <div class="col-md-12 fs-4 mb-4">
                        <button type="submit" class="btn btn-primary mt-4">पेश गर्नुहोस्</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection