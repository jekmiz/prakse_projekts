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

.container{
  border: 2px solid black;
  background-color: #f2f2f2;
  height: 190px;
  width: 30%;
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

<select id="mySelect" onChange="check(this);">
    <option>Type Switcher</option>
    <option>Size</option>
    <option>Height, Width, Lenght</option>
    <option>Weight</option>
</select>
<pre> </pre>

<div class="container">
    <p>Please enter your data here:</p>
    <pre> </pre>
    <div id="other-size" style="display:none;">
        <label> Size <input id="other-size"></label>
    </div>
    <div id="other-height" style="display:none;">
        <label> Height <input id="other-height"></label>
    </div>
    <div id="other-width" style="display:none;">
        <label> Width <input id="other-width"></label>
    </div>
    <div id="other-lenght" style="display:none;">
        <label> Lenght <input id="other-lenght"></label>
    </div>
    <div id="other-weight" style="display:none;">
        <label> Weight <input id="other-weight"></label>
    </div>

</div>

<script>

    function check(elem) {
    // use one of possible conditions
    // if (elem.value == 'Other')
    if (elem.value == 'Size') {
        document.getElementById("other-size").style.display = 'block';
    }else if (elem.value == 'Height, Width, Lenght') {
        document.getElementById("other-height").style.display = 'block';
        document.getElementById("other-width").style.display = 'block';
        document.getElementById("other-lenght").style.display = 'block';
    }else if (elem.value == 'Weight') {
        document.getElementById("other-weight").style.display = 'block';
    }else{
        document.getElementById("other-size").style.display = 'none';
    }
}

</script>

</body>
</html>

