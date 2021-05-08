<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left" >
    <h2>Delete an Element</h2>
    <form action="delete-element" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>Name</div>
            <select name="element_id">
                @foreach ($elements as $element)
                    <option value="{{ $element->id }}">{{ $element->name }}</option>
                @endforeach
            </select>
        </label>
        <div>
            <button type="submit">delete</button>
        </div>
    </form>
</div>
