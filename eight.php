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
		<h2>Tutorial 8: What does a winning Phase I proposal look like?</h2>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>Where do you submit your DOE SBIR/STTR proposal?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) PAMS</span><br />
	            <input type="radio" name="question" value="D" /><span>(b) SBA.gov</span><br />
	            <input type="radio" name="question" value="D" /><span>(c) Grants.gov</span><br />
	            <input type="radio" name="question" value="D" /><span>(d) Directly to DOE by e-mail</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 2 -->
		<form class="show">
	    <p id="one"><h2><span>2</span>The proposal that you submit to DOE is best conceptualized as a package.</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) True</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) False</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>The document that one should always refer to when in doubt about guidelines for the DOE SBIR/STTR proposal submission is:</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) The Topics document</span><br />
	            <input type="radio" name="question" value="C" /><span>(b) The Applications Checklist</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) The Application Guide</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) The Funding Opportunity Announcement (FOA)</span><br />

	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 4 -->
		<form class="show">
	    <p id="one"><h2><span>4</span>The Phase I Commercialization Plan is part of the Project Narrative.</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) True</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) False</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 5 -->
		<form class="show">
	    <p id="one"><h2><span>5</span>Which is true regarding the form of winning DOE SBIR/STTR proposals?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) The author uses a novel outline to organize the content.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) The project narrative contains 17 pages.</span><br />
	            <input type="radio" name="question" value="B" /><span>(c) The work plan is approximately 4.5 pages in length.</span><br />
	            <input type="radio" name="question" value="B" /><span>(d) The font type is Arial.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>