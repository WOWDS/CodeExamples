<?
// SET DATABASE CONNECTION
define("DB_HOST", "localhost");
define("DB_USER", "**Username**");
define("DB_PASS", "**Password**");
define("DB_NAME", "**Database name**");

// SET MYSQLI
$mysqli											= new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($mysqli->connect_error) {die('Connect Error (' . $mysqli->connect_errno . ') ' .$mysqli->connect_error);}

// define the base url for the application
$newsite										= ''; // EMPTY GOING LIVE	
define('BASE_DIR', 'http://www.website.co.uk/'.$newsite.'');
define('LIB_DIR', 'http://www.website.co.uk/'.$newsite.'lib/');
define('CMS_DIR', 'http://www.website.co.uk/'.$newsite.'wds-cms/');
define('LOG_DIR', 'http://www.website.co.uk/'.$newsite.'wds-cms/wds-login.php');

/**
 * COOKIE_RUNTIME: How long should a cookie be valid ? 1209600 seconds = 2 weeks
 * COOKIE_DOMAIN: The domain where the cookie is valid for, like '.mydomain.com'
 * COOKIE_SECRET_KEY: Put a random 24 character value here to make your app more secure. When changed, all cookies are reset.
 */
define("COOKIE_RUNTIME", 1209600);
define("COOKIE_DOMAIN", "website.co.uk");
define("COOKIE_SECRET_KEY", "abcabcabcabcabcabcabcabcabcabcabcabc");

define("EMAIL_USE_SMTP", false);
define("EMAIL_SMTP_HOST", "website.co.uk");
define("EMAIL_SMTP_AUTH", false);
define("EMAIL_SMTP_USERNAME", "name@website.co.uk");
define("EMAIL_SMTP_PASSWORD", "**Password**");
define("EMAIL_SMTP_PORT", 25);
define("EMAIL_SMTP_ENCRYPTION", "");
/**
 * Configuration for: password reset email data
 * Set the absolute URL to password-reset.php, necessary for email password reset links
 */
define("EMAIL_PASSWORDRESET_URL", CMS_DIR."password-reset.php");
define("EMAIL_PASSWORDRESET_FROM", "reception@website.co.uk");
define("EMAIL_PASSWORDRESET_FROM_NAME", "Client's Name CMS");
define("EMAIL_PASSWORDRESET_SUBJECT", "Password reset for Client's Name CMS");
define("EMAIL_PASSWORDRESET_CONTENT", "Please click on this link to reset your password:");
/**
 * Configuration for: verification email data
 * Set the absolute URL to admin-register.php, necessary for email verification links
 */
define("EMAIL_VERIFICATION_URL", CMS_DIR."admin-registration.php");
define("EMAIL_VERIFICATION_FROM", "me@website.co.uk");
define("EMAIL_VERIFICATION_FROM_NAME", "Client's Name CMS");
define("EMAIL_VERIFICATION_SUBJECT", "Account activation for the Client's Name CMS");
define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");
/**
 * Configuration for: Hashing/Salting strength
 * This is the place where you define the strength of your password hashing/salting
 * This constant will be used in the login and the registration class.
 */
define("HASH_COST_FACTOR", "10");

// CHARCTER SET  +++++++++++++++++++++++
$mysqli->set_charset("utf8");

// TIME zone  +++++++++++++++++++++++
date_default_timezone_set('Europe/London');

// CURRENT URL function +++++++++++++++++++++++
function curPageURL() {
	$pageURL								= 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL							.= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL							.= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL							.= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

// CURRENT PAGE NAME function +++++++++++++++++++++++
function curPageName() {
	return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

// SEO URL functions +++++++++++++++++++++++
function seoURL($string) {
	$string										= strtolower(trim($string));															//Trim
	$string										= preg_replace("/&#039;/i","",$string);									//remove apostrophe
	$string										= preg_replace("/&/i"," and ",$string);										//Change & to and
	$string										= html_entity_decode($string);													//Decode charcters
	$from										= array("Á", "À", "Â", "Ä", "Ă", "Ā", "Ã", "Å", "Ą", "Æ", "Ć", "Ċ", "Ĉ", "Č", "Ç", "Ď", "Đ", "Ð", "É", "È", "Ė", "Ê", "Ë", "Ě", "Ē", "Ę", "Ə", "Ġ", "Ĝ", "Ğ", "Ģ", "á", "à", "â", "ä", "ă", "ā", "ã", "å", "ą", "æ", "ć", "ċ", "ĉ", "č", "ç", "ď", "đ", "ð", "é", "è", "ė", "ê", "ë", "ě", "ē", "ę", "ə", "ġ", "ĝ", "ğ", "ģ", "Ĥ", "Ħ", "I", "Í", "Ì", "İ", "Î", "Ï", "Ī", "Į", "Ĳ", "Ĵ", "Ķ", "Ļ", "Ł", "Ń", "Ň", "Ñ", "Ņ", "Ó", "Ò", "Ô", "Ö", "Õ", "Ő", "Ø", "Ơ", "Œ", "ĥ", "ħ", "ı", "í", "ì", "i", "î", "ï", "ī", "į", "ĳ", "ĵ", "ķ", "ļ", "ł", "ń", "ň", "ñ", "ņ", "ó", "ò", "ô", "ö", "õ", "ő", "ø", "ơ", "œ", "Ŕ", "Ř", "Ś", "Ŝ", "Š", "Ş", "Ť", "Ţ", "Þ", "Ú", "Ù", "Û", "Ü", "Ŭ", "Ū", "Ů", "Ų", "Ű", "Ư", "Ŵ", "Ý", "Ŷ", "Ÿ", "Ź", "Ż", "Ž", "ŕ", "ř", "ś", "ŝ", "š", "ş", "ß", "ť", "ţ", "þ", "ú", "ù", "û", "ü", "ŭ", "ū", "ů", "ų", "ű", "ư", "ŵ", "ý", "ŷ", "ÿ", "ź", "ż", "ž");
	$to												= array("A", "A", "A", "A", "A", "A", "A", "A", "A", "AE", "C", "C", "C", "C", "C", "D", "D", "D", "E", "E", "E", "E", "E", "E", "E", "E", "G", "G", "G", "G", "G", "a", "a", "a", "a", "a", "a", "a", "a", "a", "ae", "c", "c", "c", "c", "c", "d", "d", "d", "e", "e", "e", "e", "e", "e", "e", "e", "g", "g", "g", "g", "g", "H", "H", "I", "I", "I", "I", "I", "I", "I", "I", "IJ", "J", "K", "L", "L", "N", "N", "N", "N", "O", "O", "O", "O", "O", "O", "O", "O", "CE", "h", "h", "i", "i", "i", "i", "i", "i", "i", "i", "ij", "j", "k", "l", "l", "n", "n", "n", "n", "o", "o", "o", "o", "o", "o", "o", "o", "o", "R", "R", "S", "S", "S", "S", "T", "T", "T", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "W", "Y", "Y", "Y", "Z", "Z", "Z", "r", "r", "s", "s", "s", "s", "B", "t", "t", "b", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "w", "y", "y", "y", "z", "z", "z");
	$string										= str_replace($from, $to, $string);
	$string										= preg_replace("/&#?[a-z0-9]+;/i","",$string);						//Remove all html characters
	$string										= urldecode(strip_tags($string));													//URL encode
	$string										= preg_replace("/[^a-z0-9_\s-]/", "", $string);						//Make alphanumeric (removes all other characters)
	$string										= preg_replace("/[\s-]+/", " ", $string);									//Clean up multiple dashes or whitespaces
	$string										= preg_replace("/[\s_]/", "-", $string);										//Convert whitespaces and underscore to dash
	return $string;
}
// Meta description function +++++++++++++++++++++++
function seoD($seo) {
	$seo											= trim($seo);																						//Trim
	$seo											= html_entity_decode($seo);														//Decode charcters
	$from										= array("Á", "À", "Â", "Ä", "Ă", "Ā", "Ã", "Å", "Ą", "Æ", "Ć", "Ċ", "Ĉ", "Č", "Ç", "Ď", "Đ", "Ð", "É", "È", "Ė", "Ê", "Ë", "Ě", "Ē", "Ę", "Ə", "Ġ", "Ĝ", "Ğ", "Ģ", "á", "à", "â", "ä", "ă", "ā", "ã", "å", "ą", "æ", "ć", "ċ", "ĉ", "č", "ç", "ď", "đ", "ð", "é", "è", "ė", "ê", "ë", "ě", "ē", "ę", "ə", "ġ", "ĝ", "ğ", "ģ", "Ĥ", "Ħ", "I", "Í", "Ì", "İ", "Î", "Ï", "Ī", "Į", "Ĳ", "Ĵ", "Ķ", "Ļ", "Ł", "Ń", "Ň", "Ñ", "Ņ", "Ó", "Ò", "Ô", "Ö", "Õ", "Ő", "Ø", "Ơ", "Œ", "ĥ", "ħ", "ı", "í", "ì", "i", "î", "ï", "ī", "į", "ĳ", "ĵ", "ķ", "ļ", "ł", "ń", "ň", "ñ", "ņ", "ó", "ò", "ô", "ö", "õ", "ő", "ø", "ơ", "œ", "Ŕ", "Ř", "Ś", "Ŝ", "Š", "Ş", "Ť", "Ţ", "Þ", "Ú", "Ù", "Û", "Ü", "Ŭ", "Ū", "Ů", "Ų", "Ű", "Ư", "Ŵ", "Ý", "Ŷ", "Ÿ", "Ź", "Ż", "Ž", "ŕ", "ř", "ś", "ŝ", "š", "ş", "ß", "ť", "ţ", "þ", "ú", "ù", "û", "ü", "ŭ", "ū", "ů", "ų", "ű", "ư", "ŵ", "ý", "ŷ", "ÿ", "ź", "ż", "ž");
	$to												= array("A", "A", "A", "A", "A", "A", "A", "A", "A", "AE", "C", "C", "C", "C", "C", "D", "D", "D", "E", "E", "E", "E", "E", "E", "E", "E", "G", "G", "G", "G", "G", "a", "a", "a", "a", "a", "a", "a", "a", "a", "ae", "c", "c", "c", "c", "c", "d", "d", "d", "e", "e", "e", "e", "e", "e", "e", "e", "g", "g", "g", "g", "g", "H", "H", "I", "I", "I", "I", "I", "I", "I", "I", "IJ", "J", "K", "L", "L", "N", "N", "N", "N", "O", "O", "O", "O", "O", "O", "O", "O", "CE", "h", "h", "i", "i", "i", "i", "i", "i", "i", "i", "ij", "j", "k", "l", "l", "n", "n", "n", "n", "o", "o", "o", "o", "o", "o", "o", "o", "o", "R", "R", "S", "S", "S", "S", "T", "T", "T", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "W", "Y", "Y", "Y", "Z", "Z", "Z", "r", "r", "s", "s", "s", "s", "B", "t", "t", "b", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "w", "y", "y", "y", "z", "z", "z");
	$seo											= str_replace($from, $to, $seo);
	$seo											= preg_replace("/[\s]+/", " ", $seo);											//Clean up multiple dashes or whitespaces
	$seo											= htmlspecialchars($seo, ENT_QUOTES, 'UTF-8', false);	//Conver special characters
	return stripslashes($seo);
}
// Meta keyword function +++++++++++++++++++++++
function seoK($seo) {
	$seo											= preg_replace("/&#?[a-z0-9]+;/i","",seoD($seo));				//Remove all html characters
	$seo											= preg_replace("/[^A-Za-z0-9_\s-]/", "", $seo);						//Make alphanumeric (removes all other characters)
	$seo											= strtolower($seo);																					//Lowercase
	return stripslashes($seo);
}

// SECURE FORM FUNCTIONS (PHP 5+) ///////////////////////////////////////////////////////////////////////////////////////////////////////////

// TEXTAREA string cleaning function +++++++++++++++++++++++
function textarea_var($textarea_variable) {
	$textarea_variable 				= trim(htmlspecialchars($textarea_variable, ENT_QUOTES, 'UTF-8', false));
	return stripslashes($textarea_variable);
}

// GENERIC string cleaning function +++++++++++++++++++++++
function generic_var($generic_variable) {
	$generic_variable					= trim(htmlspecialchars($generic_variable, ENT_QUOTES, 'UTF-8', false));
	return stripslashes($generic_variable);
}

// TITLE string cleaning function +++++++++++++++++++++++
function title_var($title_variable) {
   $title_variable						= ucwords(trim(htmlspecialchars($title_variable, ENT_QUOTES, 'UTF-8', false)));
	$title_variable			 			= implode('-', array_map('ucfirst', explode('-', $title_variable)));
	return stripslashes($title_variable);
}

// NAME string cleaning function +++++++++++++++++++++++
function name_var($name_variable) {
    $name_variable					= ucwords(trim(htmlspecialchars($name_variable, ENT_QUOTES, 'UTF-8', false)));
    return stripslashes($name_variable);
}

// BUSINESS string cleaning function +++++++++++++++++++++++
function bus_var($bus_variable) {
	$bus_clean								= ucwords(trim(htmlspecialchars($bus_variable, ENT_QUOTES, 'UTF-8', false)));
	$bus_hyphen			 				= implode('-', array_map('ucfirst', explode('-', $bus_clean)));
	$limited_array						= array("Ltd", "Limited", "Uk", "Www.");
	$accepted_array					= array("Ltd.", "Ltd.", "UK", "www.");
	$bus_variable 						= str_replace($limited_array, $accepted_array, $bus_hyphen);
	$bus_variable 						= str_replace('..', '.', $bus_variable);
	return stripslashes($bus_variable);
}

// POSTCODE string cleaning function +++++++++++++++++++++++
function postcode_var($post_variable) {
	$post_variable	 					= strtoupper(strtolower(trim($post_variable)));
	return stripslashes($post_variable);
}

// URL string cleaning function, http version +++++++++++++++++++++++
function url_var_http($http_variable) {
	$lc_link					 					= strtolower(trim(filter_var($http_variable, FILTER_SANITIZE_URL)));
	$ps_link					 				= parse_url($lc_link);
	$www_link					 			= strpos($lc_link,'www.');
	if ($www_link === true) {
		$lc_link					 				= $lc_link;
	} elseif ($www_link === false) {
		$lc_link 								= 'www.'.$ps_link['host'].$ps_link['path'].$ps_link['query'];
	}
	if (!preg_match("~^(?:f|ht)tps?://~i", $lc_link)) {
		$http_variable 					= "http://".$lc_link;
	}
	return stripslashes($http_variable);
}

// URL string cleaning function, www version +++++++++++++++++++++++
function url_var_www($www_variable) {
	$lc_link					 					= strtolower(trim(filter_var($www_variable, FILTER_SANITIZE_URL)));
	$www_link					 			= substr($lc_link, 0, 3);
	if ($www_link != "www"){
		$http_array							= array("https://", "http://", "https:/", "http:/", "https:", "http:", "https", "http");
		foreach($http_array as $d) {
			if (strpos($lc_link, $d) === 0) {
				$clean_http					= str_replace($d, '', $lc_link);
				if (strpos($clean_http, 'www.') === 0) {
					$www_variable		= $clean_http;
					return $www_variable;
				} elseif (strpos($clean_http,'www.') === false) {
					$www_variable		= "www.".$clean_http;
					return stripslashes($www_variable);
				}
			}
		}
	} else {
		$www_variable					= $lc_link;
		return stripslashes($www_variable);
	}
}

// URL string cleaning function, no http or www version +++++++++++++++++++++++
function url_var_no_www($www_variable) {
	$lc_clean				 					= strtolower(trim(filter_var($www_variable, FILTER_SANITIZE_URL)));
	$lc_link										= preg_replace('{/$}', '', $lc_clean);
	$http_array								= array("https", "http", "https:", "http:", "https:/", "http:/", "https://", "http://");
	foreach($http_array as $d) {
		if (strpos($lc_link, $d) === 0) {
			$www_variable				= str_replace($d, '', $lc_link);
		}
	}
	return stripslashes($www_variable);
}

// EMAIL string cleaning function +++++++++++++++++++++++
// RUN this and then pass the result through the check function
function email_var($cl_email) {
	$san_email					 			= strtolower(trim($cl_email));
	$cl_email					 				= preg_replace('/\s+/', '', $san_email);
	return stripslashes($cl_email);
}

// EMAIL check function +++++++++++++++++++++++
// Based on Chris Baker's answer on Stack Overflow:
// http://stackoverflow.com/questions/6232846/best-email-validation-function-in-general-and-specific-college-domain
function email_check($email) {
	
	// first, we use the php filter validation
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return false;
	}
	// next, we check that there's one @ symbol, and that the lengths are right
	if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
		// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
		return false;
	}
	// Split it into sections to make life easier
	$email_array							= explode("@", $email);
	$local_array							= explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) {
		if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
			return false;
		}
	}
	if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
		$domain_array					= explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2) {
			return false; // Not enough parts to domain
		}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
			if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
				return false;
			}
		}
	}
	return true;
}

// +++++++++++++++++++++++ CLEAN TEL FUNCTION
function tel_cl_var($number) {
$number										= preg_replace('/\s+/', '', $number);
$number										= str_replace('(0)', '', $number);
$number										= preg_replace("/[^a-z0-9_\s-]/", "", $number);
return stripslashes($number);
}

// TELEPHONE string cleaning function and format +44 +++++++++++++++++++++++
// UK version ONLY (based on this guide http://www.area-codes.org.uk/formatting.php)
function tel_var($number) {
	// first remove All white spaces and escape the string
	$strip					 						= stripslashes(trim($number));
    // http://james.cridland.net/code/format_uk_phonenumbers.html
    // v2: worked on by Olly Benson to make it look better and work faster!
    // v2.1: removal of a bugette
    // v2.2: fix Cumbria numbers: thank you Roger Miller
    // Change the international number format and remove any non-number character
	// Strip out all characters apart from numbers
    $pregreplace							= preg_replace('/[^0-9]+/','',$strip);
	// Remove the 2 digit international code (+44)
	if (substr($pregreplace, 0, 2) == '44') {
		$cleanp									= substr($pregreplace, 2);
	// Remove the 4 digit international code (0044)
	} elseif (substr($pregreplace, 0, 4) == '0044') {
		$cleanp									= substr($pregreplace, 4);
	} else {
		$cleanp									= $pregreplace;
	}
    // Turn number into array based on Telephone Format
    $numberArray						= splitNumber($cleanp,explode(",",getTelephoneFormat($cleanp)));
    // Convert array back into string, split by spaces
    $formattedNumber			= implode(" ",$numberArray);
    $formattedNumber			= $formattedNumber;
    return $formattedNumber;
}

function getTelephoneFormat($number) {
    // This uses full codes from http://www.area-codes.org.uk/formatting.shtml
    $telephoneFormat				= array (
        '02' => "3,4,4",
        '03' => "4,3,4",
        '05' => "3,4,4",
        '0500' => "4,6",
        '07' => "5,6",
        '070' => "3,4,4",
        '076' => "3,4,4",
        '07624' => "5,6",
        '08' => "4,3,4",				// some 0800 numbers are 4,6
        '09' => "4,3,4",
        '01' => "5,6",					// some 01 numbers are 5,5
        '011' => "4,3,4",
        '0121' => "4,3,4",
        '0131' => "4,3,4",
        '0141' => "4,3,4",
        '0151' => "4,3,4",
        '0161' => "4,3,4",
        '0191' => "4,3,4",
        '013873' => "6,5",
        '015242' => "6,5",
        '015394' => "6,5",
        '015395' => "6,5",
        '015396' => "6,5",
        '016973' => "6,5",
        '016974' => "6,5",
        '016977' => "6,5",
        '0169772' => "6,4",
        '0169773' => "6,4",
        '017683' => "6,5",
        '017684' => "6,5",
        '017687' => "6,5",
        '019467' => "6,5");
	// Sorts into longest key first
	uksort($telephoneFormat, "sortStrLen");
	foreach ($telephoneFormat AS $key=>$value) {
		if (substr($number,0,strlen($key)) == $key) break;
	};
	return $value;
}

function splitNumber($number,$split) {
	$start											= 0;
	$array										= array();
	foreach($split AS $value) {
		$array[]								= substr($number,$start,$value);
		$start										= $start+$value;
	}
	return $array;
}

function sortStrLen($a, $b) {
	return strlen($b)-strlen($a);
}

// Delete a folder and its contents  +++++++++++++++++++++++
function Delete($loc){
	if (is_dir($loc) === true){
		$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($loc), RecursiveIteratorIterator::CHILD_FIRST);
		foreach ($files as $file){
			if (in_array($file->getBasename(), array('.', '..')) !== true){
				if ($file->isDir() === true){
					rmdir($file->getPathName());
				} elseif (($file->isFile() === true) || ($file->isLink() === true)){
					unlink($file->getPathname());
				}
			}
		}
		return rmdir($loc);
	} elseif ((is_file($loc) === true) || (is_link($loc) === true)){
		return unlink($loc);
	}
	return false;
}

// Set the local money format to UK  +++++++++++++++++++++++
setlocale(LC_MONETARY, 'en_GB.UTF-8');

?>