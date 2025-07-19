<div>
    <h1>Display Images</h1>
     @foreach($image as $images)
        <div class="image-container mb-3">
            <img style="width: 200px; margin:20px;float: left; " src="{{url('storage/'.  $images->path )}}" alt="Image" class="img-thumbnail">
        </div>
    @endforeach
       

    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
