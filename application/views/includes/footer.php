		<!--footer part start-->
		<div class="navbar navbar-default">
			<div class="container">
				<div class="col-md-4">
				  <ul class="nav nav-pills nav-stacked">
					<li><a href="#">Download</a></li>
					<li><a href="#">Tutorials</a></li>
					<li><a href="#">Design & Development</a></li>
					<li><a href="<?php echo base_url();?>home/login">CI Sample...</a></li>
				  </ul>					
				</div>
				<div class="col-md-4">
						<h3 style="margin-top:5px;"><marquee>Direct Contact Me:</marquee></h3>
						<center>Arjun Panday<br />
						Cell: +61416770160<br />
						Email: electronicarjun@gmail.com		</center>		
        		</div>
				<div class="col-md-4" align="center" style="text-decoration:none">
					<a href="https://www.facebook.com/pages/pandayarjuncomnp/126265774229788"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
					<a href="https://www.linkedin.com/in/arjun-panday-0a1293133/"><i class="fa fa-linkedin-square fa-2x"></i></a>                                        
				</div>	
			</div>
			<hr />
				<center>
					copyright &nbsp; www.pandayarjun.com.np 2013
				</center>	
		</div><!--navbar close-->
		<!--footer part close-->		
		
		<!--popup contactform start-->
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Contact Me</h4>
					</div>
					<div class="modal-body">
						<form method="post" action="<?php echo base_url();?>home_controller/contact_validation" role="form" class="form-vertical">
						<div class="form-group">
							<label for="search">Name:</label>
							<input type="text" name="name" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name'); ?></span>						
						</div>
						<div class="form-group">
							<label for="search">E-mail ID:</label>
							<input type="text" name="email" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email'); ?></span>						
						</div>	
						<div class="form-group">
							<label for="search">Subject:</label>
							<input type="text" name="subject" class="form-control" id="subject" />
                    		<span class="text-danger"><?php echo form_error('subject'); ?></span>						
						</div>						
						<div class="form-group">
							<label for="search">Message:</label>
							<textarea name="message" class="form-control" id="message"></textarea>
							<span class="text-danger"><?php echo form_error('message'); ?></span>						
						</div>						
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary" name="submit" value="Send" />
						<a class="btn btn-default" data-dismiss="modal">Close</a>
					</form>
					<?php echo $this->session->flashdata('msg'); ?>					
					</div>
				</div>		
			</div>
		</div> 
		<!--popup contactform close-->	
		<script>
			function validate(){
				var key = document.getElementById("keyword").value;
				if(key==""){
					alert("please type keyword to search");
				}
				else{
					alert ("wait site is developing");
				}
			}
		</script>	
					
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   		<script src="<?php echo base_url();?>js/jquery-2.1.3.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>js/sitejs.js"></script>
	</div><!--wrapper close-->
  </body>
</html>
		
		
		
		
		
		
		
		
		
		
		
		
	