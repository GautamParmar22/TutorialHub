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
				<h1 class="page-header"> Languages</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><span>Insert Languages</span></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="languagedb.php">
							
								<div class="form-group">
									<label>Enter Language</label>
									<input type=" text" name="lname"class="form-control" required placeholder="Insert Language">
								</div>
								<div class="form-group">
									<label>Enter Defination</label>
									<input type=" text" name="ldefination"class="form-control" required placeholder="Insert Defination">
								</div>
								<div class="form-group">
									
									<input type="submit" name="Add Language" value="Add Language" class="btn btn-primary"  placeholder="Insert Language">
								</div>
																
								
																
								
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	
		

		
					<div class="panel-heading">Language Display</div>
					<div class="panel-body">
						<table data-toggle="table"  >
						    <thead>
						    <tr>
						        <th>Item ID</th>
						        <th>Item Name</th>
								<th>Defination</th>
								<th>Delete</th>
						        <th>Edit</th>
						    </tr>
							
						    </thead>
							<?php
								include "con1.php";
								$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
							    $qry="select * from languages";
							    $res=mysqli_query($conn,$qry);
							    while($row=mysqli_fetch_assoc($res))
							{
							?>
							<tr>
								<td data-field="id"><?php echo $row["lid"];?></td>
								<td data-field="id"><?php echo $row["lname"];?></td>
								<td data-field="id"><?php echo $row["ldefination"];?></td>
								<td><a href="ldelete.php?lid=<?php echo $row["lid"];?>"><input type="submit" name="Delete" value="Delete" class="btn btn-primary"  placeholder="Insert Language"></a></td>
								<td><a href="ledit.php?lid=<?php echo $row["lid"];?>"><input type="submit" name="Edit" value="Edit" class="btn btn-primary"  placeholder="Insert Language"></a></td>
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
