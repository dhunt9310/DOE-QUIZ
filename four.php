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
		<h2>Tutorial 4: What types of businesses are eligible for SBIR/STTR?</h2>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>Universities and federal labs can apply for STTR grants, as long as they subcontract some of the work to small businesses.</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) True</span><br />
	            <input type="radio" name="question" value="D" /><span>(b) False</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 2 -->
		<form class="show">
	    <p id="one"><h2><span>2</span>Which of the following statements is NOT accurate?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) Principal investigators must have the education, experience and project management qualifications to run the proposed SBIR/STTR project.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) PIs have to put in at least 1 hour per week on a DOE SBIR/STTR project.</span><br />
	            <input type="radio" name="question" value="B" /><span>(c) On an SBIR project, the PI has to work at least 20 hours per week with the small business grantee during the project and not more than 19 hours per week for any other employers.</span><br />
	            <input type="radio" name="question" value="B" /><span>(d) On an STTR project, the PI must work at least 20 hours per week with either the small business grantee or the research institution collaborating on the project.</span><br />	        
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>Which of the following statements is correct?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) A venture capital firm can be the owner of a majority of a DOE SBIR/STTR applicant small business</span><br />
	            <input type="radio" name="question" value="C" /><span>(b) A venture capital firm can be a minority owner of a DOE SBIR/STTR applicant small business</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 4 -->
		<form class="show">
	    <p id="one"><h2><span>4</span>Which of the following could be a subcontractor on an SBIR project?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) A university (for-profit or non-profit)</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) An FFRDC</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) A retired Federal lab employee</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) A Fortune 500 company</span><br />
	            <input type="radio" name="question" value="C" /><span>(e) A medium-size pharmaceutical company</span><br />
	            <input type="radio" name="question" value="C" /><span>(f) A small R&D think tank</span><br />
	            <input type="radio" name="question" value="C" /><span>(g) A research foundation</span><br />
	            <input type="radio" name="question" value="C" /><span>(h) All of the above</span><br />
	            <input type="radio" name="question" value="C" /><span>(i) None of the above</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 5 -->
		<form class="show">
	    <p id="one"><h2><span>5</span>A Phase I proposal to DOE can be considered for both the SBIR and STTR programs as long as it includes a non-profit research entity contributing more than 33% but less than 30% of the research.</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) True</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) False</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>