  	<?php
	  	$select = 'active';
	  	if(isset($_GET['active']) && !empty($_GET['active'])){
			$active = $_GET['active'];
		} 
	?>

	  <!-- body code goes here -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-nav">
	  <a class="navbar-brand" href="index.php?active=Home">
		  <img src="images/UAlogo_S.png" alt="The University of Arizona Logo" width="50" class="m-0" >
		  <span class="ml-2 h3 text-nowrap ">Quantum Information and Materials Group</span>
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon">\</span></button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	    <ul class="navbar-nav ml-auto h4 nav-pills">
	      <li class="nav-item">
			  <a class="nav-link <?php echo ($active == 'Home')? $select:''; ?>" href="index.php?active=Home">Home</a> 
		  </li>
	      <li class="nav-item dropdown"> 
			  <a class="nav-link dropdown-toggle <?php echo ($active == 'About' | $active == 'Team')? $select:''; ?>" href="#" id="AboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> About</a>
	          <div class="dropdown-menu" aria-labelledby="AboutDropdown"> 
				  <a class="dropdown-item <?php echo ($active == 'About')? $select:''; ?>" href="about.php?active=About">About</a> 
				  <a class="dropdown-item <?php echo ($active == 'Team')? $select:''; ?>" href="team.php?active=Team">Team</a>
	          </div>
		  </li>
	      <li class="nav-item dropdown"> 
			  <a class="nav-link dropdown-toggle <?php echo ($active == 'Research' | $active == 'Teaching' | $active == 'PC' | $active == 'Patent')? $select:''; ?>" href="#" id="ProgramDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Events</a>
	          <div class="dropdown-menu" aria-labelledby="ProgramDropdown"> 
				  <a class="dropdown-item <?php echo ($active == 'Research')? $select:''; ?>" href="research.php?active=Research">Research</a> 
				  <a class="dropdown-item <?php echo ($active == 'Teaching')? $select:''; ?>" href="teaching.php?active=Teaching">Teaching</a>	  
	          <div class="dropdown-divider "></div>
				  <a class="dropdown-item <?php echo ($active == 'PC')? $select:''; ?>" href="pressCoverage.php?active=PC">Press Coverage</a>
				  <a class="dropdown-item <?php echo ($active == 'Patent')? $select:''; ?>" href="patent.php?active=Patent">Patent</a>
			  </div>
          </li>
		  <li class="nav-item"> 
			  <a class="nav-link <?php echo ($active == 'Project')? $select:''; ?>" href="project.php?active=Project">Project</a> 
		  </li>
	      <li class="nav-item"> 
			  <a class="nav-link <?php echo ($active == 'Contact')? $select:''; ?>" href="contact.php?active=Contact">Contact</a> 
		  </li>
		  <li class="nav-item"> 
			  <a class="nav-link" href="#">Login</a> 
		  </li>
        </ul>
      	</div>
  	</nav>