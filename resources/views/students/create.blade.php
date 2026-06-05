@extends('layouts.dashboard')

@section('main')

    <div class="main-content">

        <div class="top-navbar d-flex justify-content-between align-items-center">
            <h4 class="mb-0 fw-bold text-dark">
                <i class="bi bi-envelope-fill"></i> Edit Student Information
            </h4>

            <button class="btn btn-dark">
                <i class="bi bi-person-circle"></i> Admin
            </button>
        </div>

        <div class="card dashboard-card border-0">

            <div class="card-header bg-white py-3 border-0">
                <h5 class="mb-0 fw-bold text-dark">
                    {{-- Modify Student Details (ID: {{ $student->id }}) --}}
                </h5>
            </div>

            <div class="card-body">

                <form action="/students" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="name" name="firstname"
                                    placeholder="Doe" value="{{ old('firstname') }}" required>
                                <label for="name" class="text-muted">First Name</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="name" name="lastname"
                                    placeholder="John" value="{{ old('lastname') }}" required>
                                <label for="name" class="text-muted">Last Name</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-0" id="email" name="email"
                                    value="{{ old('email') }}" placeholder="name@example.com" required>
                                <label for="email" class="text-muted">Email Address</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="department" name="department"
                                    value="{{ old('department') }}" placeholder="Computer Science" required>
                                <label for="department" class="text-muted">Department</label>
                            </div>
                        </div>
                    </div>
                    

                    <div class="d-flex gap-2">
                        <a href="/contact" class="btn btn-secondary btn-lg px-4 py-3 fw-bold">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg flex-grow-1 py-3 fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="me-2 mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>
                            Create Student Information
                        </button>
                    </div>
                </form>

            </div>

        </div>

    </div>

@endsection