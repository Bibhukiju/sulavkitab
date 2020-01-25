<style>
html
  {
    scroll-behavior: smooth;
  }
body
{
  background-image:url(try.jpg);
  background-repeat: no-repeat;
  background-size:  1920px 750px ;
}
#icon
{
    float: left;
    width: 100px;
    height:50px;
}
.navi
{

    float: right;
    color: white;
    font-size: 30px;
}
a
{
    color: white;
    text-decoration: none;
}
nav a:hover
{
    color: gold;
    font-size: 30px;
    border-radius: 10px;
    border: 2px solid green;
}


fieldset{
  color: green;
  border-radius: 30px;
  border-color: blue;
  background-color: lightyellow;
  font-size: 30px;
}
form
{
  display: block;
  margin: auto;
  opacity: 0.75;
  color: green;
  width: 25%;
  align-items: center;
  border-radius: 20px;
  border-color: blue;
  background-color: lightyellow;
  font-size: 50px;

}
input[type="text"]
{
    width: 100%;
    height: 50px;
    text-align: center;
    margin: 0%;
    border-radius: 20px;
    float: left;
    background-color: transparent;
    color: green;
}
input[type="submit"]
{
    width: 10%;
    height: 50px;
    text-align: center;
    margin: 0%;
    border-radius: 20px;
    background-color: white;
    color: green;
}
#donate
{
  width: 30%;
}
#about{
  display: block;
  margin:70px auto 10px;
  background-color: #111;
  text-align:  center;
  font-size: 22px;
  color: #eee;
}

</style>
<div class="headers">
<a href="index.html"><img src="icon.png" id="icon"></a>
    <nav>
        <div class="navi">
        <pre>
        <a href="book.php">BOOKS</a>      <a href="upload.php">UPLOAD</a>     <a href="Donate.php">DONATES</a>      <a href="#about">ABOUT US</a>      <a href="login.php">LOGIN</a>
        </pre>
        </div>
          </nav>
</div>


<br><br><br><br>
<form class="screen" action="upload.php" method="post">
  <fieldset>
    <legend>Bookinfo</legend>
    <br>
    <fieldset>
      <legend>Book name</legend>
      <input type="text" name="bookname" placeholder="Name of the book">
    </fieldset>
    <fieldset>
      <legend>Orginalprice</legend>
      <input type="text" name="orgprice" placeholder="Orginalprice of the book">
    </fieldset>
    <!--<fieldset>
      <legend>Your price</legend>
      <input type="text" name="myprice" placeholder="Your price for the book">
    </fieldset>-->
    <fieldset>
      <legend>Author</legend>
      <input type="text" name="author" placeholder="Author of the book">
    </fieldset>
  </fieldset>

<br><br>
<center>
<input type="submit" id="donate" name="donate" value="DONATE">
</center>
</form>

<?php


if(isset($_POST['upload']))
{
  $bookname=$_POST['bookname'];
  $orgprice=$_POST['orgprice'];
  $myprice=$_POST['myprice'];
  $connection=mysqli_connect("localhost","root","","sabaikokitab");
  $query="INSERT INTO `bookinfo` (bookname, orgprice, myprice) VALUES ('$bookname', '$orgprice', '$myprice')";
  mysqli_query($connection,$query);
}
 ?>

 <footer id="about">
   <p>Team Nmae:ByteMe</p>
   <p>Contact Number: 9809736256, 986985732, 986398282, 9867324666  </p>
   <pre><p> <u>E-mail:</u><br> <a href="Radilkoju7@gmail.com">Radilkoju7@gmail.com</a> <br> <a href="Rikeshsibanjar380@gmail.com">Rikeshsibanjar380@gmail.com</a> <br> <a href="Bibhukiju@gmail.com">Bibhukiju@gmail.com</a> <br> <a href="SanamGC56@gmail.com">SanamGC56@gmail.com</a> </p></pre>

 </footer>
