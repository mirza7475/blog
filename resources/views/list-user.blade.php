<x-layout>
    </x-layout>
<div>
    <h1 class="text-center">List of Students</h1>
<br>
<br>
<button onclick="changeColor()">Change color  </button>
<br>
<br>
<br>
<br>

    {{-- Search Form --}}
    <form action="{{ url('search') }}" method="GET" class="mb-3">
        <input type="text" name="search" value="{{ @$search }}" placeholder="Search by name" class="form-control w-50 d-inline-block">
        <button type="submit" class="heading">Search</button>
    </form>

    <br>

    {{-- Delete Multiple Form --}}
    <form action="{{ url('deletemultiple') }}" method="POST" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-danger mb-3">Delete Selected</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Select</th>                  
                    <th scope="col">Name</th>   
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $student->id }}"></td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>                
                    <td>{{ $student->phone }}</td>
                    <td><a href="{{ url('delete/' . $student->id) }}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{ url('edit/' . $student->id) }}" class="btn btn-secondary">Edit</a></td>
                </tr>           
                @endforeach
            </tbody>
        </table>
    </form>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $students->links() }}
    </div>
</div>

{{-- Pagination Styling Fix --}}
<style>
    .w-5.h-5 {
        width: 20px !important;
    }
</style>

