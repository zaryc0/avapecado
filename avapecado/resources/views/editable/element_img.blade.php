<form action="update-element-text" method="post" enctype="multipart/form-data">
    @csrf
    <label for=""></label>
    <textarea rows = "" cols = "100" name = "textContent">
    {{ $element['textContent'] }}
    </textarea>
    <input type="hidden" value={{ $element['id'] }} name="element_id" />
    <div>
        <button type="submit">Register</button>
    </div>
</form>

<form action="delete-product" method="post" enctype="multipart/form-data">
    @csrf
    <label>
        <select name="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </label>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
