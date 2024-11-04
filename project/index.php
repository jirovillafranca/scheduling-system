<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
#SERVER
#USERNAME
#PASSWORD
#DATABASE
$servername = "localhost";
$username = "root";
$password = "";
$database = "projectdb";

//Connection
$conn = mysqli_connect($servername,$username,$password,$database);

//Check connection
// if (!$conn) {
//     die("Connection Failed" . mysqli_connect_error());
// }else{
//     echo "Connection Successful";
// }


// //INSERT
// $sql = "INSERT INTO `users`( `userid`, `username`, `password`, `gender`) VALUES ('99999','bipanda@outlook.com','12345password','female')";
// if($result = mysqli_query($conn,$sql)){
//     echo "New record is created successfully";
// }else{
//     "Insert Failed";
// }



// $sql = "DELETE FROM users WHERE userid = '99999'";
// if($result = mysqli_query($conn,$sql)){
//     echo "Record Delete successfully";
// }else{
//     "delete Failed";
// }

// update statement
$sql = "UPDATE users SET username = 'jiro@gmail.com1' WHERE id = 1";
if($result = mysqli_query($conn,$sql)){
    echo "Record update successfully";
}else{
    "update Failed";
}


//sql query
$sql = "SELECT * FROM users";

//sql query connection
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result) > 0){   // check if the table has data
    //query the data
    while ($row = mysqli_fetch_assoc($result)){ // fetch all the rows in the table
        echo "Username: ".$row["username"]."<br>";
    }
}else{
    echo "No data found";
}
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>