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
		<h2>Tutorial 3: SBIR or STTR? Which one is right for me?</h2>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>The main difference between SBIR and STTR is that the SBIR program requires that the small business team with a university, federal lab, or other nonprofit research institution</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) True</span><br />
	            <input type="radio" name="question" value="D" /><span>(d) Most of the DOE topics contain active hyperlinks to organizations and or reference material.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 2 -->
		<form class="show">
	    <p id="one"><h2><span>2</span>Which of the following statements is NOT accurate?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) 33% of a Phase I SBIR research effort can be subcontracted.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) 67% of an STTR research effort can be subcontracted.</span><br />
	            <input type="radio" name="question" value="B" /><span>(c) None of an SBIR research effort has to be subcontracted.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>Where can the principal investigator on a DOE STTR project have their primary employment?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) At the small business applicant</span><br />
	            <input type="radio" name="question" value="C" /><span>(b) At the nonprofit research institution (university, federal lab, etc)</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) Both of the above</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) Neither of the above</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 4 -->
		<form class="show">
	    <p id="one"><h2><span>4</span>If a small business applicant wants to be considered for both SBIR and STTR at the Department of Energy, how many proposals does it have to submit?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) One</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) Two</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) More than 2</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 5 -->
		<form class="show">
	    <p id="one"><h2><span>5</span>Which of the following statements is inaccurate?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) The organization that applies for an STTR award does not have to be a small business.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) A university or federal lab cannot apply for an STTR award.</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) Collaboration with a research institution is required in the STTR program.</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) A project that begins as an STTR in Phase I can be converted into an SBIR project in Phase II.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>