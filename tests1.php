<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
} 

#regForm{
  border: 2px solid black;
  padding: 25px;
  background-color: #a7b2b8;
  background-repeat: no-repeat;
  width: 300px;
}

button{
  border: 2px solid black;
  background-color: #a7b2b8;
  padding: 8px 24px;
}
#head {
  font-size: 19px;
}

</style>
</head>
<body>

<button id="button" onclick="alert('Information has been saved!')" style="float: right;"> Save</button>

<p id="head">Product Add</p>

<hr>
<pre> </pre>

<form id="form" method="post" name="myform">

  <label>SKU:  </label> <input type="text" name="SKU" value="SKU">
  <br>
  <pre> </pre>
  <label>Name: </label><input type="text" name="name" value="Name">
  <br>
  <pre> </pre>
  <label>Price:  </label><input type="text" name="price" value="Price">
  <br>
  <pre> </pre>
</form> 

<p>Type Switcher: </p>

    <form>
              <select name="selectSize"  id="selectSize" onchange="myFunction(this.options[this.selectedIndex].value)">
                  <option name='' disabled selected style='display:none;'>Type Switcher</option>
                  <option id="size1" name="Size">Size</option>
                  <option id="size2" name="Height, Width, Lenght">Height, Width, Lenght</option>
                  <option id="size3" name="Weight">Weight</option>
                </select>
                <div id="newSize"></div> 
                <div id="newHeight"></div> 
                <div id="newWidth"></div> 
                <div id="newWeight"></div> 
    </form>

<script>

      function myFunction(name){
        if(name == 'Size'){
        document.getElementById('newSize').innerHTML='Size: <input type="text" name="newSize"/>';
        } elseif(x == 'Height, Width, Lenght'){
        document.getElementById('newSize').innerHTML='Height: <input type="text" name="newHeight"/>';
        document.getElementById('newWidth').innerHTML='Width: <input type="text" name="newWidth"/>';
        }elseif(x=='Weight'){
        document.getElementById('newWeight').innerHTML='Weight: <input type="text" name="newWeight"/>';
        }else{
        document.getElementById('newSize').innerHTML='';
        }
      }

</script>

</body>
</html>

