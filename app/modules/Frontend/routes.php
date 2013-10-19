<?php 

/*
	Frontend functionality:

	If it is /news/{slug} then we go to PostsController.
	Everything else is PagesController.
	If nothing is found we throw an PageNotFoundException.

	For a header we use a composer for navigation (same goes for the footer).
*