        
        
            <div class="footer" id="aboutus">
                <i><a href="#top">goto top </a></i>
                <h1> &copy Myvalley</h1>
            </div>
        </div>
        <script>//logout
			function logout(control){
				if (control.innerHTML=="logout"){
					if(confirm("are you sure")){
						xhr= new XMLHttpRequest();
						xhr.onreadystatechange = function (){
							if (this.readyState == 4 && this.status == 200){
								control.innerHTML =this.responseText;
							}
						};
						xhr.open('get',"<?php echo site_url().'/logout.php';?>",true);
						xhr.send();
						document.getElementById('notify').style.display="none";
						x="<?php echo site_url().'/login.php';?>"  
						document.getElementById('content-like').innerHTML="<a href="+x+">login</a> first";
						document.getElementById("notify").style.display="none";
					}
				}
			}
		</script>
	</body>
</html>