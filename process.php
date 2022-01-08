<?php 

include('vendor/autoload.php');


$name = $_POST['name'];
$fname = $_POST['fname'];
$age = $_POST['age'];


$app_id = '1328332';
$app_key = 'ffe880b03999e040b006';
$app_secret = '0516ad0cc8b8507eb06a';
$app_cluster = 'ap2';

$pusher = new Pusher\Pusher( $app_key, $app_secret, $app_id, array('cluster' => $app_cluster) );

$data['message'] = array(
    'student_name' => $name,
    'student_father' => $fname,
    'age' => $age
);

$pusher->trigger( 'demo_notification_core_php', 'add_student', $data );
echo '<h1>Student Added Successfully</h1>';


?>