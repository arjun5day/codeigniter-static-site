		<!--header menu start-->
		<div class="navbar navbar-default" role="navigation">
        <img  class="img-responsive" style="margin:0 auto; width:100%" src="<?php echo base_url();?>images/site/bannerbg.jpg" />
			<div class="container">
				<center><h3>User Login...</h3></center>
			</div><!--container close -->
		</div><!--navbar close-->
		<!--header menu start close-->			

			
		
		<!--app body container start-->
		<div class="container">
			 <form onsubmit="return blankCheck();">
			 	<table align="center">
					<tr>
						<td>User Name:</td>
						<td><input type="text" id="username" name="username" placeholder="Your User Name" /></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" id="password" name="password" placeholder="Your Password"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="Login" /></td>
						<td><a href="<?php echo base_url();?>home">Cancel</a></td>
					</tr>
                    <tr>
                    	<td colspan="2"><div id="error" class="error"></div></td>
                    </tr>
				</table>
			</form>
		</div>
		<!--app body container close->
		
		
		<!--app footer part start-->
		<div class="navbar navbar-default">
				<center>
					copyright &nbsp; www.pandayarjun.com.np 2013
				</center>	
		</div><!--navbar close-->
		<!--app footer part close-->	
        <script type="text/javascript">
			function blankCheck(){
				var un = document.getElementById("username");
				var pass= document.getElementById("password");
				
				var error = "";
				if(un.value==""){
					error = error + "Please enter User Name !<br>";
				}
				if(pass.value==""){
					error = error + "Please enter Password !<br>";
				}
				if(error!=""){
					document.getElementById("error").innerHTML = error;
					return false;
				}
				return true;
			}
		</script>