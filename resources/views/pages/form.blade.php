<h1>Create Account</h1>


@if($errors->any())
<div>
    <ul>
    @foreach ($errors->all() as $err)
        <li> {{$err}} --</li>
    @endforeach
    </ul>
</div>
@endif
<form  action="register" method="post">
{{ @csrf_field() }}

    <input type="email" name="email"/>
    <br>
    @error('email')
    <span> {{$message}} </span>
    @enderror('email')
    <br>
    <input type="password" name="password"/>
    <br>
    @error('password')
    <span> {{$message}} </span>
    @enderror('password')
    <br>
    <button type="submit" >Submit</button>
</form>