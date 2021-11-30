			<nav class = "navbar navbar-header navbar-dark bg-dark">
			<div class = "container-fluid">
				<div class = "navbar-header">
				
				</div>
				<div class = "nav navbar-nav navbar-right">
					<a href="logout.php" class="text-light"><?php echo $user_name ?> <i class="fa fa-power-off"></i></a>
				</div>
			</div>
		</nav>
		<div id="sidebar" class="bg-cream" style="background-color:#F6EABE;">
			<div id="sidebar-field">
				
			</div>
			<div id="sidebar-field">
				<a href="student.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-columns"> </i></div>  Student List
				</a>
			</div>
			<div id="sidebar-field">
				<a href="attendance.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-list"> </i></div>  Attendance Record
				</a>
			</div>
		
			<div id="sidebar-field">
				<a href="iassub.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-columns"> </i></div>  IAS Student List
				</a>
			</div>

			<div id="sidebar-field">
				<a href="siasub.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-columns"> </i></div>  SIA Student List
				</a>
			</div>

			
			

		</div>
		<script>
			$(document).ready(function(){
				var loc = window.location.href;
				loc.split('{/}')
				$('#sidebar a').each(function(){
				// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
					if($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)){
						$(this).addClass('active')
					}
				})
			})
			
		</script>