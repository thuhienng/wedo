<div id="maincontent"><!--phần bao content-->
 <div id ="content">
 <div class="dinhdang"><!--định dạng chung-->
 <h1>Tạm dừng hoạt động tuyến xe buýt T7 (Quy Nhơn - Cát Tiến)</h1>
 <div id="noidung"><!--định dạng nd-->
 
  <form align="left" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
			
				<?php
				
				$conn=mysqli_connect("localhost","root","","dulieu");
				$conn->query("SET NAMES 'utf8'");
			
				if (!$conn)
				{
					die("Lỗi kết nối: " . mysqli_connect_error());
				}
				$sql="select ngaydang, noidung from tintuc";
				$kq=mysqli_query($conn,$sql);
				if (mysqli_num_rows($kq) > 0)
				{
					while($row = mysqli_fetch_assoc($kq))
					{
											
						echo "<tr> Ngày đăng: ";
							echo $row['ngaydang'];
						echo "</tr>";
						echo "<br>";
						echo "<br>";
						echo "<tr>";
							echo $row['noidung'];
						echo "</tr>";
						}
				}
								
			?>
			
			
</form>

 </div>
  </div>
  </div>
 </div><!--end phần bao content-->