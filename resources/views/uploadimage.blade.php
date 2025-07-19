<div>
    <h1>Upload Image</h1>
    <form action="{{ url('uploadimage') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Select Image:</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <a href="{{ url('displayimage') }}" class="btn btn-secondary mt-3">View Uploaded Images</a>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
