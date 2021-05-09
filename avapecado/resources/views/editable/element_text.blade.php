<form action="update-element" method="post" enctype="multipart/form-data">
    @csrf
    <textarea rows = "" cols = "100" name = "textContent">
    {{ $element['textContent'] }}
    </textarea>
    <input type="hidden" value={{ $element['id'] }} name="element_id" />
    <div>
        <button type="submit">Register</button>
    </div>
</form>
