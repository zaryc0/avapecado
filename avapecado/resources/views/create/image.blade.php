<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Create an Image for a Gallery</h2>
    <form action="create-image" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>Choose Gallery for the Image</div>
            <select name="gallery_id">
                @foreach ($galleries as $gallery)
                    <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                @endforeach
            </select>
        </label>
        <label>
            <div>Image</div>
            <input class ="" type="file" name="image" />
        </label>
        <label>
            <div>Name</div>
            <input class ="" type="text" name="name" />
        </label>
        <label>
            <div>Short Description</div>
            <input class ="" type="text" name="alt_text" />
        </label>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
