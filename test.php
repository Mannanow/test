<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: khaki;
        }
        table, th, td{
            margin: 0;
            border:1px solid black;
            /*border-collapse: collapse;*/
            border-radius: 10px;
        }
        th, td{
            background-color: #931230;
        }
        th, td{
            text-align: left;
        }
        th: :nth-child(even){
            background-color:$d6eeee;
        }
    </style>
</head>
<body>
    <h2>A basic HTML table</h2>
    <table style="width: 100%;">
        <tr style="height: 150px;">
            <th colspan = "2" style="border: 4px solid blue;">Company</th>
            <th style="border-top: 4px solid blue;">contact</th>
            <th style="border-bottom: 4px solid blue;">Country</th>
        </tr>
        <tr style="height: 100px;">
            <td style="border-bottom: 4px double blue;"> Alfreds Futterkister</td>
            <td style="border-bottom: 4px solid blue;">Maria Anders</td>
            <td style="border-bottom: 4px solid blue;">Germany</td>

        </tr>
        <tr style="height: 50px;">
            <td style="border-bottom: 4px solid blue;">Centro comercial Moctezuma</td>
            <td style="border-bottom: 4px solid blue;">Francisco Chang</td>
            <td style="border-bottom: 4px dashed blue;">Mexico</td>
        </tr>
    </table>
    <p>To understand the example better, we have added borders to the table.</p>

<br>
<br>
<br>





<ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>


<br>
<br>
<br>
<ol>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ol>



<br>
<br>
<br>


<style>
.city {
  background-color: tomato;
  color: white;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
}
</style>
</head>
<body>

<div class="city">
  <h2>London</h2>
  <p>London is the capital of England.</p>
</div>

<div class="city">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p>
</div>

<div class="city">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>
<br>
<br>
<br>



<iframe src="http://kun.uz" name="iframe_a" title="Iframe Example"></iframe>

<p><a href="https://www.w3schools.com" target="iframe_a">W3Schools.com</a></p>

<br>
<br>
<br>
<h1>My First JavaScript</h1>

<p>JavaScript can change the content of an HTML element:</p>

<button type="button" onclick="myFunction()">Click Me!</button>

<p id="Qalisan">salom go'zal dunyo.</p>

<script>
function myFunction() { 
  document.getElementById("Qalisan").innerHTML = "Hello JavaScript!";
}
</script>

<br>
<br>
<br>



<h1>My First JavaScript</h1>

<p id="hello">JavaScript can change the style of an HTML element.</p>

<script>
function myFunction() {
  document.getElementById("hello").style.fontSize = "25px"; 
  document.getElementById("hello").style.color = "red";
  document.getElementById("hello").style.backgroundColor = "yellow";        
}
</script>

<button type="button" onclick="myFunction()">Click Me!</button>







<br>
<br>
<br>
<h1>My First JavaScript</h1>
<p>Here, a JavaScript changes the value of the src (source) attribute of an image.</p>

<script>
function light(sw) {
  var pic;
  if (sw == 0) {
    pic = "pic_bulboff.gif"
  } else {
    pic = "pic_bulbon.gif"
  }
  document.getElementById('myImage').src = pic;
}
</script>

<img id="myImage" src="pic_bulboff.gif" width="100" height="180">

<p>
<button type="button" onclick="light(1)">Light On</button>
<button type="button" onclick="light(0)">Light Off</button>
</p>


<br><br><br>


<code>
x = 5;
y = 6;
z = x + y;
</code>


































<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>