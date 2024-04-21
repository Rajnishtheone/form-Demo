

<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username for XAMPP MySQL is 'root'
$password = ""; // Default password for XAMPP MySQL is empty
$database = "event"; //'your_database_name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $event_name= $_POST['event_name'];
    $PIN= $_POST['PIN'];

    
    $STATE = $_POST['STATE'];
    $ADDRESS = $_POST['ADDRESS'];

     /* // Validate form data (you can add more validation as needed)
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($event_name) || empty($PIN)|| empty($STATE)  || empty($ADDRESS)) {
        echo "All fields are required";
    } elseif ($password != $confirm_password) {
        echo "Passwords do not match";
    } else {
        // If all validation passes, you can proceed with user registration
        // For demonstration purposes, let's just echo the submitted data
      echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
        echo "event_name :" . $event_name . "<br>";
        echo "Country: " . $country . "<br>";
        echo "<script>window.open('event.php','_self')</script>";*/
       
        

        // SQL query to insert user data into a table (assuming you have a table named 'users')
        $sql = "INSERT INTO eve (username, email, password,event_name,PIN, STATE,ADDRESS)
         VALUES ('$username', '$email', '$password','$event_name','$PIN', '$STATE','$ADDRESS')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
           
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


// Close connection
$conn->close();
?>
