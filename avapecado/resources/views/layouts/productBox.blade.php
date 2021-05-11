<div class="flex flex--align-center bg-darkgrey height-fit rad-05 padding-1 margin-1">
    <div class="flex__item flex__item--grow">
        <h2>{{ $product->name}}</h2>
        <h3>Product Description:</h3>
        {{ $product->description }}
    </div>
    <div class="flex__item">
        <img class="square-10rem" src="{{ $image->url }}" alt="{{ $image['alt_text'] }}">
        <form action="post" method="">
            @csrf
            <label for="quantity">Quantity</label>
            <input style="width: 7em" type="number" name="quantity" id="quantity" value="1">
            <div>
                <button type="submit">add to basket</button>
            </div>
        </form>

    </div>
</div>
