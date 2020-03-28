<session_start();
<html xmlns ="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Xe buýt Quy Nhơn</title>
<link rel="stylesheet" href="Style.css"> <!--link tới file css-->

</head>
<body>
<div id ="main"><!--bao toàn bộ khung website-->
 <div id ="slideanh"><!--phàn banner-->
 <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bfbc28f9-8251-4ef3-86b3-631a807eccf6/ddkly4e-a341e7fa-bfbd-4c2d-b496-204f66c1e4b0.png/v1/fill/w_1280,h_575,q_80,strp/1_by_qiuxian_ddkly4e-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTc1IiwicGF0aCI6IlwvZlwvYmZiYzI4ZjktODI1MS00ZWYzLTg2YjMtNjMxYTgwN2VjY2Y2XC9kZGtseTRlLWEzNDFlN2ZhLWJmYmQtNGMyZC1iNDk2LTIwNGY2NmMxZTRiMC5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.w8vAezDUIoId3S2YsoMteYcUcwRB9ApxfJ_fr4b-CYw" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-pink-petals-international-nurses-day-background-design-petalsholiday-backgroundnurses-day-image_70563.jpg" style="width:100%">
          
        </div>

        <div class="mySlides fade">
          <img src="https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-pink-romantic-rose-background-design-flower-backgroundpetalholiday-backgroundhand-image_70050.jpg" style="width:100%">

        </div>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
</div>
<marquee width="100%"><b>Xe buýt Quy Nhơn hân hạnh được phục vụ quý khách!</b></marquee>

<?php include "menutop.html"?>
 
<form action="#" method="post">
		<table >
			<tr>
				<td colspan="2"><h3>Thêm bài viết mới</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Tiêu đề bài viết :</td>
				<td><input type="text" id="title" name="title"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Nội dung :</td>
				<td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm bài viết">
				<input type="submit" name="btnhuy" value="Hủy"></td>
			</tr>
 
		</table>
		
	</form>
<body>

<script type="text/javascript" src="web/chayslide.js"></script>