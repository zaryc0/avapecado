<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Log into your account</h2>
    <form action="user-login" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>Email</div>
            <input class ="" type="text" name="email" />
        </label>
        <label>
            <div>Password</div>
            <input class ="" type="password" name="password" />
        </label>
        <div>
            <button type="submit">Log-In</button>
        </div>
    </form>
</div>

