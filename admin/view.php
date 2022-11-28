	<?php
													include("db_connect.php");
													$sql="SELECT * FROM addwarden_tb";
													$result=$conn->query($sql);
													if($result->num_rows>0)
													{
														echo "
													<table id='datatables-example' class='table table-striped table-bordered dataTable no-footer' width='100%'' cellspacing='0' role='grid' aria-describedby='datatables-example_info' style='width: 100%;''>
														<thead>
															<tr role='row'>
																<th class='sorting_asc' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-sort='ascending' aria-label='Name: activate to sort column descending' style='width: 169px;''>Name</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Position: activate to sort column ascending' style='width: 263px;'>Username</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Password</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Number</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Place</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Sex</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Age: activate to sort column ascending' style='width: 62px;'>Photo</th>
															</tr>
														</thead>";
														while($row=$result->fetch_assoc())
														{
															echo "
														<tbody>


															<tr role='row' class='odd'>
																<td class='sorting_1'>".$row['name']."</td>
																<td>".$row['username']. "</td>
																<td>".$row['password']."</td>
																<td>".$row['mobile']."</td>
																<td>".$row['place']."</td>
																<td>".$row['sex']."</td>
																<td><img src=".'images/'.$row['image']." width='100' height='100'></td>
																<td>
																<a href=delete.php?id=".$row['id']."><span style='color:#fff;' class='btn btn-danger glyphicon glyphicon-trash' title='Delete post'></span></a>
																</td>
																</tr>
														</tbody>";
														}
													echo "</table>";
													}
													else
													{
														echo "0 result";
													}
													$conn->close();
													?>