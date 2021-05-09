<form action="update-element-text" method="post" enctype="multipart/form-data">
    @csrf
    <textarea rows = "20" cols = "100" name = "textContent">
    {{ $element['textContent'] }}
    </textarea>
    <input type="hidden" value={{ $element['id'] }} name="element_id" />
    <div>
        <button type="save">Save Changes</button>
    </div>
</form>
