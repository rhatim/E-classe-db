<?php
include 'all.php'
?>

<div class="row mt-4">
    <div class="col-md d-flex justify-content-between ms-2">
        <div class="">
            <h3>Course List</h3>
        </div>
        <div class="me-3">
            <img class="" src="images/scroll.svg" alt="">
            <a href="courseform.php"><button class="btn btn-info text-white ">ADD NEW COURSE</button></a>
        </div>
    </div>
</div>
<hr>
<div class="row mt-5 mx-2">
<?php
$conn = new mysqli('localhost', 'root', '', 'e_classe_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, title from course order by id DESC;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
                    <div class="col-lg col-md-6 mb-3">
                        <div class="h-100 px-2 py-1" style="background-color: #F0F9FF; border-radius: 8px;">
                            <h1><i class="bi bi-mortarboard" style="color: #74C1ED;"></i></h1>
                            <p>' . $row["title"] . '</p>
                        </div>
                        <div class="text-nowrap"><a href="editcourse.php?edit='.$row["id"].'" class="bi bi-pencil text-info mx-4"></a></div>

                      <div class="text-nowrap"><a href="deletecourse.php?delete='.$row["id"].'" class="bi bi-trash text-info"></a></div>
                    </div>';
    }
} else {
    echo "0 results";
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>