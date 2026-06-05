<h2>Student Lists</h2>

@foreach ($students as $student)
    <p>{{ $student->id . ' | ' . $student->firstname . ' ' . $student->lastname }}</p>
    <p>{{ 'Email: ' . $student->email }}</p>
    <p>{{ 'Department: ' . $student->department }}</p>
    <p> ========== </p>
@endforeach