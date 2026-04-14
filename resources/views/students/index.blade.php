<h1>Student List</h1>

@if($students->count())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Student No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->student_no }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone ?? 'N/A' }}</td>
                    <td>{{ $student->address ?? 'N/A' }}</td>
                    <td>{{ $student->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No students found.</p>
@endif
