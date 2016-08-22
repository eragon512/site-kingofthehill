<!DOCTYPE html>
<html>
<head>
	<title>CareerCrucible Assignment</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		.modal {
			overflow-y: auto;
			}
		.modal-open {
			overflow: auto;
		}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="container">
	<div>
		<div></div>
		
		<div id="instructions" class="container">
			<div class="panel panel-default">
				<div class="panel-heading" align="center">
					Instructions
				</div>
				<!-- <div class="panel-body"></div> -->
				<ul class="list-group">
					<li class="list-group-item">
						<p>
							You may use the following items during the test:
							<ol>
								<li>Formula sheet supplied by training provider (This may not be part of a course manual.)</li>
								<li>Blank kill sheets and blank paper (for calculation work)</li>
								<li>Reference tables specific to the course level (e.g., weights, pipe or annular displacements/capacities) that may not be part of a course manual</li>
								<li>Handheld calculator—Calculator should be non-programmable type and preferably supplied by training provider.</li>
							</ol>
						</p>
					</li>

					<li class="list-group-item">Other materials such as your notes may not be used.</li>
					<li class="list-group-item">Cell phones may not be used during the test. Your phone should be turned off for the duration of the exam.</li>
					<li class="list-group-item">The testing database will permit you to change answers, skip questions, and go back to skipped questions. All unanswered questions at the expiration of the testing period will be marked incorrect.</li>
					<li class="list-group-item">During the testing period, you may ask questions if you need clarification of a question. Please indicate to the Proctor that you wish to ask a question. The Proctor will call the instructor, who will answer your question. The Proctor will be present as the instructor answers your question.</li>
					<li class="list-group-item">If you must leave the room for any reason, testing time will continue to decrease. The test will not be paused.</li>
					<li class="list-group-item">When you have completed your exam and submitted your answers, please meet with your instructor for your score report</li>
				</ul>
			</div>
		</div>

		<div id="test-area" class="container">
			<div class="panel panel-default">
				<div class="panel-heading" align="center">
					Drilling Operations, Driller, Surface
				</div>
				<div class="panel-body">
					<div class="container-fluid" align="center">
						<div class="panel panel-sm panel-default">
							<div class="panel-heading" align="center">
								Test Information
							</div>
							<div class="panel-body">
								Passing Score: 70% or greater<br />
								Retake Score: 50% or greater<br />
								Test Limit: 2 hrs
							</div>
						</div>

						<div class="panel panel-sm panel-default">
							<div class="panel-heading" align="center">
								Test Preferences
							</div>
							<div class="panel-body">
								<form class="form-inline">
									<div class="form-group">
										<label for="language" class="control-label">Language: </label>
										<select name="language" class="form-control">
											<option value="en">English</option>
										</select>
									</div>
									<div class="form-group">
										<label for="units" class="control-label">Units: </label>
										<select name="units" class="form-control">
											<option value="standard">Standard</option>
										</select>
									</div>
								</form>
							</div>
						</div>

						<div id="test-start">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Start Test</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<form action="result.php" method="POST" class="">
										<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Test Questions</h4>
											</div>
											<div class="modal-body">
												<?php
													require('load_question.php');
													load_all_questions();
												?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>