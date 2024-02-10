<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("base_path", "http://192.168.1.101/agnis/agnis_cms_new/");
define('LoginURL', 'http://192.168.1.101/agnis/agnis_cms_new/index.php');
?>
<?php
ob_start();
date_default_timezone_set('Asia/Kolkata');
$server_url = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$server_url .= $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
// $rest = substr("abcdef", 0, -1); // returns "abcde" 
// echo $server_url;
if ($_SERVER['HTTP_HOST'] == "192.168.1.101" || $_SERVER['HTTP_HOST'] == "localhost") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "classify";
} else {
    $servername = "localhost";
    $username = "Administrator";
    $dbname = "recommend";
    $password = "Admin$123";
}
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$con->set_charset('utf8');
mb_language('uni');
mb_internal_encoding('UTF-8');

$sql = "SELECT * from config";
$result = mysqli_query($con, $sql);


//echo "Connected successfully";
//define($login_url, "http://192.168.1.101/agnis/agnis_login/login.php");
//$GLOBALS['login_url'] = "http://192.168.1.101/agnis/agnis_login/login.php";

function CCDLookUp($field_name, $table_name, $where_condition, $db)
{
    $sql = "SELECT " . $field_name . ($table_name ? " FROM " . $table_name : "") . ($where_condition ? " WHERE " . $where_condition : "");
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row[$field_name];
}

function validate_input($data)
{
    $data = str_replace(['"', "'", "`"], "", $data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>