<div>
    <h1>Students</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $student)
                <tr>
             
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->batch }}</td>
                </tr>
            @endforeach
        </tbody>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
