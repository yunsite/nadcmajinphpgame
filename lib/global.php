<?php
require 'DbHelper.php';


function get_templates($templatesname)
{
	if(file_exists('templates/'.$templatesname))
	{
		return 'templates/'.$templatesname;
	}
	else 
	{
		return '../templates/'.$templatesname;
		
	}
}


?>