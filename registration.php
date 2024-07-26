<?php 

    include("./dbConnection.php");

    $data = isset($_POST['userData']) ? $_POST['userData'] : [];

    $query = 'INSERT INTO profile (name, age, gender,bday, contactnum, email) VALUE (
        ' . $data['name'] . ',
        ' . $data['age'] . ',
        ' . $data['gender'] . ',
        ' . $data['dob'] . ',
        ' . $data['mobile_num'] . ',
        ' . $data['email'] . ',
    )';

    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = 'INSERT INTO profile (name, age, gender,bday, contactnum, email) VALUE ("' . $data['name'] . '",' . $data['age'] . ',"' . $data['gender'] . '","' . $data['dob'] . '",' . $data['mobile_num'] . ',"' . $data['email'] . '")';    
        $conn->exec($query);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

    // echo json_encode($query);
?>