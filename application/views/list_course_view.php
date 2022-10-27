<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href=<?php echo base_url("assets/img/favicon.ico");?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ABDN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href=<?php echo base_url("assets/css/bootstrap.min.css");?> rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href=<?php echo base_url("assets/css/animate.min.css");?> rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=<?php echo base_url("assets/css/light-bootstrap-dashboard.css?v=1.4.0");?> rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=<?php echo base_url("assets/css/demo.css");?> rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=<?php echo base_url("assets/css/pe-icon-7-stroke.css");?> rel="stylesheet" />
</head>
<body>

<div class="wrapper">
     <div class="sidebar" data-color="blue" data-image=<?php echo base_url("assets/img/sidebar-7.jpg");?>>

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

<?php  $page_path =explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$page_path=end($page_path);?>
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                  Admin-ABDN
                </a>
            </div>

            <ul class="nav">
                <li class="<?php if($page_path=='course_list'){echo 'active';}?>">
                    <a href="<?php echo base_url('add_course/course_list');?> ">
                        <i class="pe-7s-study"></i>
                        <p>Courses</p>
                    </a>
                </li>
                <li class="<?php if($page_path!='course_list'){echo 'active';}?>">
                    <a href="<?php echo base_url();?>">
                        <i class="pe-7s-note"></i>
                        <p>Add Course</p>
                    </a>
                </li>
                
              
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Course Page</a>
                </div>
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                   


                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Course List</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Course Code</th>
                                    	<th>Title</th>
                                    	<th>Qualification</th>
                                    	<th>UCAS Code</th>
                                    	<th>Keywords</th>
                                    	<th>Description</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php $i=1; foreach($course_list as $listvalue){?>
                                        <tr>
                                        	<td><?php echo $i;?></td>
                                        	<td><?php echo $listvalue->course_code;?></td>
                                        	<td><?php echo $listvalue->course_title;?></td>
                                        	<td><?php echo $listvalue->qualification;?></td>
                                        	<td><?php echo $listvalue->ucas_id;?></td>
                                        	<td><?php echo $listvalue->keywords;?></td>
                                        	<td style="max-width:200px; min-width:200px; max-height:50px; min-height:50px; width:200px; height:50px;overflow: hidden;"><?php echo $listvalue->description;?></td>
                                        	<td><span style="padding:9px 9px;"><a href=<?php echo base_url("add_course/edit_course_details?id=".$listvalue->id);?>><i class="pe-7s-tools"></i></a></span><span style="padding:9px 9px;"><a href="<?php echo base_url("add_course/delete_course_details?id=".$listvalue->id);?>"><i class="pe-7s-trash"></i></a></span></td>
                                        	
                                        </tr>
									<?php $i++;} ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->

    <script src=<?php echo base_url("assets/js/jquery.3.2.1.min.js");?> type="text/javascript"></script>
	<script src=<?php echo base_url("assets/js/bootstrap.min.js");?> type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src=<?php echo base_url("assets/js/chartist.min.js");?>></script>

    <!--  Notifications Plugin    -->
	

    <script src=<?php echo base_url("assets/js/bootstrap-notify.js");?>></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src=<?php echo base_url("assets/js/light-bootstrap-dashboard.js?v=1.4.0");?>></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src=<?php echo base_url("assets/js/demo.js");?>></script>
<script>
/* $('#datatbl').dataTable({
         "responsive": true,
	
} ); */
</script>

</html>
