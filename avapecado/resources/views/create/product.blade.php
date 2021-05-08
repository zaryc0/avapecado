<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Add a new product</h2>
    <form action="create-product" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>Product Name</div>
            <input class ="" type="text" name="name" />
        </label>
        <label>
            <div>Product Description</div>
            <input class ="" type="text" name="description" />
        </label>
        <label>
            <div>Image address</div>
            <input class ="" type="text" name="imageAddress" />
        </label>
        <label>
            <div>Price</div>
            <input class ="" type="number" name="textContent" />
        </label>
        <label>
            <div>Quantity</div>
            <input class ="" type="number" name="textContent" />
        </label>
        <label>
            <div>Choose the appropriate tag for the product</div>
            <select name="page_id">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </label>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</div>
