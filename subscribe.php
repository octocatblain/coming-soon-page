<<<<<<< HEAD
<?php
// Connect to the database
$conn = mysqli_connect("localhost", "twosta", "W#%To@$%&p0C", "twosta_twostar");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];

// Validate the data
if (empty($name) || empty($email)) {
    die("Please enter your name and email address.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

// Insert the subscriber into the database
$sql = "INSERT INTO subscribers (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Thank you for subscribing! We will get back to you soon :)'); window.location = 'index.html';</script>";
} else {
    $errorMsg = "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('$errorMsg'); window.location = 'index.html';</script>";
}


=======
<?php
// Connect to the database
$conn = mysqli_connect("localhost", "twosta", "W#%To@$%&p0C", "twosta_twostar");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];

// Validate the data
if (empty($name) || empty($email)) {
    die("Please enter your name and email address.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

// Insert the subscriber into the database
$sql = "INSERT INTO subscribers (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Thank you for subscribing! We will get back to you soon :)'); window.location = 'index.html';</script>";
} else {
    $errorMsg = "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('$errorMsg'); window.location = 'index.html';</script>";
}


>>>>>>> 1683cca6540cc4bfa38eb8a4d0651950f79c0f3e
mysqli_close($conn);