<div class="input_form rad-05 bg-darkgrey margin-1 padding-1 float-left">
    <h2>Create a new user</h2>
    <form action="create-user" method="post" enctype="multipart/form-data">
        @csrf
        <label>
            <div>User Name</div>
            <input class ="" type="text" name="userName" />
        </label>
        <label>
            <div>First Name</div>
            <input class ="" type="text" name="firstName" />
        </label>
        <label>
            <div>Last Name</div>
            <input class ="" type="text" name="lastName" />
        </label>
        <label>
            <div>email</div>
            <input class ="" type="text" name="email" />
        </label>
        <label>
            <div>Date of Birth</div>
            <input class ="" type="date" name="DOB" />
        </label>
        <label>
            <div>Password</div>
            <input class ="" type="password" name="password" />
        </label>
<!--    <label>
            <div>Confirm Password</div>
            <input class ="" type="password" name="password2" />
        </label>
-->
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</div>
