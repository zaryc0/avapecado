<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left" >
    <h2>Create a Gallery</h2>
    <form action="create-gallery" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>Name</div>
            <input class ="" type="text" name="name" />
        </label>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
