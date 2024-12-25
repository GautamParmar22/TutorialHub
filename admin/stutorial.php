
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TutorialHub</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<script src="ckeditor/ckeditor.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<?php include "sidebar.php";?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Tutorials</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><span>Add Tutorial</span></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="stdb.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Select Language</label>
									
									<select name="tname" class="form-control">
									<?php 
									include "con1.php";
									$qry="select lname from languages";
									$res=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_assoc($res))
									{
									?>
									<option ><?php echo $row["lname"];?></option>
									<?php } ?>
									</select>
									</div>
									<div class="form-group">
									<label>Enter tutorial</label>
									<textarea class="ckeditor" name="ttutorial"></textarea>
								</div>
								<div class="form-group">
									<label>Enter Image</label>
									<input type="file" name="timage"class="form-control" required placeholder="Insert Language">
								</div>
								<div class="form-group">
									
									<input type="submit" name="add" value="Add" class="btn btn-primary">
								</div>
																
								
																
								
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	
		

		
					<div class="panel-heading">Tutorials Display</div>
					
						<table data-toggle="table"  >
						    <thead>
						    <tr>
						        <th>Item ID</th>
						        <th>Name</th>
								<th>tutorial</th>
								<th>Image</th>
								<th>Delete</th>
						        <th>Edit</th>
						    </tr>
							
						    </thead>
							<?php
								include "con1.php";
							    $qry="select * from tutorials";
							    $res=mysqli_query($conn,$qry);
							    while($row=mysqli_fetch_assoc($res))
							{
							?>
							<tr>
								<td data-field="id"><?php echo $row["tid"];?></td>
								<td data-field="id"><?php echo $row["tname"];?></td>
								<td data-field="id"><?php echo $row["ttutorial"];?></td>
								<td data-field="id">
								<?php
									if($row["timage"]=="")
									{
										echo "no photo found";
									}
									
									else
									?>
										<img src="upload/<?php echo $row["timage"];?>" height="100" width="150">
								
								
								
								</td>
								
								<td><a href="stutorialdelete.php?tid=<?php echo $row["tid"];?>" onClick="return confirm('Really you sure to Delete Id no (<?php echo $row["sbid"];?> )');"><input type="submit" name="Delete" value="Delete" class="btn btn-primary"  placeholder="Insert Language"></a></td>
								<td><a href="stutorialedit.php?tid=<?php echo $row["tid"];?>" onClick="return confirm('Really you sure to Edit Id no (<?php echo $row["sbid"];?> )');"><input type="submit" name="Edit" value="Edit" class="btn btn-primary"  placeholder="Insert Language"></a></td>
							</tr>
						
					</div>
				</div>
			</div><?php } ?></table>
			
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

	

</html>

