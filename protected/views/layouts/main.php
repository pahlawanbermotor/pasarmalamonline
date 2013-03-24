<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/styles/bootstrap.min.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/styles/custom.css" media="screen, projection" />
	</head>
	<body>
	<?php $this->beginContent('/layouts/navigation') ?>
	<?php $this->endContent() ?>
	<div class="container-fluid" id="mainbody">
		<div class="row-fluid topgap">
			<div class="span12 roundborder">
				Pasarmalamonline
			</div>
		</div>
		
		<div class="row-fluid topgap">
			<div class="span3 bs-docs-sidebar topgap">
				 <ul class="nav nav-list bs-docs-sidenav affix" style="margin-top: 3.5em;">
			          <li class=""><a href="#typography"><i class="icon-chevron-right"></i> Typography</a></li>
			          <li class=""><a href="#code"><i class="icon-chevron-right"></i> Code</a></li>
			          <li class=""><a href="#tables"><i class="icon-chevron-right"></i> Tables</a></li>
			          <li class="active"><a href="#forms"><i class="icon-chevron-right"></i> Forms</a></li>
			          <li><a href="#buttons"><i class="icon-chevron-right"></i> Buttons</a></li>
			          <li><a href="#images"><i class="icon-chevron-right"></i> Images</a></li>
			          <li><a href="#icons"><i class="icon-chevron-right"></i> Icons by Glyphicons</a></li>
		        </ul>

			</div>
			<div class="span9 roundborder">
			<?php echo $content; ?>
			<?php echo str_repeat('<br/>', 100);?>
			</div>
		</div>
		
	</div>
	  
    
    
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-migrate-1.1.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
  </body>
</html>
