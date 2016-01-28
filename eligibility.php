<script type="text/javascript">
  var answers = [
      "(a) I need funding to continue my research", "C",
      "(c) I don’t have a company", "C",
      "(a) I have looked at some of the R&D videos on the DOE Phase 0 website under the R&D tab", "C", "(b) I have looked at a DOE SBIR/STTR solicitation before", "(c) I have read a DOE research report", "(d) I have looked at information related to the DOE federal labs ", 
      "(c) We’re an LLC with four individuals, all of whom are US citizens", "C", "(d) The owner is a permanent resident", "(e) We are a DE C-Corp, with 20% of the stock held by business angels. Daily operations are managed by the company President who is a US citizen", 
      "(b) District of Columbia", "C", "(c) In the US", "(c) In the US",
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
		<h2>To assist you in learning if the Small Business Innovation Research (SBIR) and/or the Small Business Technology Transfer (STTR) programs are right for you, we have included 10 brief questions. Please take a moment to answer the following questions to learn if you are eligible to participate in these programs.</h2>
		<div class="quizHeader">
			<p>You can select more than one answer. Please select all that apply.</p>
		</div>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>What is your motivation for finding out about the Small Business Innovation Research Program (SBIR) or the Small Business Technology Transfer program?</h2><br />
	        <div class="tab">
	            <input type="checkbox" name="question" value="C" /><span>(a) I need funding to continue my research </span><br />
	            <input type="checkbox" name="question" value="B" /><span>(b) I have developed a product and need funding for a demonstration </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(c) I am interested in starting a research and development company</span><br />
	            <input type="checkbox" name="question" value="D" /><span>(d) I work for a small manufacturing firm with an R&D department. We are looking to leverage the skills of our R&D department</span><br />
	            <input type="checkbox" name="question" value="A" /><span>(e) Someone told me to look into it </span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 2 -->
		<form class="show">
	    <p id="one"><h2><span>2</span>Which of the following best describes your company</h2><br />
	        <div class="tab">
	            <input type="checkbox" name="question" value="A" /><span>(a) I work for a foreign owned company </span><br />
	            <input type="checkbox" name="question" value="B" /><span>(b) My firm has more than 500 employees </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(c) I don’t have a company</span><br />
	            <input type="checkbox" name="question" value="D" /><span>(d) I work for a not-for profit organization</span><br />
	            <input type="checkbox" name="question" value="A" /><span>(e) I work for a small business with less than 500 employees </span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>Which of the following actions have you taken to learn about DOE</h2><br />
	        <div class="tab">
	            <input type="checkbox" name="question" value="C" /><span>(a) I have looked at some of the R&D videos on the DOE Phase 0 website under the R&D tab </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(b) I have looked at a DOE SBIR/STTR solicitation before </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(c) I have read a DOE research report </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(d) I have looked at information related to the DOE federal labs </span><br />
	            <input type="checkbox" name="question" value="A" /><span>(e) I have not explored the research that DOE conducts </span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 4 -->
		<form class="show">
	    <p id="one"><h2><span>4</span>Which of the following describes the ownership of your company?</h2><br />
	        <div class="tab">
	            <input type="checkbox" name="question" value="A" /><span>(a) The owner of the company is a foreign national and doesn’t have a green card </span><br />
	            <input type="checkbox" name="question" value="B" /><span>(b) We are a venture-backed small business. The investors own more than 51% of the company stock </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(c) We’re an LLC with four individuals, all of whom are US citizens </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(d) The owner is a permanent resident </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(e) We are a DE C-Corp, with 20% of the stock held by business angels. Daily operations are managed by the company President who is a US citizen </span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 5 -->
		<form class="show">
	    <p id="one"><h2><span>5</span>Which of the following describes where the research for your company will be conducted?</h2><br />
	        <div class="tab">
	            <input type="checkbox" name="question" value="A" /><span>(a) Canada </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(b) District of Columbia </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(c) In the US </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(d) Commonwealth of Puerto Rico </span><br />
	            <input type="checkbox" name="question" value="C" /><span>(e) Republic of Palau </span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>
<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>