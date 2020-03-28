<?php   session_start(); ?>
<html>
<meta charset ="utf8">
    <link rel="stylesheet" type="text/css" href="style1.css">   
<head> 
 <title> ĐĂNG NHẬP </title>
</head>
<body>
	<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST" class="login-form">
	<h1>Login Here</h1>
    <div class="login-box">
            <input type="text" name="tdn" placeholder="Enter Username" required>
            
            <input type="password" name="pass" placeholder="Enter Password" required>
			
            <input type="submit" name="submit" value="Login">
        
			<?php 


  if(isset($_POST['submit']))
  {
	  
	  $ten=$_POST['tdn'];
      $pas=$_POST['pass'];

// Store Session Data
 // Initializing Session with value of PHP Variable
    //lưu cookie
	
	//kết nối dữ liệu
$kn=mysqli_connect("localhost","root","","dulieu");
    //xây dựng lệnh truy vấn
$query="select * from dsnd where tendangnhap ='".$ten."'and matkhau='".$pas."'";
    //thực hiện câu lệnh truy vấn
$tv= mysqli_query($kn,$query)or die(mysqli_error($kn));

   
   //xử lí kết quả trả về
if($row =mysqli_fetch_array($tv))
{
    $_SESSION['LOGIN']= $_POST['tdn']; 
	echo "Đăng nhập thành công";
	header('location: index1.php');
}
else
{
	echo "Đăng nhập thất bại.";
	}
	
	
	
	//đóng kết nối
mysqli_close($kn);
  }
?>
        </div>
    </form>
    </body>
</html>