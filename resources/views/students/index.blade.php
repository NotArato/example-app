@extends('layouts.dashboard')

@section('main')

    <div class="main-content">

        <div class="top-navbar d-flex justify-content-between align-items-center">
            <h4 class="mb-0 fw-bold text-dark">
                <i class="bi bi-envelope-fill"></i> Student Information
            </h4>

            <button class="btn btn-dark">
                <i class="bi bi-person-circle"></i> Admin
            </button>
        </div>

        <div class="card dashboard-card border-0">

            <div class="card-header bg-white py-3 border-0">
                <h5 class="mb-0 fw-bold text-dark">
                    All Students Information
                </h5>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    @if(session('success'))
                        {{ session('success') }}

                    @endif

                    <table class="table table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($student as $students)

                                <tr>
                                    <td>{{ $students->id }}</td>

                                    <td>
                                        
                                        {{ $students->firstname }}
                                    </td>

                                    <td>{{ $students->lastname }}</td>

                                    <td>{{ $students->email }}</td>

                                    <td>{{ $students->department }}</td>

                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="/students/{{ $students->id }}/edit" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>

                                            <form action="/students/{{ $students->id }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this message?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection