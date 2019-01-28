<!DOCTYPE html>
<html>
<head>
	<title>FB</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<div class="icon">
			<a href="#"><i class="fa fa-facebook-official" id="iconf"></i></a>
		</div>
		<div class="search">
			<input type="text" id="search" placeholder="Tìm kiếm">
		
		</div>
		<div class="btnSearch"> <button id="btnSearch"><i class="fa fa-search" font-size = 30px></i></button> </div>	
		<div class="imgicon"> <img id="iconlon" src="img/icon.png"> </div>
		<div class= "ten"> Ân | Trang chủ | Tạo </div>
		<div class = "thongbao">  <i class="fa fa-bell"></i> </div>
	</div>
	<div class="container">		
		<div class="content">
			<div class="leftmenu">
				<ul>
					<li><a href="#"> <i class="fa fa-list-alt"></i> Bảng tin</a></li>
					<li><a href="#">Messenger</a></li>
					<li><a href="#">Watch</a></li>
					<li><a href="#">Marketplace</a> </li>
				</ul>
			</div>
			<div class="middle">
				<div class="post">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="c-header">
							<div class="c-h-inner">
								<ul>	
									<li style="border-right:none;"><img src="img/icon3.png"></img><a href="#">Update Status</a></li>
									<li><input type="file"  onchange="readURL(this);" style="display:none;" name="post_image" id="uploadFile"></li>
									<li><img src="img/icon1.png"></img><a href="#" id="uploadTrigger" name="post_image">Add Photos/Video</a></li>
									<li style="border: none;"><img src="img/icon2.png"></img><a href="#">Create Photo Album</a></li>
								</ul>
							</div>
						</div>
						<div class="c-body">
							<div class="body-left">
								<div class="img-box">
									<img src="images/profile.png"></img>
									
								</div>
							</div>
							<div class="body-right">
								<textarea class="text-type" name="status" placeholder="Bạn đang nghĩ gì?"></textarea>
							</div>
							<div id="body-bottom">
							<img src="#"  id="preview"/>
							</div>
						</div>
						<div class="c-footer">
							<div class="right-box">
								<ul>
									<li><button class="btn1"><img class="iconw-margin" src="img/iconw.png"></img>Public<img class="iconp-margin" src="img/iconp.png"></img></button></li>
									<li><input type="submit" name="submit" value="Post" class="btn2"/></li>
								</ul>
							</div>
								
						</div>
					</form>	
				</div>

				<div class="baiviet">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="baiviet">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="baiviet">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<?php 
					if(mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo '<div class="baiviet">'. $row['title'].'</div>';
						}
					} else {
						echo "Không có dữ liệu";
					}
				 ?>
			</div>
			<div class="tin">
				
			</div>
			<div class="rightmenu">
				
			</div>
		</div>
	</div>

</body>
</html>