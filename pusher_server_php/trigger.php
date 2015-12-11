<?
header("Access-Control-Allow-Origin: *"); 

$_POST = json_decode(file_get_contents('php://input'),true);

print_r($_POST);

$data = $_POST['message'];
$channel = $_POST['channel'];
$event = $_POST['event'];

require('Pusher.php');

$pusher = new Pusher("23a2a3871a0c227a3d3c", "8486383ed4050e861c5f", "81543");
$a = $pusher->trigger($channel, $event, $data);

echo json_encode($a);


?>