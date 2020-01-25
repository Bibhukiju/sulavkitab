<style>
  html
    {
      scroll-behavior: smooth;
    }
   body
    {
      background-image:url(try.jpg);
      background-attachment: fixed;
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
    #quote
    {
        float: left;
        font-size: 100px;
        color:white;
        font-family: cursive;
    }
    input[type="text"]
    {
        width: 500px;
        height: 30px;
        text-align: center;
        margin: 0%;
        border-radius: 20px;
    }
    form
    {
        float: right;
    }
    .butto
    {
        background-size: cover;
        width: 70px;
        height: 30px;
        border-radius: 20px;
    }

     #content-wrapper{
      clear: both;
      width: auto;
      margin: 0 30px;
      text-align: center;
     }
     h4{
       font-size: 50px;
       padding: -20px;
     }
     .block
     {
       width: 200px;
       height: 270px;
       border: 3px double black;
       margin: 0px;
       padding: 5px;
       background-color: lightyellow;
       float: left;
     }

     .block .imag
     {
       height: 100px;
       width: 100px;
       border: 1px black solid;
       text-align: center;;
       text-shadow: 2px 2px #ff0000;
       text-align: center;
       background-color: white;
     }
     #about{
       display: block;
       margin:480px auto 30px;
       background-color: #111;
       text-align:  center;
       font-size: 22px;
       color: #eee;
     }
     .book_detail{
       font-size: 30px;
       color:#eee;
       display: block;
       padding: 5px;
       margin:20px; auto;
       border-collapse: collapse;
       align-items: center;
     }

.book_detail, th, td {
  text-align: center;
  border: 1px solid #eee;
}
tr:hover {
  background-color: #90EE90;
}

</style>
<div class="headers">
<a href="index.html"><img src="icon.png" id="icon"></a>
    <nav>
        <div class="navi">
        <pre>
        <a href="book.php">BOOKS</a>      <a href="upload.php">UPLOAD</a>      <a href="Donate.php">DONATES</a>      <a href="#about">ABOUT US</a>      <a href="login.php">LOGIN</a>
        </pre>
        <form method="post" action="search.php">
        <input type="text" name="find" placeholder="bookname you want to get">
        <input type="submit" name="search" class="butto" value="search">
        </form>

        </div>
          </nav>
</div>
	<?php
	$click=$_GET['id'];
	$connection=mysqli_connect("localhost","root","","sabaikokitab");
	$query ="select * from booksinfo where bookid='$click'";
	$result=mysqli_query($connection,$query);
	 ?>
</style>


		<?php while($row=mysqli_fetch_assoc($result))
		{

    }
		 ?>

<br>
  <footer id="about">
    <p>Team Name:ByteMe</p>
    <p>Contact Number: 9809736256, 986985732, 986398282, 9867324666  </p>
    <pre><p> <u>E-mail:</u><br> <a href="Radilkoju7@gmail.com">Radilkoju7@gmail.com</a> <br> <a href="Rikeshsibanjar380@gmail.com">Rikeshsibanjar380@gmail.com</a> <br> <a href="Bibhukiju@gmail.com">Bibhukiju@gmail.com</a> <br> <a href="SanamGC56@gmail.com">SanamGC56@gmail.com</a> </p></pre>

  </footer>
