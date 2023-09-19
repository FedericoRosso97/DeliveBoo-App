<div class="col-8 mx-auto">
    <h1 class='text-center mb-5'>
        Create New Plate
    </h1>
    <form action="{{ route ('plates.update', $plate)}}" method='POST'>
    @csrf
    @method('PUT')


        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name='name' value="{{ old( 'name' , $plate->name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name='description' value="{{ old( 'description' , $plate->description) }}">
        </div>
        <div class="mb-3">
            <label for="plate_price" class="form-label">Price</label>
            <input type="text" class="form-control" id="plate_price" name='plate_price'>
        </div>


        <!--DOBBIAMO RICORDARCI TUTTI DI SETTARE DA PRIVATE A PUBLIC FILE ENV da guardare slide 85-->
        <div class="mb-5">
            <label for="image" class="form-label">
                Image
            </label>
            <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}">
        </div>


        <div class="radio">
            <label><input name="visibility" type="radio" value="0">No </label>
            <label><input name="visibility" type="radio" value="1">Yes</label>
        </div>

        
        <button type="submit" class="btn btn-primary">Create New Plate</button>
        <button type="reset" class="btn btn-warning">Reset</button>
</form>
</div>