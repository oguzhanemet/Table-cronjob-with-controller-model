<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    
    
    $data = $_POST['data']; 
    
    $response = array('status' => 'success', 'message' => 'AJAX request processed successfully', 'data' => $data);
   
 
    echo json_encode($response);
    exit; 
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <title>AJAX Request Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
   
            $.ajax({
                url: 'YOUR FUNCTION URL',
                type: 'POST',
                data: {},
                success: function(data) {
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    </script>
</head>
<body>

</body>
</html>
