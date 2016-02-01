<script type="text/javascript">
  var answers = [
      "(a) I need funding to continue my research", "C",
      "(c) I don’t have a company", "C",
      "(a) I have looked at some of the R&D videos on the DOE Phase 0 website under the R&D tab", "C", "(b) I have looked at a DOE SBIR/STTR solicitation before", "(c) I have read a DOE research report", "(d) I have looked at information related to the DOE federal labs", 
       "C", "(d) The owner is a permanent resident", "(e) We are a DE C-Corp, with 20% of the stock held by business angels. Daily operations are managed by the company President who is a US citizen", 
      "(b) District of Columbia", "C", "(c) In the US", "(d) Commonwealth of Puerto Rico", "(e) Republic of Palau",
  ];
</script>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="assets/js/application.js"></script>
<link type="text/css" rel="stylesheet" href="assets/style.css" media="all" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<section>
	<!-- Quiz -->
	<div id="quiz">
		
		<!-- Quiz Header -->
		<h2>Tutorial 9: DOE Application Checklist</h2>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>Which of the following best describes the structure of a DOE Phase I SBIR or STTR application?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) The application is submitted as one pdf document.</span><br />
	            <input type="radio" name="question" value="D" /><span>(b) The application has two volumes – a technical and cost application.</span><br />
	            <input type="radio" name="question" value="D" /><span>(c) The application is submitted as a package with numerous pdf files uploaded into specific locations within grants.gov.</span><br />
	            <input type="radio" name="question" value="D" /><span>(d) The application package is submitted as a package through PAMS.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 2 -->
		<form class="show">
	    <p id="one"><h2><span>2</span>Which source document is the definitive reference when preparing a Phase I SBIR or STTR application to submit to DOE?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) The SBIR/STTR Phase I Application Checklist</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) The Funding Opportunity Announcement</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) The Instruction for Completing a DOE SBIR/STTR Phase I Grant Application</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) None of the above</span><br />

	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>Which system does an applicant use to upload a DOE Phase I SBIR or STTR application?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) SAM</span><br />
	            <input type="radio" name="question" value="C" /><span>(b) PAMS</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) grants.gov</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) fedbizops</span><br />

	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>


<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>