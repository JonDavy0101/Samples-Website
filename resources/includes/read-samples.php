<?php

include_once('./resources/includes/connect.php');

// Find all samples and order them according to type

// HTML
$sql = "SELECT * FROM pageDirectory where html > 0";
$categoryClass = "HTML";


//echo "<script>console.log('Number: " . $result->num_rows . "' );</script>";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if ($result->num_rows > 0) {
            echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><a href="' . $row["url"] . '"><h4 class="text-color-dark my-0 d-inline-block">'. $row["title"] . ' | </h4><p class="text-color-light-primary pl-2 pr-3 my-0 d-inline-block">' . $row["description"] . '</p></a></div></div>';
        }
    }
} else {
    echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><h4 class="text-color-dark my-0 d-inline-block">0 results</h4></div></div>';
}

// CSS
$sql = "SELECT * FROM pageDirectory where css > 0";
$categoryClass = "CSS";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if ($result->num_rows > 0) {
                echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><a href="' . $row["url"] . '"><h4 class="text-color-dark my-0 d-inline-block">'. $row["title"] . ' | </h4><p class="text-color-light-primary pl-2 pr-3 my-0 d-inline-block">' . $row["description"] . '</p></a></div></div>';
        }
    }
} else {
    echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><h4 class="text-color-dark my-0 d-inline-block">0 results</h4></div></div>';
}

// JAVASCRIPT
$sql = "SELECT * FROM pageDirectory where javascript > 0";
$categoryClass = "JAVASCRIPT";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if ($result->num_rows > 0) {
            echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><a href="' . $row["url"] . '"><h4 class="text-color-dark my-0 d-inline-block">'. $row["title"] . ' | </h4><p class="text-color-light-primary pl-2 pr-3 my-0 d-inline-block">' . $row["description"] . '</p></a></div></div>';
        }
    }
} else {
    echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><h4 class="text-color-dark my-0 d-inline-block">0 results</h4></div></div>';
}

// PHP
$sql = "SELECT * FROM pageDirectory where php > 0";
$categoryClass = "PHP";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if ($result->num_rows > 0) {
            echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><a href="' . $row["url"] . '"><h4 class="text-color-dark my-0 d-inline-block">'. $row["title"] . ' | </h4><p class="text-color-light-primary pl-2 pr-3 my-0 d-inline-block">' . $row["description"] . '</p></a></div></div>';
        }
    }
} else {
    echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><h4 class="text-color-dark my-0 d-inline-block">0 results</h4></div></div>';
}

// MYSQL
$sql = "SELECT * FROM pageDirectory where mysql > 0";
$categoryClass = "MYSQL";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if ($result->num_rows > 0) {
            echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><a href="' . $row["url"] . '"><h4 class="text-color-dark my-0 d-inline-block">'. $row["title"] . ' | </h4><p class="text-color-light-primary pl-2 pr-3 my-0 d-inline-block">' . $row["description"] . '</p></a></div></div>';
        }
    }
} else {
    echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><h4 class="text-color-dark my-0 d-inline-block">0 results</h4></div></div>';
}

// BOOTSTRAP
$sql = "SELECT * FROM pageDirectory where bootstrap > 0";
$categoryClass = "BOOTSTRAP";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if ($result->num_rows > 0) {
            echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><a href="' . $row["url"] . '"><h4 class="text-color-dark my-0 d-inline-block">'. $row["title"] . ' | </h4><p class="text-color-light-primary pl-2 pr-3 my-0 d-inline-block">' . $row["description"] . '</p></a></div></div>';
        }
    }
} else {
    echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><h4 class="text-color-dark my-0 d-inline-block">0 results</h4></div></div>';
}

// MARKDOWN
$sql = "SELECT * FROM pageDirectory where markdown > 0";
$categoryClass = "MARKDOWN";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       if ($result->num_rows > 0) {
            echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><a href="' . $row["url"] . '"><h4 class="text-color-dark my-0 d-inline-block">'. $row["title"] . ' | </h4><p class="text-color-light-primary pl-2 pr-3 my-0 d-inline-block">' . $row["description"] . '</p></a></div></div>';
        }
    }
} else {
    echo '<div class="col-md-12 main-content-div ' . $categoryClass . '"><div class="main-content px-3 py-3"><h4 class="text-color-dark my-0 d-inline-block">0 results</h4></div></div>';
}

mysqli_close($conn);

?>