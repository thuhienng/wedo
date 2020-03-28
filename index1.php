<?php session_start(); ?>
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
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
</div>
<marquee width="100%"><b>Xe buýt Quy Nhơn hân hạnh được phục vụ quý khách!</b></marquee>

 
<?php include "menutop1.php"?>
<?php include "maincontent.html"?>
<?php include "menuright.html" ?>
<?php include "tuyendung.html"?>

<?php include "chantrang.html" ?>
 </div>
</body>
<script>
      //khai báo biến slideIndex đại diện cho slide hiện tại
      var slideIndex;
      // KHai bào hàm hiển thị slide
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex].style.display = "block";  
          dots[slideIndex].className += " active";
          //chuyển đến slide tiếp theo
          slideIndex++;
          //nếu đang ở slide cuối cùng thì chuyển về slide đầu
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          //tự động chuyển đổi slide sau 5s
          setTimeout(showSlides, 5000);
      }
      //mặc định hiển thị slide đầu tiên 
      showSlides(slideIndex = 0);


      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>
</html>