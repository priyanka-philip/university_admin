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
  <!---flash alert--->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=<?php echo base_url("assets/css/pe-icon-7-stroke.css");?> rel="stylesheet" />

</head>
<body>
<style>
form .error {
  color: #ff0000;
}
</style>
<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image=<?php echo base_url("assets/img/sidebar-7.jpg");?>>

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

<?php $page_path = trim($_SERVER['REQUEST_URI'], '/');?>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php if(isset($course_data)){ ?>Update Course<?php } else{ ?>Add Course<?php } ?></h4>
                            </div>
                            <div class="content">
                                <form id="course_frm" method='POST' name="course_frm" enctype="multipart/formdata" action=<?php echo base_url("add_course/insert_course");?>>
                              
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Programme Title</label>
                                                <input type="text" class="form-control" required name="course_title" id="course_title" placeholder="Title" value="<?php if(isset($course_data)){echo $course_data[0]->course_title;}?>" >
												<input type="hidden" name="id" id="id" value="<?php if(isset($course_data)){ echo $course_data[0]->id;}?>">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Degree Qualification</label>
                                                <input type="text" class="form-control" required placeholder="Qualification" id="qualification" name="qualification" value="<?php if(isset($course_data)){echo $course_data[0]->qualification;}?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>UCAS Code</label>
                                                <input type="text" class="form-control" required name="ucas_id" id="ucas_id" placeholder="UCAS Code" value="<?php if(isset($course_data)){ echo $course_data[0]->ucas_id;}?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Key Words</label>
                                                <input type="text" class="form-control" name="keywords" id="keywords" placeholder="Key Words" value="<?php if(isset($course_data)){echo $course_data[0]->keywords;}?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea rows="5" class="form-control" name="description" required id="description" placeholder="Degree Programme Description "><?php if(isset($course_data)){ echo $course_data[0]->description;}?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(isset($course_data)){ ?><button type="submit" name="add_course" class="btn btn-info btn-fill pull-right">Update Course</button><?php } else{ ?>
                                    <button type="submit" name="add_course" class="btn btn-info btn-fill pull-right">Add Course</button><?php } ?>
                                    <div class="clearfix"></div>
                                </form>
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
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<!--  Charts Plugin -->
	<script src=<?php echo base_url("assets/js/chartist.min.js");?>></script>

    <!--  Notifications Plugin    -->
    <script src=<?php echo base_url("assets/js/bootstrap-notify.js");?>></script>

    <!--  Google Maps Plugin    -->
   

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src=<?php echo base_url("assets/js/light-bootstrap-dashboard.js?v=1.4.0");?>></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src=<?php echo base_url("assets/js/demo.js");?>></script>
	<!--alert flash-->
     <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
$(document).ready(function() {
$("#course_frm").validate({
	errorClass: "error fail-alert",
validClass: "valid success-alert"
});
});
</script>

<script>
<?php if(isset($_SESSION['error_msg'])){?>
alertify.set('notifier','position', 'top-right');
<?php if($_SESSION['error_msg']==0){?>
 alertify.error('Already exist');
<?php }else{?>
alertify.success('Course Added Successfully');
<?php }
unset($_SESSION['error_msg']);
}?>
</script>
</html>
