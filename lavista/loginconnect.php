<?php
  
  $username = $_POST['username'];
  $password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "signup");
if($conn->connect_error){
    die("Failed to connect : ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from records where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            ?>
            <script>
                alert('Login Successfully and we will contact you in next 24hrs for your reservation');
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('Invalid Email or Password');
            </script>
            <?php
        }

    }else{
        ?>
        <script>
        alert('Connection Successfully');
        </script>
        <?php
    }
}
?>