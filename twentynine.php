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
		<h2>Tutorial 29: Can you give me an overview of all of the forms?</h2>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>You should write your whole Phase I DOE SBIR/STTR proposal, then turn it into a PDF file and upload it as a single attachment on the grants.gov website.</h2><br />
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
	            <input type="radio" name="question" value="A" /><span>(a) Some grants.gov forms are mandatory, some are optional.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) The Letter of Intent is uploaded to the grants.gov website.</span><br />
	            <input type="radio" name="question" value="B" /><span>(c) Questions on the grants.gov forms that are preceded by an asterisk are mandatory and therefore require a response.</span><br />
	            <input type="radio" name="question" value="B" /><span>(d) You must download a set of forms off the grants.gov website that is specific to the DOE Phase I SBIR/STTR FOA to which you are responding, with the CFDA or Funding Opportunity number indicating which set is appropriate.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>Some grants.gov forms, referred to here as sub-forms, have to be attached to other grants.gov forms in your Phase I SBIR/STTR application.</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) True</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) False</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>


		<!-- Question 4 -->
		<form class="show">
	    <p id="one"><h2><span>4</span>Where should the mandatory Phase I Commercialization Plan be included in your application?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) As an attachment to Field 12 of the Research & Related: Other Project Information form</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) As an attachment to Field 7 of the SBIR/STTR Information form</span><br />
	            <input type="radio" name="question" value="B" /><span>(c) Just attach it to any form that you want</span><br />
	            <input type="radio" name="question" value="B" /><span>(d) Other</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 5 -->
		<form class="show">
	    <p id="one"><h2><span>5</span>Which of the following statements is inaccurate?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) STTR proposals require more grants.gov forms because they must include a nonprofit subawardee.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) The SF-LLL sub-form is only required if you are lobbying the agency or Congress regarding this application.</span><br />
	            <input type="radio" name="question" value="B" /><span>(c) You cannot ask DOE to consider your Phase I proposal for both SBIR and STTR funding.</span><br />
	            <input type="radio" name="question" value="B" /><span>(c) You must get and attach a separate budget and budget justification for each of the subawardees on your DOE Phase I SBIR or STTR application.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>