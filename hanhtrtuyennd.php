<div id="maincontent"><!--phần bao content-->
 <div id ="content">
 <div class="dinhdang"><!--định dạng chung-->
 <h1>Hành Trình Tuyến</h1>
 <div id="noidung"><!--định dạng nd-->
 <table style= "width:100%" align="center" border="1">
  <tr>
     <th rowspan="2">Mã Số Xe</th>
     <th colspan="3">Hành trình tuyến</th>
  </tr>
   <tr>
     <th>Trạm 1</th>
     <th>Trạm 2</th>
     <th>Tram 2</th>
    </tr>
	<?php
				$conn=mysqli_connect("localhost","root","","dulieu");
				if (!$conn)
				{
					die("Kết nối lỗi: " . mysqli_connect_error());
					
				}
				$sql="select * from hanhtrinh";
				$kq=mysqli_query($conn,$sql);
				if (mysqli_num_rows($kq) > 0)
				{
					while($row = mysqli_fetch_assoc($kq))
					{
						echo "<tr>";
						echo "<td>";
							echo $row['masxe'];
						echo "</td>";
						echo "<td>";
							echo $row['tram1'];
						echo "</td>";
						echo "<td>";
							echo $row['tram2'];
						echo "</td>";
						echo "<td>";
							echo $row['tram3'];
						echo "</td>";
					
					}
				}