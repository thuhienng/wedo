

<div id="maincontent"><!--phần bao content-->
 <div id ="content">
 <div class="dinhdang"><!--định dạng chung-->
 <h1>Lịch giờ</h1>
 <div id="noidung"><!--định dạng nd-->
<form align="center" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
            <tr>
			<td>
				Nơi đi: <select name="noidi">
				
				    <option value="qnhon" selected="selected"> Quy Nhơn </option>
					<option value="Nhơn Hải" > Nhơn Hải </option>
					<option value="Siêu thị"> Siêu thị </option>
					<option value="Đại học Quy Nhơn"> Đại học Quy Nhơn </option>
					</select>
					Nơi đến: <select name="noiden">
					
					<option value="qnhon"> Quy Nhơn </option>
					<option value="Sieu thi"> Siêu thị </option>
					<option value="D"> Đại học Quy Nhơn </option>
					<option value="nhai" selected="selected"> Nhơn Hải </option>
					</select>
					<input type = "submit" name ="search" value = "Tìm">
				</td>
				<tr></tr>
				<br></br>
						<table style= "width:100%"  align = "center" border="1">
						<tr>
				        <td align = "center"><b>Nơi đi</b></td>
				        <td align = "center"><b>Nơi đến</b></td>
						<td align = "center"><b>Bến</b></td>
						<td align = "center"><b>Giờ chạy</b></td
			            </tr>
						<tr>
				<?php
				if(isset($_POST['search']))
				{
					$noidi= $_POST['noidi'];
					$noiden= $_POST['noiden'];
				$conn=mysqli_connect("localhost","root","","dulieu");
				$conn->query("SET NAMES 'utf8'");
			
				if (!$conn)
				{
					die("Lỗi kết nối: " . mysqli_connect_error());
				}
				$sql="select * from lichchay where ndi='".$noidi."' and nden='".$noiden."'";
				$kq=mysqli_query($conn,$sql);
				if (mysqli_num_rows($kq) > 0)
				{
					while($row = mysqli_fetch_assoc($kq))
					{
											
						echo "<td align = center>";
							echo $row['noidi'];
						echo "</td>";
						echo "<td align = center>";
							echo $row['noiden'];
						echo "</td>";
						echo "<td align = center>";
						echo $row['ben'];
						echo "</td>";
						echo "<td align = center>";
							echo $row['gio'];
						echo "</td>";
						echo "</tr>";
					
					}
				}
				else
				{
					echo "<br>";
					echo "<b>Không có tuyến bạn cần</b>";

				}
				}
				
				
			?>
			</tr>
			</table>
</form>
 </div>
  </div>
  </div>
 </div><!--end phần bao content-->