

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
 .notfound{
   display: block;
   height: 50px;
 }
 #content-wrapper{
  clear: both;
  width: auto;
  margin: 0 30px;
  text-align: center;

 }
 #about{
   display: block;
   margin:510px auto 20px;
   background-color: #eee;
   text-align:  center;
   font-size: 232px;
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
        <form method="post" action="search.php">
        <input type="text" name="find" placeholder="bookname you want to get">
        <input type="submit" name="search" class="butto" value="search">
        </form>

        </div>
          </nav>
</div>


<?php
if(isset($_POST['search']))
{
  $find = $_POST['find'];
  $connection=mysqli_connect("localhost", "root", "", "sabaikokitab");
  $query = "SELECT * FROM `booksinfo` where bookname = '$find'";
  $result = mysqli_query($connection,$query);
  if(mysqli_num_rows($result)<1)
  {
    ?>
    <script>
    alert(" no books found");
    <div class="notfound">
    </div>
    </script>
    <?php
  }
  else{
  while($row=mysqli_fetch_assoc($result))
   {
    ?>
    <div id="content-wrapper">
      <div class="block">
        <br>
        <center><img src="" alt="image not found" class="imag"><br></center>
        <br>
        <hr>
        Bookname:<?php echo $row['bookname']."<br>";?>
        Orginalprice:<?php echo $row['orgprice']."<br>";?>
        Price:<?php echo $row['myprice']."<br>";?>
        <a href="bookdetails.php?id=<?php echo $row['bookid']?>">buy</a>
        <hr>
      </div>
    </div>
    <?php
}
}
}
 ?>
 <br>
 <div id="about">
   <p>Team Name:ByteMe</p>
   <p>Contact Number: 9809736256, 986985732, 986398282, 9867324666  </p>
   <pre><p> <u>E-mail:</u><br> <a href="Radilkoju7@gmail.com">Radilkoju7@gmail.com</a> <br> <a href="Rikeshsibanjar380@gmail.com">Rikeshsibanjar380@gmail.com</a> <br> <a href="Bibhukiju@gmail.com">Bibhukiju@gmail.com</a> <br> <a href="SanamGC56@gmail.com">SanamGC56@gmail.com</a> </p></pre>

 </div>
