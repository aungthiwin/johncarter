<?php

ini_set('error_reporting', 'E_NONE');
set_time_limit(0);
ob_start();

//Domains servers to be checked
$vpb_domain_servers = array(
	'.com' 		=> array('whois.crsnic.net','No match for'),
	'.info' 	=> array('whois.afilias.net','NOT FOUND'),	
	'.net' 		=> array('whois.crsnic.net','No match for'),
	// '.org' 		=> array('whois.pir.org','NOT FOUND'),
	// '.co.uk' 	=> array('whois.nic.uk','No match'),		
	// // '.nl' 		=> array('whois.domain-registry.nl','not a registered domain'),
	// // '.ca' 		=> array('whois.cira.ca', 'AVAIL'),
	// // '.name' 	=> array('whois.nic.name','No match'),
	// // '.be' 		=> array('whois.ripe.net','No entries'),
	// // '.biz' 		=> array('whois.biz','Not found'),
	// // '.ws'		=> array('whois.website.ws','No Match'),
	// // '.tv' 		=> array('whois.nic.tv', 'No match for'),
);

$vpb_domain_name_to_search = trim(strip_tags($_POST['domain']));

if(isset($_POST['domain']) && !empty($vpb_domain_name_to_search)) //Be sure that the domain name is set and field is not empty to proceed
{
	$vpb_cleaned_domain_name_to_search = str_replace(array('www.', 'http://'), NULL, $vpb_domain_name_to_search);
	
	if($vpb_cleaned_domain_name_to_search != "")
	{
		foreach($vpb_domain_servers as $vpb_domain_servers_ext => $vpb_domain_whois)
		{
			$vpb_availability = NULL;
				
			if($vpb_socket = fsockopen($vpb_domain_whois[0], 43))
			{
				fputs($vpb_socket, $vpb_cleaned_domain_name_to_search.$vpb_domain_servers_ext . "\r\n");
				while( !feof($vpb_socket) )
				{
					$vpb_availability .= fgets($vpb_socket,128);
				}
				fclose($vpb_socket);
								
				if(preg_match('/'.$vpb_domain_whois[1].'/', $vpb_availability))

				{
					$available .=  '<div id="vasplus_pb"><div class="available">
					<span>Available</span>' . $vpb_cleaned_domain_name_to_search. '<b>' . 
					$vpb_domain_servers_ext .'</b> $ 12/year</div></div><br />';
				}
				else
				{
					$taken .= '<div id="vasplus_pb"><div class="taken"><span>Taken</span>' . 
					$vpb_cleaned_domain_name_to_search . '<b>' .$vpb_domain_servers_ext .'</b> 
					$ 12/year </div></div><br />';
				}

			}
			else
			{
				echo '<br><div class="info">Sorry, there was an error connecting to the server. Please be sure that you are connected to the internet and try again. Thanks.</div>';
				return false;
			}
		}
	}
	else
	{
		 header("location: domain.php");
	}
}
else
{
	 header("location: domain.php");
}
?>		
<html>
<head></head>
<body>
	<h3>Result for <?php echo $vpb_cleaned_domain_name_to_search ?></h3>
	<?php echo $taken ?>
	<?php echo $available ?>
</body>
</html>			 
