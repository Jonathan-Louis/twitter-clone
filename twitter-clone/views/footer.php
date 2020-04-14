	

	<footer class="footer mt-auto py-3">
		<div class="container">
			<span class="text-muted">&copy; My Twitter Clone 2020.</span>
		</div>
	</footer>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

	<!-- Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	
		<div class="modal-dialog modal-dialog-centered" role="document">
		
			<div class="modal-content">
			
				<div class="modal-header">
				
					<h5 class="modal-title" id="loginModalTitle">Login</h5>
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					
						<span aria-hidden="true">&times;</span>
						
					</button>
					
				</div>
				
				<div class="modal-body">

					<form>
					
						<input type="hidden" name="loginActive" id="loginActive" value="1">
						
						<div class="alert alert-danger" id="loginAlert"></div>
						
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
						</div>
						
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password">
						</div>
						
					</form>
					
				</div>
					
				<div class="modal-footer">
				
					<button id="toggleLogin" class="btn btn-info">Sign Up</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" id="loginButton" class="btn btn-primary">Login</button>	
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<script type="text/javascript">
	
		$("#toggleLogin").click(function() {
			
			if($("#loginActive").val() == "1"){
				
				$("#loginActive").val("0");
				
				$("#loginModalTitle").html("Sign Up");
				
				$("#loginButton").html("Sign Up");
				
				$("#toggleLogin").html("Login");
				
			} else {
				
				$("#loginActive").val("1");
				
				$("#loginModalTitle").html("Login");
				
				$("#loginButton").html("Login");
				
				$("#toggleLogin").html("Sign Up");
				
			}
			
		});
		
		
		$("#loginButton").click( function() {
			
			$.ajax({
					type: "POST",
					url: "actions.php?action=loginSignup",
					data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
					success: function(result) {
						if(result == "1"){
							
							window.location.assign("http://jonathan-louis-com.stackstaging.com/twitter-clone/");
							
						} else{
							
							$("#loginAlert").html(result).show();
							
						}
					}
				})
		});
		
		$(".toggleFollow").click( function(){
			
			var id = $(this).attr("data-userId");
				
			$.ajax({
					type: "POST",
					url: "actions.php?action=toggleFollow",
					data: "userid=" + $(this).attr('data-userId'),
					success: function(result) {
						
						if(result == "1"){
							
							$("button[data-userId='" + id + "']").html("Follow");
							
						} else if(result == "2"){
							
							$("button[data-userId='" + id + "']").html("Unfollow");
							
						}
						
					}
				});
			
			
		});
		
		$("#postTweetButton").click(function(){
			
			$.ajax({
					type: "POST",
					url: "actions.php?action=postTweet",
					data: "tweetContent=" + $("#tweetContent").val(),
					success: function(result) {
						
						if(result == "1"){
							
							$("#tweetSuccess").show();
							$("#tweetFail").hide();
							
						} else if(result != ""){
							
							$("#tweetFail").html(result).show();
							$("#tweetSuccess").hide();
							
						}
						
					}
				})
			
		});
	
	</script>
  
  
  </body>
</html>