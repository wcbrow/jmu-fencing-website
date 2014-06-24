<?php

/*********************************************
*	NAVIGATION START
*		This is the section where navigation will be generated
*		The code should add additional options based on the status of the user
*			and whether or not they are signed in
*
*********************************************/
$html = "
<nav>
	<a>Home</a>
	<a>About Fencing</a>
	<a>About the Club</a>
	<a>About our Facilities</a>
	<a>Become a Member</a>
	<a>Club Officers</a>
	<a>Our Constitution</a>
	<a>Calendar</a>";


if (logged in) {		// Things that will only appear when logged in

	if (club officer) {	// Things that will only appear if you are an officer
		$html .= "
	<a>Add/Update Slideshow</a>
	<a>Add/Update News</a>
	<a>Add/Update Events</a>
	<a>Add/Update Practice</a>
	<a>Add/Update Members</a>
	<a>Add/Update Constitution</a>
	<a>Add/Update Inventory</a>
	<a>Add/Update Community Service</a>
	<a>Add/Update Fundraising</a>
	<a>Add/Update Officer Duties/Titles</a>
	<a>Add/Update Elections</a>
	<a>Add/Update Surveys/Signup</a>
	<a>Add/Update Mailing</a>";

		// We don't need to (and shouldn't) include all of these things right now, but I just wanted to have a braindump of all the possibilities.  Other things could probably also go in here.
	}
	$html .= "
	<a>My Profile</a>
	<a>Member List</a>
	<a>Fencing Ladder</a>
	<a>Log Out</a>";
} else {
	$html .= "
	<a>Member Login</a>";
}
	// This is neither a complete nav list, nor in it's final order

echo $html . "
</nav>";
?>
