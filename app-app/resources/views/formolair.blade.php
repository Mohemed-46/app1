<!DOCTYPE html>
<html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
span{
  color: red;
}
</style>
<body>

<h3 align="center">Formulair</h3>
<!--   -->
<div>
{{--@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif--}}
  <form action="/form/5" method="post">
  	@csrf
    <label for="fname" >First Name</label>
    <input type="text" required id="fname" maxlength="50" name="nom" placeholder="Your name.." value="{{old('nom')}}">
                                @error('nom')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
    <label for="lname">Last Name</label>
    <input type="text" required id="lname" maxlength="50" name="prenom" placeholder="Your last name.." value="{{old('prenom')}}">
                                @error('prenom')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
    <label for="email">email</label>
    <input type="email" required  id="email" maxlength="60" name="email" placeholder="Your last email.." value="{{old('email')}}">
                                @error('email')
                                    <span >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
    <input type="submit" value="Enregistrer">
  </form>
</div>

</body>
</html>
