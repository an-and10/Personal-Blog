<?php

	include('includes/top.php');
	include('includes/header-index.php');

?>

<style>
  	h2 {
    font-family: Arial, Verdana;
    font-weight: 800;
    font-size: 2.5rem;
    color: red;
    text-transform: uppercase;
}
.accordion-section .panel-primary> .panel-heading {
    border: 0;
    /*background: blue;*/
    padding: 10px;
    /*color: white;*/
    margin:7px;
}
.accordion-section .panel-primary .panel-title a {
    display: block;
    font-style: italic;
    font-size: 30px;
    text-decoration: none;
}
.accordion-section .panel-primary .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 30px;
    content: "\f106";
    /*color: #1f7de2;*/
    float: right;
    margin-top: 0px;
}

.accordion-section .panel-primary .panel-body {
    font-size:15px;
}
</style>
<div class=" contact_us animated fadeIn">
   <div class="container">
      <h2> FAQs</h2>
     <h3 style="margin-left:40px;"> Kindly Go to the few Frequently asked Question </h3>
  </div>

</div>







<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
  <div class="container">

	  <h2>Frequently Asked Questions </h2>
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-primary">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
				Is My personal information is Safe on this website?
			  </a>
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>All the details accepted during ther registration is safe. Be free to use the services. Your data secruity is our responsibity.</p>

			</div>
		  </div>
		</div>
	</div>

		<div class="panel panel-primary">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
				How easy is it to build a website with Solodev CMS?
			  </a>
			</h3>
		  </div>
		  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
			<div class="panel-body px-3 mb-4">
			  <p>Building a website is extremely easy. With a working knowledge of HTML and CSS you will be able to have a site up and running in no time.</p>
			</div>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
				What is the uptime for Solodev CMS?
			  </a>
			</h3>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
			<div class="panel-body px-3 mb-4">
			  <p>Using Amazon AWS technology which is an industry leader for reliability you will be able to experience an uptime in the vicinity of 99.95%.</p>
			</div>
		  </div>
		</div>



		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-primary">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse5">
				Unable to login to my Account ?
			  </a>
			</h3>
		  </div>
		  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
			<div class="panel-body px-3 mb-4">
			  <p>There may be possible reasons while login to the website.</p>
			  <ul>
				<li>Please ensure that that the enetered data is correct and entered correctly</li>
				<li>Due to technical problem , the server may not be responding to the current time</li>
				<li>The Adminstrator may have blocked or unapproved your Account . Kindly check the status of it in your My Account section. To visit <a href=" my_account.php?user_dashboard">Click here</a> </li>
				<li></li>
			  </ul>
			</div>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
				What is the uptime for Solodev CMS?
			  </a>
			</h3>
		  </div>
		  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
			<div class="panel-body px-3 mb-4">
			  <p>Using Amazon AWS technology which is an industry leader for reliability you will be able to experience an uptime in the vicinity of 99.95%.</p>
			</div>
		  </div>
		</div>


	  </div>

  </div>
</section>
<?php include('footer.php');
?>





















 <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  		</html>
