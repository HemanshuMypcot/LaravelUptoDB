<h1>Add Member</h1>
@if(session('uname'))
    <h2 style="color:green;">{{session('uname')}} user has added</h2>
@endif
<form action="addMem" method="post">
    @csrf
    <input type="text" name="uname" id="uname" placeholder="Enter username"><br><br>
    <input type="password" name="upass" id="upass"  placeholder="Enter password"><br><br>
    <input type="email" name="email" id="email"  placeholder="Enter Email"><br><br>
    <button>Add Member</button>
</form>