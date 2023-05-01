
<?php
if (!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    // $content = $_POST["content"];
    // $baddress = $_POST["baddress"];
    if ($name == "" || $subject == "" || $email == "") {
    } else {
        $conn = mysqli_connect("localhost", "root", "", "kamratan") or die("Connection Error: " . mysqli_error($conn));
        mysqli_query($conn, "INSERT INTO chatmsg (user_name, user_email, subject) VALUES ('" . $name . "', '" . $email . "','" . $subject . "')");
        $insert_id = mysqli_insert_id($conn);
        //if(!empty($insert_id)) {
        $message = "Your order placed successfully.";
        $type = "success";
        //}
    }
}
// require_once "index.html";


?>  