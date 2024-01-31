<form action="login" method="post">
    @csrf
    <input type="text" name="uname" id="uname" placeholder="Enter Username"><br>
    <span style="color:red;">@error('uname'){{$message}}@enderror</span>
    <br>
    <input type="password" name="upass" id="upass" placeholder="Enter Password"><br>
    <span style="color:red;">@error('upass'){{$message}}@enderror</span><br>
    <button>submit</button>
</form>