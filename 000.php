$servername = "localhost"; 
$username = "id20443869_lazypanda"; 
$password = "@l>TQ>545=p/HZPK"; 
$dbname = "id20443869_wd"; 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}  
