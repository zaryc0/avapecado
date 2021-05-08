<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Create an Element</h2>
    <form action="create-element" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>Element Name</div>
            <input class ="" type="text" name="name" />
        </label>
        <label>
            <div>Element Description</div>
            <input class ="" type="text" name="description" />
        </label>
        <label>
            <div>Image address</div>
            <input class ="" type="text" name="imageAddress" />
        </label>
        <label>
            <div>Text Content</div>
            <input class ="" type="text" name="textContent" />
        </label>
        <label>
            <div>Choose the page that the element belongs to</div>
            <select name="page_id">
                @foreach ($pages as $page)
                    <option value="{{ $page->id }}">{{ $page->name }}</option>
                @endforeach
            </select>
        </label>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</div>
