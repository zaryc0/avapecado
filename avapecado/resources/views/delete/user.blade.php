<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Delete a customer account</h2>
    <form action="delete-user" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->userName }}</option>
                @endforeach
            </select>
        </label>
        <div>
            <button type="submit">Remove</button>
        </div>
    </form>
</div>
