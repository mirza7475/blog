<div>
    <h1 class="text-center">List of Edit Students</h1>
    <form action="/update/{{ $student->id }}" method="POST">
        @csrf
         @method('PUT')
       <input type="text" name="name" value="{{ $student->name }}" class="form-control mb-2">
       <input type="email" name="email" value="{{ $student->email }}" class="form-control mb-2">
       <input type="text" name="phone" value="{{ $student->phone }}" class="form-control mb-2">
       <button type="submit" class="btn btn-primary">Update</button>
    </form>



    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
