<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left" >
    <h2>Delete a Gallery</h2>
    <form action="delete-gallery" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>Name</div>
            <select name="gallery_id">
                @foreach ($galleries as $gallery)
                    <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                @endforeach
            </select>
        </label>
        <div>
            <button type="submit">delete</button>
        </div>
    </form>
</div>
