<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Delete an Image</h2>
    <form action="delete-image" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <select name="image_id">
                @foreach ($images as $image)
                    <option value="{{ $image->id }}">{{ $image->name }}</option>
                @endforeach
            </select>
        </label>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
