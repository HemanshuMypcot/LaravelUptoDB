<h1>User Login</h1>
<form action="userLogin" method="post">
    @csrf
    <input type="text" name="uname" id="uname" placeholder="Enter username"><br><br>
    <input type="password" name="upass" id="upass"  placeholder="Enter password"><br><br>
    <button>Submit</button>
</form>