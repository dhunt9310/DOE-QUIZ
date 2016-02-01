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
		<h2>Tutorial 2: How do you find the right topic?</h2>

		<!-- Results Sheet -->
		<div id="answerSheet">
		  <div class="results_area"><span>Results: </span><span id="results"></span></div>
		</div>

		<!-- Question 1 -->
		<form class="show">
	    <p id="one"><h2><span>1</span>Which of the following statements is false?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) The Department of Energy’s SBIR/STTR programs fund innovative research.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) The DOE SBIR/STTR program is a great source of funding for large demonstration projects.</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) DOE usually has two Funding Opportunity Announcements annually for the SBIR/ STTR programs.</span><br />
	            <input type="radio" name="question" value="D" /><span>(d) Most of the DOE topics contain active hyperlinks to organizations and or reference material.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 2 -->
		<form class="show">
	    <p id="one"><h2><span>2</span>You are always eligible to submit an application to any FOA that you find listed on the DOE or DOE SBIR/STTR website?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) True</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) False</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 3 -->
		<form class="show">
	    <p id="one"><h2><span>3</span>Which of the following is a true statement?</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="C" /><span>(a) To find a topic to which you can respond to in the SBIR/STTR FOA you should match your core competencies with DOE’s needs. </span><br />
	            <input type="radio" name="question" value="C" /><span>(b) The term core competency applies only to the strengths of an organization and NOT to the strengths of the Principal Investigator.</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) The topics associated with an SBIR/STTR FOA do not reflect DOE’s needs.</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) When you find a topic of interest you don’t need to pay any attention to the topic number or the subtopic letter.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

		<!-- Question 4 -->
		<form class="show">
	    <p id="one"><h2><span>4</span>When searching for a good topic in the DOE SBIR/STTR Topic document, you should:</h2><br />
	        <div class="tab">
	            <input type="radio" name="question" value="A" /><span>(a) Never follow the hyperlinks in the DOE SBIR/STTR FOA.</span><br />
	            <input type="radio" name="question" value="B" /><span>(b) Never use synonyms to expand your search.</span><br />
	            <input type="radio" name="question" value="C" /><span>(c) Wait until the day before the Letter of Intent is due before you search the topics.</span><br />
	            <input type="radio" name="question" value="C" /><span>(d) Allow yourself as much time as possible to explore the topics to determine your ability to meet the needs sought by DOE.</span><br />
	        </div>
	    </p>
	    <div class="next">Next Question</div>
		</form>

<div id="buttonDiv">        
    <input type="button" id="button" value="Submit Answers" />
</div>
	</div>
</section>