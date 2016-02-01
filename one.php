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
		<h2>Tutorial 1: What are the benefits of participating in the SBIR/STTR programs?</h2>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>Which of the following is NOT a benefit of participating in the SBIR program?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) Awardees retain rights to intellectual property developed.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) Awardees receive funding to conduct specific R&D.</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) SBIR pays for marketing expenses to bring the SBIR funded technology to market.</span><br />
	            <input type="radio" name="question" value="D" /><span>(d) Awardees can use funding to hire additional employees to work on the project.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 2 -->
		<form class="show">
	    <p id="one"><h2><span>2</span>How many Funding Opportunity Announcements (FOA) does the DOE SBIR/STTR program office typically have each year?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) One</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) Two</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) Three</span><br />
	            <input type="radio" name="question" value="D" /><span>(d) Four</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>Which of the following is a true statement regarding when applicants can submit a proposal to the DOE SBIR/STTR program office?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) Any time of the year</span><br />
	            <input type="radio" name="question" value="C" /><span>(b) Only by the date specified in the FOA</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) June 1st</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) Only by the date specified in the FOA if one has also submitted an LOI on time</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 4 -->
		<form class="show">
	    <p id="one"><h2><span>4</span> What is the most common size of a Phase I SBIR award from DOE?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) $100K</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) $150K</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) $250K</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) $350K</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 5 -->
		<form class="show">
	    <p id="one"><h2><span>5</span>What is the major difference between the SBIR and STTR programs?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) The organization that applies for an STTR award does not have to be a small business.</span><br />
	            <input type="radio" name="question" value="C" /><span>(b) An FFRDC can apply for an STTR award.</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) The STTR program will reimburse a company for research already conducted.</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) Collaboration with a Research Institution is required in the STTR program.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 6 -->
		<form class="show">
	    <p id="one"><h2><span>6</span> The following is NOT found in the list of DOE Topics when released?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) The names of DOE personnel that you can contact with questions</span><br />
	            <input type="radio" name="question" value="C" /><span>(b) A description of the topics of interest</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) A schedule of important dates</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) The dates for webinars on the various topics</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>
<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>