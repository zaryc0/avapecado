<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Delete an Image</h2>
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
</div>
