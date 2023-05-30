<!--********************************************************************** 
   Dynamic Page Header
   Property Online Project
   2017-01-23
   Liam Osler
   SUTN Legal Aspects of Surverying
   SUTN Technical Writing
 **********************************************************************-->

<?php $title = 'Property Online Project'?>
<!--Header Load-->
<?php include 'header.php' ;?>

<!--Page Body Contents-->
<body>
	<!--Jumbotron-->
	<?php include 'jumbotron.php' ;?>
	
	<div class = "container-fluid" id="page-wrapper" style = "max-width:1400px"><!--Bootstrap Page Container-->
	<?php include 'nav.php';?>
	
	<a class ="anchor" id="table_of_contents"></a>
	<div class = "row">
	
		<a class ="anchor" id="exec"></a>
		<div class = "row" style="margin-left:10px">
			<?php include 'execsummary.php';?>
		</div>
		
		<div class="col-md-6" class ="col-sm-6" class="col-lg-6" class id="tableofcontents" style = "padding:0px;">
		
		<a class ="anchor" id="table_of_figures"></a>
		<?php include 'tableofcontents.php';?>
		</div>
		
		<div class="col-md-6" class ="col-sm-6" class="col-lg-6" class id="tableofcontents" style = "padding:0px;">
		<?php include 'tableoffigures.php';?>
		</div>
	</div>
	
	
	<a class ="anchor" id="intro"></a>
	<div class = "row">
		<?php include 'intro.php';?>
	</div>
	
	<a class ="anchor" id="problems"></a>
	<div class = "row">
		<?php include 'problems.php';?>
	</div>
	
	<a class ="anchor" id="scope"></a>
	<div class = "row">
		<?php include 'scope.php';?>
	</div>
	
	<a class ="anchor" id="methods"></a>
	<div class = "row">
		<?php include 'methods.php';?>
	</div>
	
	
	<a class ="anchor" id="history"></a>
	<div class = "row">
		<?php include 'history.php';?>
	</div>

	
	<div class ="row">

		<a class ="anchor" id="prop"></a>
		<div class="col-md-6" class ="col-sm-6" class="col-lg-6" class id="property-information" style = "padding:0px;">
			<?php include 'property-information.php';?>
		</div>
		
		<a class ="anchor" id="maps"></a>
		<div class="col-md-6" class ="col-sm-6" class="col-lg-6">
			<?php include 'googlemaps.php';?>
		</div>
	<div class ="row">
	
		<a class ="anchor" id="summary"></a>
		<div class="col-md-6" class ="col-sm-6"  class="col-lg-6" style = "padding: 0px;">
			<?php include 'summary.php';?>
		</div>
		
		<a class ="anchor" id="chain"></a>
		<div class="col-md-6" class ="col-sm-6" class="col-lg-6" style ="padding:0px;">
			<?php include 'chainoftitle.php';?>
		</div>
		
	</div>
	
		
	<a class ="anchor" id="conclusion"></a>
	<div class = "row">
		<?php include 'conclusion.php';?>
	</div>
	
	<a class ="anchor" id ="docs"></a><!--Relevant Document Table-->
	<div class ="row" style = "overflow-x: auto;">
		<?php include 'documenttable.php';?>
	</div>
	
	<a class ="anchor" id="refs"></a>	
	<div class ="row">
		<?php include 'references.php';?>
	</div>
	
	</div>
	</div><!--Bootstrap Page Container Ends -->

</body>
	<?php include 'footer.php';?>