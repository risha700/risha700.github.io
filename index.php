<?php ?>
<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Contact|resume.tk'; 
    $to = 'ahbox@outlook.com'; 
    $subject = 'Message from resume-tk ';
    
    $body ="From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    //check phone validation
     if (strlen($_POST['phone']) === 10) {
      $errPhone = 'Please enter a valid phone number';
  }
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 7) {
      $errHuman = 'Your anti-spam is incorrect';
    }


// If there are no errors, send the email
if (!$errName && !$errEmail && !$errPhone && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch within the next 24 hours</div>';

  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}
  }
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
	    <title> A's | Resume </title>
		<meta name="description" content="Ahmed Shehab - Entrepreneur &amp; Managing Director Online Resume, No challenge too big No detail too small" />
		<meta name="keywords" content="ahmed, resume, ahmed shehab resume, digital marketing manager resume , inspiration" />
		<meta name="author" content="The Coder" />
		<meta name="robots" content="noodp"/>
		<link rel="canonical" href="http://ahmed-resume.tk/" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="A's Resume | Entrepreneur &amp; Managing Director" />
		<meta property="og:description" content="Ahmed Shehab Business Consultant Online Resume, No challenge too big No detail too small" />
		<meta property="og:url" content="http:/ahmed-resume.tk/" />
	    <meta name="google-site-verification" content="vRKnNx8hpY-elvArMNkshKYMBQerZPslv31ueawjjS8" />
	
		
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


		  <!-- Latest compiled and minified CSS -->
    
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_topside.css" />
		<!-- Compressed CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" integrity="sha256-itWEYdFWzZPBG78bJOOiQIn06QCgN/F0wMDcC4nOhxY=" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />






		 <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Person",
		"name": "A's Resume – Consultant &amp; Managing Director",
		"url": "http://ahmed-resume.tk/",
		"email": "ahbox@outlook.com",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Degla, Maadi",
			"addressRegion": "Cairo",
			"postalCode": "11728",
			"addressCountry": "EG"
	  }
	  }
	  }
	</script>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88248650-3', 'auto');
  ga('send', 'pageview');

	</script>


	</head>
	<body>
		<div class="container">
			<div class="menu-wrap">
				<nav class="menu-top">
					<div class="profile"><img src="img/risha.png" alt="Ahmed Shehab"/><span>Ahmed Shehab</span></div>
					<div class="icon-list">
						<a href="tel:+201067577732"><i class="fa fa-phone"></i></a>
						<a href="mailto:ahbox@outlook.com"><i class="fa fa-fw fa-envelope-o"></i></a>
						<a href="#myModal" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-comment-o"></i></a>
					</div>
				</nav>
				<nav class="menu-side">
		       		<a href="#objective">Objective</a>
		            <a href="#experience">Experience</a>
		            <a href="#skills">Skills</a>
		            <a href="#about">About</a>
		            <a href="#myModal" data-toggle="modal" data-target="#myModal">Contact</a>
				</nav>
			</div>
			<button class="menu-button" id="open-button" data-toggle="tooltip" title="Press Here!">Open Menu</button>
			<div class="content-wrap">
				<div class="content">
						<div id="large-header" class="large-header">
							<canvas id="demo-canvas"></canvas>
						        <div data-aos="zoom-in" data-aos-duration="1000" class="main-title col-md-12 col-xs-12 col-sm-12 content-center" >
						        	<h1>Ahmed Shehab</h1>
						        	<mark >Entrepreneur &amp; Marketing Director</mark>
						        </div>


								<div data-aos="zoom-in-up" data-aos-duration="3000" class="main-title2 col-md-12 col-xs-12 col-sm-12 content-center" id="objective" >
						             <h2 class="">Career Objective</h2>
						             <p class="lead"> To share a success story with a team working group within the organisational level and contribute a useful margin adding a small better values to the society and self. Through utilizing varied acquired personal experience along with proper tools provided to make out the best practice model.</p>
					             </div>

						</div><!-- Large-Header -->

					<!-- Related demos -->
					<section class="related">
			<!-- Experience Record
			==================== -->
			        <div class="main-cont content-center">
			          <div class="col-xs-12 col-md-10" id="experience">
			              <div class="rec">
			                <span  class="exp-rec glyphicon glyphicon-ok-circle" aria-hidden="true"></span><h2>Professional Record</h2>
			                <br>
			            </div>
			<!-- First Experience
			==================== -->

			          <div>
			            <section>
			            <span class="glyphicon glyphicon-bookmark"></span>
			             <span><strong>Marketing Consultant</strong></span>
			             <span class="pull-right">Currently</span>
			            </section>
			            <div class="secondary-title">
			              <section>
			                <em>e-Life HUB LTD</em><img src="img/exp-logo/logo-cloud.png"> 
			              </section>
			              <section>
			                <span class="glyphicon glyphicon-map-marker"></span><b>Cairo, Egypt</b> 
			              </section>
			            </div>

			            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
			              <div class="panel panel-default">
			                <div class="panel-heading" role="tab" id="headingOne">
			                  <h4 class="panel-title">
			                    <span class="glyphicon glyphicon-briefcase"></span>
			                      Core roles
			                      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			                    
			                  </h4>
			                </div>
			                </a>
			                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                  <div class="panel-body">
			                    <ul class="list-group">
			                        <li class="list-group-item">Producing and planning strategic operating plans and objectives for the long as well as ensuring all short-term targets have been achieved within the timeframe.</li>
			                        <li class="list-group-item">Ensuring the company’s strategic objectives and plans which have been set are being met.</li>
			                        <li class="list-group-item">Analyzing and monitoring the progress of the marketing, sales and finance divisions.</li>
			                        <li class="list-group-item">Reporting the day to day operations statistical reports to the vice president with filed
			                        suggestions and market overview.</li>
			                        <li class="list-group-item">Maintaining sales channels and following up with class A clients from service quality to delivery.</li>
			                     </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div><!-- Section1 Div ends -->

			<!-- Second Experience
			==================== -->

			          <div>
			            <section>
			            <span class="glyphicon glyphicon-bookmark"></span>
			             <span><strong>Customer Service Supervisor</strong></span>
			             <span class="pull-right">Mar-16 To Sep-16</span>
			            </section>
			            <div class="secondary-title">
			              <section>
			                <em>Vodafone VIS</em><img src="img/exp-logo/vodafone.png"> 
			              </section>
			              <section>
			                <span class="glyphicon glyphicon-map-marker"></span><b>Cairo, Egypt</b> 
			              </section>
			            </div>

			            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			          	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			              <div class="panel panel-default">
			                <div class="panel-heading" role="tab" id="headingOne">
			                  <h4 class="panel-title">
			                    <span class="glyphicon glyphicon-briefcase"></span>
			                      Core roles
			                      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			                  </h4>
			                </div>
			                 </a>
			                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                  <div class="panel-body">
			                    <ul class="list-group">
			                      <li class="list-group-item">Assure customer’s technical and billing process and elaborating any activity of advisors within accounts.</li>
			                      <li class="list-group-item">Monitor the service levels and assure quality standards.</li>
			                      <li class="list-group-item">Performance analysis and training support.</li>
			                      <li class="list-group-item">HR and administration duties related.</li>
			                     </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div><!-- Section Div ends --> 
			<!-- Third Experience
			==================== -->

			          <div>
			            <section>
			            <span class="glyphicon glyphicon-bookmark"></span>
			             <span><strong>Senior Sales Supervisor</strong></span>
			             <span class="pull-right">Oct-15 To Feb-16</span>
			            </section>

			            <div class="secondary-title">
			              <section>
			                <em>NFPM - Exeed industry</em> <img src="img/exp-logo/exceed.gif">
			              </section>
			              <section>
			                <span class="glyphicon glyphicon-map-marker"></span><b>Dubai, UAE</b> 
			              </section>
			            </div>
			            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			             <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			              <div class="panel panel-default">
			                <div class="panel-heading" role="tab" id="headingOne">
			                  <h4 class="panel-title">
			                    <span class="glyphicon glyphicon-briefcase"></span>
			                      Core roles
			                      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			                  </h4>
			                </div>
			                </a>
			                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                  <div class="panel-body">
			                    <ul class="list-group">
			                      <li class="list-group-item">Maintain and improve sales flow process for 4 outlets out of 8.</li>
			                      <li class="list-group-item">Stock validation as per business standards.</li>
			                      <li class="list-group-item">Daily reporting and follow up with end customers.</li>
			                      <li class="list-group-item">Assessing sales team KPIs and training support.</li>
			                     </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div><!-- Section Div ends --> 

			<!-- Fourth Experience
			==================== -->

			          <div>
			            <section>
			            <span class="glyphicon glyphicon-bookmark"></span>
			             <span><strong>Key Accounts Manager</strong></span>
			             <span class="pull-right">Dec-14 To Oct-15</span>
			            </section>

			            <div class="secondary-title">
			              <section>
			                <em>Rocket internet - Carmudi</em><img src="img/exp-logo/Carmudi_logo.svg.png"> 
			              </section>
			              <section>
			                <span class="glyphicon glyphicon-map-marker"></span><b>Doha, Qatar</b> 
			              </section>
			            </div>
			            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			             <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
			              <div class="panel panel-default">
			                <div class="panel-heading" role="tab" id="headingOne">
			                  <h4 class="panel-title">
			                    <span class="glyphicon glyphicon-briefcase"></span>
			                      Core roles
			                      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			                  </h4>
			                </div>
			                 </a>
			                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                  <div class="panel-body">
			                    <ul class="list-group">
			                      <li class="list-group-item">Design and improve after sale process.</li>
			                      <li class="list-group-item">Manage & enhance business relationship with partner dealers and OEM’s and building rapports.</li>
			                      <li class="list-group-item">Renegotiate the contract terms & conditions with partners to close deals.</li>
			                      <li class="list-group-item">Assign the potential and convince new market leads to join our unique platform.</li>
			                      <li class="list-group-item">Negotiate exclusive deals with partners & initiate diverse co-branded marketing.</li>
			                      <li class="list-group-item">Ensure listings quality and freshness & quality</li>
			                      <li class="list-group-item">Build and communicate in a personal wise with partner’s and user’s complains.</li>
			                     </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div><!-- Section Div ends --> 

			<!-- Fifth Experience
			==================== -->

			          <div>
			            <section>
			            <span class="glyphicon glyphicon-bookmark"></span>
			             <span><strong>Admin HR Accountant</strong></span>
			             <span class="pull-right">Dec-13 To Dec-14</span>
			            </section>

			            <div class="secondary-title">
			              <section>
			                <em>Talabat Services LTD</em> <img src="img/exp-logo/talabat.png">
			              </section>
			              <section>
			                <span class="glyphicon glyphicon-map-marker"></span><b>Doha, Qatar</b> 
			              </section>
			            </div>
			            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
			              <div class="panel panel-default">
			                <div class="panel-heading" role="tab" id="headingOne">
			                  <h4 class="panel-title">
			                    <span class="glyphicon glyphicon-briefcase"></span>
			                      Core roles
			                      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			                  </h4>
			                </div>
			                 </a>
			                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                  <div class="panel-body">
			                    <ul class="list-group">
			                      <li class="list-group-item">Revenue – Expenses – Advertising Campaigns reporting & analysis.</li>
			                      <li class="list-group-item">Issuing Invoices & balances pursuance.</li>
			                      <li class="list-group-item">Cash & Bank reconciliation.</li>
			                      <li class="list-group-item">Adherence maintaining & other administrative pertaining.</li>
			                      <li class="list-group-item">Preparing statements & managing payrolls.</li>
			                      <li class="list-group-item">Organizing HR activities.</li>
			                      <li class="list-group-item">Public relation & coordination with customers & users.</li>
			                     </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div><!-- Section Div ends --> 

			<!-- Sixth Experience
			==================== -->

			          <div>
			            <section>
			            <span class="glyphicon glyphicon-bookmark"></span>
			             <span><strong>Customer Service Advisor</strong></span>
			             <span class="pull-right">Nov-12 To Oct-13</span>
			            </section>

			            <div class="secondary-title">
			              <section>
			                <em>Egypt Telecom</em> <img src="img/exp-logo/Telecom.png">
			              </section>
			              <section>
			                <span class="glyphicon glyphicon-map-marker"></span><b>Cairo, Egypt</b> 
			              </section>
			            </div>
			            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
			              <div class="panel panel-default">
			                <div class="panel-heading" role="tab" id="headingOne">
			                  <h4 class="panel-title">
			                    <span class="glyphicon glyphicon-briefcase"></span>
			                      Core roles
			                      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			                  </h4>
			                </div>
			                 </a>
			                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                  <div class="panel-body">
			                    <ul class="list-group">
			                      <li class="list-group-item">Customer queries fulfillment and assure the quality standards.</li>
			                      <li class="list-group-item">manage & train a team of 15-25 Agents in a raw & report the KPI’s to the operation management.</li>
			                      <li class="list-group-item">Resolve disconcerting situations easily and timely to maintain client’s satisfaction.</li>
			                      <li class="list-group-item">Conduct in a positive professional attitude manner handling complaints.</li>
			                     </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div><!-- Section Div ends --> 

			<!-- Seventh Experience
			==================== -->

			          <div>
			            <section>
			            <span class="glyphicon glyphicon-bookmark"></span>
			             <span><strong>Public Accountant</strong></span>
			             <span class="pull-right">Sep-10 To Oct-12</span>
			            </section>
			            <div class="secondary-title">
			              <section>
			                <em>Adlan Public Accountants</em> <img src="img/exp-logo/adlan.png">
			              </section>
			              <section>
			                <span class="glyphicon glyphicon-map-marker"></span><b>Cairo, Egypt</b> 
			              </section>
			            </div>
			            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
			              <div class="panel panel-default">
			                <div class="panel-heading" role="tab" id="headingOne">
			                  <h4 class="panel-title">
			                    <span class="glyphicon glyphicon-briefcase"></span>
			                      Core roles
			                      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			                  </h4>
			                </div>
		                    </a>
			                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                  <div class="panel-body">
			                    <ul class="list-group">
			                      <li class="list-group-item">Financial reporting and managing the current accounts.</li>
			                      <li class="list-group-item">Preparing financial statements (Balance sheet, income, cash flow & shareholder's equity statements).</li>
			                      <li class="list-group-item">Auditing and Taxation Services.</li>
			                      <li class="list-group-item">Managing the employee payroll.</li>
			                      <li class="list-group-item">Stock control & Bank reconciliations validating.</li>
			                      <li class="list-group-item">Cost processing & Variance analyzing.</li>
			                      <li class="list-group-item">Due diligence audit report.</li>
			                      <li class="list-group-item">ERP systems and web-based applications (QuickBooks, Peachtree)</li>
			                     </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div><!-- Section Div ends -->  

			          </div><!-- /col-md-7-->
			          </div><!-- main -->


					</section>

					<!-- Experience Ends -->
					<!-- Skills Starts -->
					<div class="content-center">
						
						<span><h3 class=" text-center">Skills</h3></span>



<!-- Porgress bar starts
====================== -->
                    <div class="col-md-8 col-xs-12" id="skills">
                        <!-- first bar -->
                            <h4 class="prog-bar-heading1">Technical</h4>
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-primary">
                            <span>Mac OS &amp; Windows</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>

                            <!-- end first bar -->
                            <!-- second bar -->
                             <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-primary"><span>Microsoft Office</span></div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only top"></span>
                              </div>
                            </div>
                            <!-- end second bar -->
                            <!-- third bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-primary">
                            <span>Internet</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end third bar -->
                            <!-- Analytical bar -->
                            <h4 class="prog-bar-heading1">Analytical</h4>
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-warning">
                            <span>Organizational knwoledge</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>

                            <!-- end first bar -->
                            <!-- second bar -->
                             <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-warning">
                             <span>Problem Identification</span>
                             </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                      <span class="sr-only top"></span>
                              </div>
                            </div>
                            <!-- end second bar -->
                            <!-- third bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-warning">
                            <span>Problem solving</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end third bar -->
                            <!-- Fourth bar -->
                             <h4 class="prog-bar-heading1 barHead">Lingual</h4>
                             <h5>English</h5>
<!--                              <p><small>IELETS score 7</small></p>-->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-success">
                            <span>Reading</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end Fourth bar -->
                            <!-- fifth bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-success">
                            <span>Listening</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end fifth bar -->
                            <!-- sixth bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-success">
                            <span>Speaking</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end sixth bar -->

                            <!-- fifth bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-success">
                            <span>Writing</span>
                            </div>
                              <div class="progress">
                                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end fifth bar -->
                            <!-- eighth bar -->
                            <h5>Arabic</h5>
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-success">
                            <span>Native</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="20"
                                      aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end eighth bar -->
                            <!-- business bar -->
                            <h4 class="prog-bar-heading1">Organizational</h4>
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-danger">
                            <span>Business Writing</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>

                            <!-- end first bar -->
                            <!-- second bar -->
                             <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-danger">
                             <span>Adherence</span>
                             </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20"aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                      <span class="sr-only top"></span>
                              </div>
                            </div>
                            <!-- end second bar -->
                            <!-- second bar -->
                             <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-danger">
                             <span>Prenestation</span>
                             </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only top"></span>
                              </div>
                            </div>
                            <!-- end second bar -->
                            <!-- second bar -->
                             <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-danger">
                             <span>Development</span>
                             </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                      <span class="sr-only top"></span>
                              </div>
                            </div>
                            <!-- end second bar -->
                            <!-- third bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-danger">
                            <span>Leadership</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end third bar -->
                            <!-- third bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-danger">
                            <span>Communication</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end third bar -->
                            <!-- third bar -->
                            <div class="theSpan col-xs-4 col-sm-4 col-md-4 text-danger">
                            <span>Negotiation</span>
                            </div>
                              <div class="progress">
                    
                                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                                      <span class="sr-only"></span>
                              </div>
                            </div>
                            <!-- end third bar -->


			                        
			            </div><!-- end ADV row-->
					</div><!-- Skills Ends -->
<!-- qualifications and adv courses wrap -->
				<div class="QnA-wrap">
<!-- Certifiactions Starts -->
					<div class="edu-qualification col-md-3 col-sm-12 col-xs-12 content-center">
						
<!-- Educational Qualifications
==================== -->


						<div class="card content-center" style="width: 300px;">
						  <div class="card-divider">
						    Educational Qualifications
						  </div>
						  <img src="img/exp-logo/o6u.png" alt="October 6 uni">
						  <div class="card-section">
						    <h4>BSc. of Commerce</h4>
						    <p>and Business Administration.</p>
						  </div>
						</div>
					</div><!-- Certifiactions Ends -->

<!-- Advanced Courses -->
					<div class="adv-courses col-md-9 col-xs-12">
						<div class="heading-cert text-center text-muted "><span class="glyphicon glyphicon-certificate"></span><h1>Advanced Certification</h1></div>
						<img src="img/procert/salesforce-logo-new.png">
						<img src="img/procert/Amadeus-2.gif">
						<img src="img/procert/googledocs.jpeg">
						<img src="img/procert/icdl.png">
						<img src="img/procert/oracle-siebel-logo1.png">
						<img src="img/procert/quickbooks.png">
						<img src="img/procert/hubspot-inbound-certified.png">
						<img src="img/procert/ielts.png">
						<img src="img/procert/green_belt1.jpg">



					</div>
<!-- /Advanced Courses -->
			</div><!-- QnA-wrap -->

				<!-- time line Starts
============= -->
					<div class="container text-center" id="about">
				        <div class="row">
				        <div class="col-md-12">
				          <div class="page-header">
				            <span class="glyphicon glyphicon-road"></span><h1 class="text-center">More about</h1>
				          </div>
				          <div style="display:inline-block;width:100%;overflow-y:auto;">
				          <ul class="timeline timeline-horizontal">
				            <li class="timeline-item">
				              <div class="timeline-badge"><i class=""> 2008</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Al Mogazi Auditors</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Intern</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>During my last year in college</p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge"><i class=""> 2009</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Plast Rafia</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Junior Accountant</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Nominated by my former employer to take a responsibility of finance in the industrial field </p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge info"><i class=""> 2010</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Adlan Public Accountants</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Senior Accountant</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>By that time I aimed to deep dive in finance field when I acquired some professional skills </p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge danger"><i>2012</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Telecom Egypt</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Customer Service Advisor</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Decided to dive more into the science of accounting while studying CMA and gaining the art of connect </p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge warning"><i></i>2013</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Talabat Services</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i>  Admin HR Accountant</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Hence I had the chance to utilize my humble expertise abroad and to learn about the corporate culture</p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge"><i></i>2014</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Rocket Internet</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Key Accounts Manager</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Proudly elected by the new management to boost up Carmudi in the Gulf area</p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge warning"><i></i>2015</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">NFPM-Exceed Industrial</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i>  Senior Sales Supervisor</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>I have got a new offer in the sales field in the semi-governmental sector</p>
				                </div>
				              </div>
				            </li> 
				            <li class="timeline-item">
				              <div class="timeline-badge"><i></i>2015</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Vodafone VIS</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Customer Service Supervisor</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Had the good chance to be part of customer delighting and team motivation</p>
				                </div>
				              </div>
				            </li>    
				            <li class="timeline-item">
				              <div class="timeline-badge"><i></i>2016</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">E-life HUB</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Entrepreneur & Managing Director</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Happily I founded my digital marketing consultation hub </p>
				                </div>
				              </div>
				            </li>                  
				          </ul>
				        </div>
				        </div>
				      </div>
					</div>


<div class="footer">
 				<p class="pull-right"><a href="#objective"><span class="glyphicon glyphicon-menu-up"></span></a></p>
                 <h6 class="pull-left">Copyrights 2017 &copy;The Coder ® &middot;  All rights reserved  &middot; <a href="#">Privacy Policy</a></h6>

</div>



			</div><!-- /content-wrap -->
		</div><!-- /container -->

<!-- CONTACT MODAL -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Leave a message!</h4>
      </div>
      <div class="modal-body">
    

<form class="form-horizontal" role="form" method="post" action="index.php#form" id="form">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="youremail@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
              <input type="phone" class="form-control" id="phone" name="phone" placeholder="+20100000000" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
              <?php echo "<p class='text-danger'>$errPhone</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label" placeholder="Type here...">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="human" class="col-sm-2 control-label">3 + 4 =?</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2 text-center">
              <button id="submit" name="submit" type="submit" value="Send" class="btn btn-info btn-lg glyphicon glyphicon-send"> Send</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>  
            </div>
          </div>
        </form> 




      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>

		<!-- Compressed JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js" integrity="sha256-Nd2xznOkrE9HkrAMi4xWy/hXkQraXioBg9iYsBrcFrs=" crossorigin="anonymous"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
			<script type="text/javascript">
	$(document).ready(function() {

AOS.init({
      disable: 'mobile'
    });

	// $('#open-button').tooltip('show');
});

	</script>

	</body>
</html>