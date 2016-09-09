	<style>

h4 {text-align: center; padding: 10px 0px}

.main_dump {max-width: 900px; margin: 10px auto; border-radius: 5px; position: relative; height: auto; overflow: hidden;}

* {transition: all 0.3s; -webkit-transition: all 0.3s}

/* ******* */

.project_chart {
	background: #fefefe;
	height: auto;
	padding: 20px;
	overflow: hidden;
}

.project_chart__row {
	position: relative;
	height: 70px;
	padding: 10px auto;
}

.project_chart__milestones {
	position: relative;
	display: 		 flex;
	display: -webkit-flex;
}

.project_chart__milestones--footer {
	margin-top: 70px;
	background: #f2f2f2;
	padding: 5px 0px
}

.milestone{
	position: relative;
	text-align: center;
	display: inline-block;
	-webkit-flex: 1;  /* Safari 6.1+ */
    -ms-flex: 1;  /* IE 10 */    
    flex: 1;
}

.milestone__smile {
	position: relative;
	width: 50px;
	height: 50px;
	background-position: center;
	background-size: 50px 50px;
	background-repeat: no-repeat;
	margin: auto;
	border-radius: 50%;
	z-index: 1
}

.milestone__smile--happy {
	background-image: url('../assets/pics/smiley/happy.png');
}

.milestone__smile--sad {
	background-image: url('../assets/pics/smiley/sad.png');
}

.milestone__smile--end {
	background-image: url('../assets/pics/smiley/rich.png');
}

.milestone__smile--placeholder {
	background-color: #f9f9f9
}

.milestone__smile--pivot {
	background-color: #FBD971;
	cursor: pointer;
	color: #555;
	position: relative;
	overflow: hidden;
	z-index: 2
}

.milestone__smile--pivot > span {
	position: absolute;
	top: 0;
	display: inline-block;
	width: 50px;
	height: 50px;
	line-height: 50px;
	font-size: 30px;
	background: #FBD971;
	border-radius: 50%;
	opacity: 0;
	z-index: 99999
}

.milestone__smile--pivot > span:first-child {
	opacity: 1 !important
}

#pivot_icon {
	margin-top: 15%;
	width: 70%;
	height: 70%;
	opacity: 0.4;
	display: none
}

.milestone__smile--pivot:hover {
	overflow: visible;
}

.milestone__smile--pivot:hover > span {
	background-color: #F29C1F;
	opacity: 1
}

.milestone__smile--target {
	background-color: #FBD971;
	background-image: url("target_icon.svg");
	background-position: center;
	background-size: 60% 60%;
	background-repeat: no-repeat;
	opacity: 0.7;
	cursor: pointer;
}

.milestone__smile--target:hover {
	background-color: #F29C1F;
	opacity: 1
}

.milestone__label {
	display: block;
}

.milestone__date {
	color: #555;
	font-size: 12px
}

.milestone__dot {
	position: absolute;
	top: -40px;
	left: calc(50% - 15px);
	width: 20px;
	height: 20px;
	border: 5px solid #555;
	border-radius: 20px;
	background-color: #F29C1F;
	z-index: 1;
}

.project_chart__segment {
	height: 5px;
	background-color: #F6E5B4;
	position: relative;
	top: -50%;
}

.project_chart__segment--placeholder {
	background-color: #f9f9f9;
}

.project_chart__segment--full {
	position: absolute;
	top: -23px;
	width: 100%;
	background-color: #555
}

.project_chart__segment--half {
	width: 50%;
}

.project_chart__segment--halfright {
	left: 50%;
	width: 50%;
}

.project_chart__arrow {
	display: block;
	overflow: hidden;
	height: 30px;
	width: 17px;
	position: absolute;
	top:-13px;right: -4px
}
.project_chart__arrow:before {
	border: 15px solid transparent;
	content: ' ';
	display: block;
	border-left-color: #555;
}

@media all and (max-width: 550px) {
	/* Milestione text smaller */
	.milestone__smile {
		background-size: 30px 30px;
		height: 30px;
		width: 30px
	}

	.milestone__smile--pivot > span {
		width: 30px;
		height: 30px;
		font-size: 20px;
		line-height: 30px
	}

	.project_chart__row {
		height: 40px
	}

	.project_chart__milestones--footer {
		margin-top: 40px;
		background-color: transparent;
	}

	.milestone__label {
		transform: rotate(80deg);
		font-size: 12px;
		margin-top: 10px
	}

	.milestone__date {
		display: block;
		font-size: 9px;
		margin-left: -35px;
		margin-bottom: 10px;
		transform: rotate(80deg);
	}

	.milestone__dot {
		top: -37px;
		left: calc(50% - 10px);
		width: 15px;
		height: 15px;
		border: 2px solid #555;
	}
}

/* ************************ Project console ********************** */

.project_console {
	position: relative;
	height: auto;
	overflow: hidden;
	background-color: #fbfbfb;
	z-index: 9999;
	background: #f2f2f2;
}

.project_console__section, .project_console > h3 {
	background-color: #fbfbfb;
	padding: 20px;
	margin: 20px;
	height: auto;
	overflow: hidden;
}

.project_console__section--hidden {
	display: none;
}

.close_wrapper {
	width: 50px;
	height: 50px;
	background-color: red;
	cursor: pointer;
	position: absolute;
	top: 10px;
	right: 10px;
	border-radius: 50%
}

.project_console input[type=button],
.project_console select {
	background: rgb(34, 34, 34) none repeat scroll 0% 0%;
	color: #fbfbfb;
	border: none;
	padding: 5px 15px;
	cursor: pointer;
	margin: 10px 0px;
	border-radius: 5px;
}

.project_console select {
	margin: 20px 10px;
	background-color: #f2f2f2;
	color: #111
}

/* Default X - close */

.x {
	position: relative;
	border-radius: 50%;
	width: 80%;
	height: 80%;
}

.x1, .x2 {
	position: absolute;
	left: 13%;
	top: calc(65% - 3px);
	width: 100%;
	height: 3px;
	border-radius: 5px;
	background-color: #fff
}

.x--add > .x2 {
	transform: rotate(90deg);
}

.x--remove > .x2 {
	transform: rotate(45deg);
}

.x--remove > .x1 {
	transform: rotate(-45deg);
}


	</style>

	<div class="main_dump">

		<div class="project_chart" id="project_chart">

			<div class="project_chart__contents">

				<div class="project_chart__row project_chart__row--last">

					<div class="project_chart__milestones">

						<div class="milestone">
							<div class="milestone__smile milestone__smile--pivot" onclick="c.pivot()">
								<span style="left: 0">P</span>
								<span style="left: 100%;transition-delay: 100ms">I</span>
								<span style="left: 200%;transition-delay: 200ms">V</span>
								<span style="left: 300%;transition-delay: 300ms">O</span>
								<span style="left: 400%;transition-delay: 400ms">T</span>
								<svg id="pivot_icon" x="0px" y="0px" viewBox="0 0 20.298 20.298" style="enable-background:new 0 0 20.298 20.298;" xml:space="preserve"><g><g><g><path style="fill:#030104;" d="M0.952,11.102c0-0.264,0.213-0.474,0.475-0.474h2.421c0.262,0,0.475,0.21,0.475,0.474 c0,3.211,2.615,5.826,5.827,5.826s5.827-2.615,5.827-5.826c0-3.214-2.614-5.826-5.827-5.826c-0.34,0-0.68,0.028-1.016,0.089 v1.647c0,0.193-0.116,0.367-0.291,0.439C8.662,7.524,8.46,7.482,8.322,7.347L3.49,4.074c-0.184-0.185-0.184-0.482,0-0.667 l4.833-3.268c0.136-0.136,0.338-0.176,0.519-0.104c0.175,0.074,0.291,0.246,0.291,0.438V1.96c0.34-0.038,0.68-0.057,1.016-0.057 c5.071,0,9.198,4.127,9.198,9.198c0,5.07-4.127,9.197-9.198,9.197C5.079,20.299,0.952,16.172,0.952,11.102z"/></g></g></g></svg>
							</div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--half"></div>
						</div>

					</div>

				</div>

	<!--
				<div class="project_chart__row project_chart__row--completed">

					<div class="project_chart__milestones">

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--halfright"></div>
						</div>
						
						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>
						
						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment project_chart__segment--halfright"></div>
						</div>

						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment"></div>
						</div>
		
						<div class="milestone">
							<div class="milestone__smile milestone__smile--sad"></div>
							<div class="project_chart__segment"></div>
						</div>

						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy milestone__smile--win"></div>
							<div class="project_chart__segment project_chart__segment--half"></div>
						</div>

					</div>				

				</div>

				<div class="project_chart__row">

					<div class="project_chart__milestones">

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--halfright"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>
						
						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
						<div class="project_chart__segment project_chart__segment--halfright"></div>

						</div>

						<div class="milestone">
							<div class="milestone__smile milestone__smile--sad"></div>
							<div class="project_chart__segment project_chart__segment--half"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--half"></div>
						</div>
						
					</div>				

				</div>

	-->

				<div class="project_chart__row project_chart__row--active">

					<div class="project_chart__milestones">

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--halfright"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>
						
						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone milestone--active">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment project_chart__segment--halfright"></div>
						</div>

						<div class="milestone milestone--placeholder milestone--next">
							<div class="milestone__smile milestone__smile--target" onclick="c.milestone()"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--half"></div>
						</div>
						
					</div>				

				</div>

				<div class="project_chart__row">

					<div class="project_chart__milestones">

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--halfright"></div>
						</div>
					
						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment project_chart__segment--halfright"></div>
						</div>
				
						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment"></div>
						</div>
			
						<div class="milestone">
							<div class="milestone__smile milestone__smile--sad"></div>
							<div class="project_chart__segment"></div>
						</div>
			
						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment project_chart__segment--half"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--half"></div>
						</div>

					</div>				

				</div>

				<div class="project_chart__row">

					<div class="project_chart__milestones">

						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment project_chart__segment--halfright"></div>
						</div>

						<div class="milestone">
							<div class="milestone__smile milestone__smile--sad"></div>
							<div class="project_chart__segment"></div>
						</div>
						
						<div class="milestone">
							<div class="milestone__smile milestone__smile--happy"></div>
							<div class="project_chart__segment project_chart__segment--half"></div>
						</div>
						
						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>
				
						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder"></div>
						</div>

						<div class="milestone milestone--placeholder">
							<div class="milestone__smile milestone__smile--placeholder"></div>
							<div class="project_chart__segment project_chart__segment--placeholder project_chart__segment--half"></div>
						</div>

					</div>				

				</div>

			</div>

			<div class="project_chart__milestones project_chart__milestones--footer">

				<div class="project_chart__segment project_chart__segment--full">
					<div class="project_chart__arrow"></div>
				</div>

				<div class="milestone">

					<div class="milestone__dot"></div>
					
					<span class="milestone__label">Milestone 1</span>
					<!--<span class="milestone__date">28/06/2015</span>-->

				</div>

				<div class="milestone">

					<div class="milestone__dot"></div>
					
					<span class="milestone__label">Milestone 2</span>
					<!--<span class="milestone__date">28/06/2015</span>-->

				</div>

				<div class="milestone">

					<div class="milestone__dot"></div>
					
					<span class="milestone__label">Milestone 3</span>
					<!--<span class="milestone__date">28/06/2015</span>-->

				</div>

				<div class="milestone">

					<div class="milestone__dot"></div>
					
					<span class="milestone__label">Milestone 4</span>
					<!--<span class="milestone__date">28/06/2015</span>-->

				</div>

				<div class="milestone">

					<div class="milestone__dot"></div>
					
					<span class="milestone__label">Milestone 5</span>
					<!--<span class="milestone__date">28/06/2015</span>-->

				</div>

				<div class="milestone">

					<div class="milestone__dot"></div>
					
					<span class="milestone__label">Milestone 6</span>
					<!--<span class="milestone__date">28/06/2015</span>-->

				</div>

			</div>

		</div>


		<div class="project_console" id="project_console" style="display: none;">

			<h3>Project Console</h3>

			<section class="project_console__section" id="project_console__pivot">
				
				<!-- Pivot -->

				<h3 id="project_console__pivot__title">Pivot</h3>

				<p>Are you really pivoting?<p>
				<p>Select the milestone from which you will go on with your project.</p>

				<div id="project_console__pivot__milestones">
					<!-- list of the milestones reached from where the user can pivot -->
				</div>

				<div>
					<label for="mood">Current Mood</label>
					<select name="mood" id="current_mood_pivot">
						<option value="1">Happy</option>
						<option value="2">Sad</option>					
					</select>
				</div>

				<input type="button" onclick="c.submitPivot()" value="SUBMIT">

			</section>


			<section class="project_console__section" id="project_console__milestone">
				
				<!-- Milestone -->

				<h3 id="project_console__milestone__title"></h3>

				<!-- Milestone requirements -->

				<!-- Temp -> for the mockup -->
				<style type="text/css">
					#project_console__milestone__requirements {
						position: relative;
						max-width: 300px;
						height: 150px;
						line-height: 150px;
						border: 4px dashed #999;
						color: #999;
						font-size: 22px;
						font-weight: bold;					
						text-align: center;
						margin: 20px 0px
					}
				</style>

				<div id="project_console__milestone__requirements">REQUIREMENTS</div>

				<div>
					<label for="mood">Current Mood</label>
					<select name="mood" id="current_mood">
						<option value="1">Happy</option>
						<option value="2">Sad</option>					
					</select>
				</div>

				<input type="button" onclick="c.submitMilestone()" value="SUBMIT">

			</section>

			<div class="close_wrapper" onclick="c.hide()">
				<div class="x x--remove">
					<div class="x1"></div>
					<div class="x2"></div>
				</div>
			</div>

		</div>

	</div> <!-- main -->


<script type="text/javascript">

// !Only for test
// Project data matrix example
/*
	
	0 -> null
	1 -> happy
	2 -> sad
	3 -> ...
	7 -> end

*/
smiles = ["null","happy","sad","...","...","...","...","end"];
initial_project_data = [

	[1,2,1,0,0,0],
	[0,1,1,2,1,0],
	[0,0,0,1,0,0]

]

// !Only for test
// Array with all current milestones
milestones_array = [
	"Milestone 1",
	"Milestone 2",
	"Milestone 3",
	"Milestone 4",
	"Milestone 5",
	"Milestone 6"
]

function Project_Console(project){

	this.project = project;
	const P_CONSOLE = document.getElementById('project_console');
	const P_CHART = document.getElementById('project_chart');

	// Display the project console
	this.show = function(){
		P_CONSOLE.style.display = 'block';
		P_CHART.style.display = 'none';
	}

	// Hide the project console
	this.hide = function(){
		P_CONSOLE.style.display = 'none';
		P_CHART.style.display = 'block';
	}

	// Toggle project console contents
	// Show the specified section
	this.toggle = function(t) {
		// Hide all the sections
		elems = document.getElementsByClassName('project_console__section');
		for (var i = elems.length - 1; i >= 0; i--) {
			elems[i].classList.add('project_console__section--hidden');	
		}
		// Show the section
		section_x = document.getElementById(t);
		section_x.classList.remove('project_console__section--hidden');
	}

	// Display the project console with the elements to define a new pivot
	this.pivot = function() {
		// Add correct data to the console
		// Create array with only reached milestones
		node = document.createElement("SELECT");
		node.setAttribute("id","pivot_milestone");
		current_milestone_id = this.project.getCurrentMilestoneID();
		for (var i = current_milestone_id; i >= 0; i--) {
			node.appendChild(pivotMilestoneDOMelem(milestones_array[i],i));
		}
		// Append data to DOM
		document.getElementById('project_console__pivot__milestones').innerHTML = ""; // Clear old data
		document.getElementById('project_console__pivot__milestones').appendChild(node); // Add new data
		// Toggle the project console view
		this.toggle('project_console__pivot');
		// Display the project console
		this.show();
	};

	// Create a milestone option for the pivot select
	function pivotMilestoneDOMelem(milestone_name,milestone_id){
		// create the node
		option = document.createElement("OPTION");
		// Set all the attributes
		option.setAttribute("value",milestone_id);
		// append child text node
		option.appendChild(document.createTextNode(milestone_name));
		return option;
	}

	// Display the project console with the elements to define a new milestone
	this.milestone = function() {
		// Add correct data to the console
		// Get new milestone name
		milestone_id = this.project.getCurrentMilestoneID() + 1;
		milestone_name = milestones_array[milestone_id];
		// Update milestone title
		document.getElementById("project_console__milestone__title").innerHTML = milestone_name;
		// Add milestone requirements to the console
		// ... not for the mockup
		// Toggle the project console view
		this.toggle('project_console__milestone');
		// Display the project console
		this.show();
	};

	// Submit new milestones
	// Inputs validation here
	this.submitMilestone = function() {
		// Inputs validation
		// ...
		// Get the current mood
		current_mood = document.getElementById("current_mood").value;
		// Render the new milestone
		if(this.project.renderNewMilestone(current_mood)){
			// Chart updated
			// Close the console
			this.hide();
		}
	}

	// Submit new pivot
	this.submitPivot = function() {
		// Inputs validation
		// ...
		// Get the new milestone to pivot
		pivot_milestone = document.getElementById("pivot_milestone").value;
		// Render the new pivot
		if(this.project.renderNewPivot(pivot_milestone)){
			// Chart updated
			// Close the console
			this.hide();
		}
	}

}


// The main class
function Project(pivots,data){

	this.pivots = pivots;
	this.data = data;

	this.renderNewPivot = function(pivot_milestone) {
		
		// TODO manage special case, i.g. only one milestone per row

		// Remove active class and next milestone from current active row
		current_row = document.getElementsByClassName("project_chart__row--active")[0];
		current_row.classList.remove("project_chart__row--active");
		current_active_milestone = document.getElementsByClassName("milestone--active")[0];
		current_active_milestone.classList.remove("milestone--active");
		current_active_milestone_segment = current_active_milestone.childNodes[3];
		current_active_milestone_segment.classList.remove("project_chart__segment--halfright");
		current_next_milestone = document.getElementsByClassName("milestone--next")[0];
		current_next_milestone.classList.remove("milestone--next");
		current_next_milestone_smile = current_next_milestone.childNodes[1];
		current_next_milestone_smile.removeAttribute("onclick");
		current_next_milestone_smile.classList.remove("milestone__smile--target");
		current_next_milestone_smile.classList.add("milestone__smile--placeholder");

		// Manange special conditions
		if(countCurrentRowMilestones() != 1){
			current_active_milestone_segment.classList.add("project_chart__segment--half");
		} else {
			// Only one milestone in this row
			current_active_milestone_segment.classList.add("project_chart__segment--placeholder");
		}

		// Get the current mood
		current_mood = document.getElementById("current_mood_pivot").value;

		// Create a new row to insert in the chart
		row = document.createElement("DIV");
		row.classList.add("project_chart__row");
		row.classList.add("project_chart__row--active");

		// Milestones wrapper
		milestones_wrapper = document.createElement("DIV");
		milestones_wrapper.classList.add("project_chart__milestones"); 

		// Create each milestone DOM and append to row
		for(var i=0; i<milestones_array.length; i++){

			// Check if is the pivot milestone
			if(i == pivot_milestone){
				// Create active milestone
				milestone_node = newActiveMilestone(current_mood);
			} else if ((i-1) == pivot_milestone){
				// Create target milestone (--next)
				milestone_node = newTargetMilestone();
			} else {
				// Create placeholder milestone 
				milestone_node = newPlaceholderMilestone();
			}

			// TODO --> manage first and last milestone

			milestones_wrapper.appendChild(milestone_node);
			milestones_wrapper.appendChild(document.createTextNode("")); // fix
			
		}

		row.appendChild(milestones_wrapper);

		// Insert the row after the --last row
		document.getElementsByClassName("project_chart__contents")[0].insertBefore(row, current_row);

		// Update project_data array
		new_data_row = [];
		for (var i = 0; i < milestones_array.length; i++) {
			if(i == pivot_milestone){
				new_data_row[new_data_row.length] = parseInt(current_mood);
			}else{
				new_data_row[new_data_row.length] = 0;
			}
		}
		data[data.length] = new_data_row;

		return true;
	}

	function countCurrentRowMilestones(){
		row = data[data.length-1];
		var k = 0;
		for(var i=0; i<row.length; i++){
			if(row[i]!=0) k++;
		}
		return k;
	}

	function newActiveMilestone(mood){
		node = document.createElement("DIV");
		node.classList.add("milestone");
		node.classList.add("milestone--active");
		smile = document.createElement("DIV");
		smile.classList.add("milestone__smile");
		smile.classList.add("milestone__smile--"+smiles[mood]);
		segment = document.createElement("DIV");
		segment.classList.add("project_chart__segment");
		segment.classList.add("project_chart__segment--halfright");
		node.appendChild(document.createTextNode("")); // fix
		node.appendChild(smile);
		node.appendChild(document.createTextNode("")); // fix
		node.appendChild(segment);
		return node;
	}

	function newTargetMilestone(){
		node = document.createElement("DIV");
		node.classList.add("milestone");
		node.classList.add("milestone--next");
		node.classList.add("milestone--placeholder");
		smile = document.createElement("DIV");
		smile.classList.add("milestone__smile");
		smile.classList.add("milestone__smile--target");
		smile.setAttribute("onclick","c.milestone()");
		segment = document.createElement("DIV");
		segment.classList.add("project_chart__segment");
		segment.classList.add("project_chart__segment--placeholder");
		node.appendChild(document.createTextNode("")); // fix
		node.appendChild(smile);
		node.appendChild(document.createTextNode("")); // fix
		node.appendChild(segment);
		return node;
	}

	function newPlaceholderMilestone(){
		node = document.createElement("DIV");
		node.classList.add("milestone");
		node.classList.add("milestone--placeholder");
		smile = document.createElement("DIV");
		smile.classList.add("milestone__smile");
		smile.classList.add("milestone__smile--placeholder");
		segment = document.createElement("DIV");
		segment.classList.add("project_chart__segment");
		segment.classList.add("project_chart__segment--placeholder");
		node.appendChild(document.createTextNode("")); // fix
		node.appendChild(smile);
		node.appendChild(document.createTextNode("")); // fix
		node.appendChild(segment);
		return node;
	}

	this.renderNewMilestone = function(mood) {
		
		// Add constraints for first and last milestone in the path

		// ...

		// Get the active row
		active_row = document.getElementsByClassName("project_chart__row--active")[0];
		// Get the pivots row
		pivots_row = document.getElementsByClassName("project_chart__row--last")[0];
		// Get the active and next milestones
		active_milestone = document.getElementsByClassName("milestone--active")[0];
		next_milestone = document.getElementsByClassName("milestone--next")[0];
		new_next_milestone = next_milestone.nextSibling.nextSibling;

		// Update all the css classes
		active_milestone.classList.remove("milestone--active");
		next_milestone.classList.add("milestone--active");
		next_milestone.classList.remove("milestone--next");
		next_milestone.classList.remove("milestone--placeholder");
		// Update childs --> segments
		next_milestone_segment = next_milestone.childNodes[3];
		next_milestone_segment.classList.remove("project_chart__segment--placeholder");
		// Update childs --> smiles
		next_milestone_smile = next_milestone.childNodes[1];
		next_milestone_smile.classList.remove("milestone__smile--target");

		// Remove the onclick attribute from the milestone
		next_milestone_smile.removeAttribute("onclick");

		// Check if we are at the end of the path
		if(new_next_milestone) {
			
			// Update css classes
			new_next_milestone.classList.add("milestone--next");
			new_next_milestone.classList.remove("milestone--placeholder");
			new_next_milestone_smile = new_next_milestone.childNodes[1];
			new_next_milestone_smile.classList.add("milestone__smile--target");
			new_next_milestone_smile.classList.remove("milestone__smile--placeholder");

			// Add the onclick attribute to the new next milestone
			new_next_milestone_smile.setAttribute("onclick","c.milestone()");	

			// Assign the mood smile to the new milestone
			next_milestone_smile.classList.add("milestone__smile--"+smiles[mood]);
			
		} else {

			// Assign the final smile to the last milestone
			next_milestone_smile.classList.add("milestone__smile--end");

			// Hide the pivots row
			pivots_row.style.display = "none";

			// The milestones are finished !
			alert("Congrats!! You completed all the milestones!");

		}

		// Update project_data array
		for (var i = data[data.length-1].length - 1; i >= 0; i--) {
			if(data[data.length-1][i] != 0) data[data.length-1][i+1] = parseInt(mood);
		}

		return true;
	}

}

// Get current milestone id
Project.prototype.getCurrentMilestoneID = function(){
	// Find the last milestone reached in the current path
	row = this.data[this.data.length-1];
	for (var i = row.length - 1; i >= 0; i--) {
		if(row[i]!=0) return i;
	}
	// If no milestone is found
	return 1;
}

// Get project data
Project.prototype.getData = function() {
	return this.data;
}

p = new Project(3,initial_project_data);
c = new Project_Console(p);




</script>


	<script type="text/javascript">
		
		safe_exit = function (event) {
		    var message = 'Important: Please click on \'Save\' button to leave this page.';
		    if (typeof event == 'undefined') {
		        event = window.event;
		    }
		    if (event) {
		        event.returnValue = message;
		    }
		    return message;
		};

		///window.onbeforeunload = safe_exit;

	</script>

</body>
</html>