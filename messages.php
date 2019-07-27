<?php require ('header.php'); ?>
	<div class="container" style="margin: 50px;">
		<div class="row">
		   <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Date Submitted</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            	$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "cadef";

								$conn = mysqli_connect($servername, $username, $password, $dbname);

								if (isset($_GET['sid'])) {
									$sid= (int)$_GET['sid'];
									$sql="DELETE FROM complaint
									WHERE id=$sid";
									$result1 = mysqli_query($conn, $sql);

								}
								$perpage = "20";
                                if(isset($_GET['page']) & !empty($_GET['page'])){
                                    $curpage = $_GET['page'];
                                }else{
                                    $curpage = "1";
                                }

                                $start = ($curpage * $perpage) - $perpage;

                                $PageSql = "SELECT * FROM `complaint`";
                                $pageres = mysqli_query($conn, $PageSql);
                                $totalres = mysqli_num_rows($pageres);

                                $endpage = ceil($totalres/$perpage);
                                $startpage = 1;
                                $nextpage = $curpage + 1;
                                $previouspage = $curpage - 1;



                            	$sql = "SELECT * FROM complaint
                            	ORDER BY id DESC
           						LIMIT $start, $perpage";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) 
								    	{ ?>


								    	<tr>
	                                        <td>
	                                            <label><?php echo $row["name"]; ?></label>   
	                                        </td>
	                                     
	                                        <td>
	                                            <?php echo $row["email"]; ?>
	                                        </td>

	                                        <td>
	                                            <?php echo $row["subject"]; ?>
	                                        </td>
	                                        <td>
	                                            <?php   
		                                            if ($row["status"]==NULL) 
		                                            { ?>
		                                            	<span class="btn btn-warning btn-xs">Unread</span>
		                                            <?php }
		                                            else
		                                            { ?>
		                                            	<span class="btn btn-success btn-xs">Read</span>
		                                            <?php
		                                        	}
	                                            ?>
	                                        </td>


	                                        
	                                        <td>
	                                        	<form method="post" action="read.php">
                                                    <input type="hidden"  Value="<?php echo $row['id'];?>" name="id"/>
                                                	<button type="submit" class="btn btn-primary">View</button>
                                                </form>
	                                        </td>

	                                        <td>
	                                            <?php echo $row["date_entered"]; ?>
	                                        </td>


	                                        <td>
	                                        	<a class="btn btn-danger btn-xs" href="messages.php?sid=<?php echo $row['id'] ?>">Delete</a>
	                                        </td>
	                                    </tr>

								    <?php }
								} 
								else 
								{
								    echo "0 results";
								}
                            ?>
                            
                            
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <?php if($curpage != $startpage){ ?>
                            <li><a href="?page=<?php echo $startpage ?>">First</a></li>
                        <?php } ?>

                        <?php if($curpage >= 2){ ?>
                             <li><a href="?page=<?php echo $previouspage ?>"><span class="sr-only">Prev(<?php echo $previouspage ?>)</span><i class="fa  fa-angle-left"></i></a></li>
                        <?php } ?>
                   
                        <li class="active"><a href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>

                        <?php if($curpage != $endpage){ ?>
                           <li><a href="?page=<?php echo $nextpage ?>"><span class="sr-only"><?php echo $nextpage ?></span><i class="fa fa-angle-right"></i></a></li>
                        <?php } ?>

                        <?php if($curpage != $endpage){ ?>
                            <li><a href="?page=<?php echo $endpage ?>">Last</a></li>
                        <?php } ?>
                    </ul>  
                </div>
		</div>
	</div>
<?php require('footer.php'); ?>	