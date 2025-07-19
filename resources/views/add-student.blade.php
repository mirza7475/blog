<div>
    <h1> add user </h1>
    <form action="add-user" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">              
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>                          
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
