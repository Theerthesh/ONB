 <?php
					$con=mysqli_connect('localhost','root','');
				
					mysqli_select_db($con,'eg');
					
					if(isset($_POST['bu']))
                    {
						$usn=$_POST['std'];
						$tt=$_POST['title'];
						$cont=$_POST['content'];
						$image=$_POST['pic'];
						
						if($tt!="" && $cont!="")
						{
							$result="INSERT INTO notification (usn,title,description,image) VALUES ('$usn','$tt','$cont','$image')";
							if($con->query($result)===TRUE)
							{
								?>
							<h6 style="color:purple;font-size:150%;">Sent successfully</h6>
							<?php
							}
							else
							{
								$con->error;
							}
						}
						else
						{
							?>
							<h6 style="color:red;font-size:150%;">fill fields</h6>
							<?php
						}
					}
				?>