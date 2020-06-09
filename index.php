<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jondavy0101 | Samples</title>

    <!-- Metas and General Links -->
    <?php
        include_once('./resources/includes/head.php');
    ?>

</head>
<body>

<!-- Content -->
    <div class="container-fluid" id="background-div">
        <div class="row">
            <div class="col-md-9 center-div">
                <img class="w-100 p-1" src="./resources/images/labels/samples-label.png">
            </div>
        </div>
    </div>
    <div class="container-fluid min-100 d-flex flex-column" id="background-div-front" onclick="backgroundScroll()"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
            <!-- Navbar -->
                <?php
                    include_once('./resources/includes/navbar.php');
                ?>
            </div>
        </div>

    <!-- Queries -->
        <div class="row">
            <div class="col-sm-3 bg-color-secondary shadow pb-3" id="categories">
                <div class="row">
                    <?php
                        include_once('./resources/includes/sample-categories.php');
                    ?>
                </div>
            </div>
            <div class="col-md-9 bg-color-light" id="info">
                <div class="row">
                    <?php
                        include_once('./resources/includes/read-samples.php');
                    ?>
                    <div class="col-md-12 select-category">
                        <div class="main-content px-3 py-3">
                            <h4 class="text-color-dark my-0 d-inline-block">Select a category</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
    <?php
        include_once('./resources/includes/footer.php');
    ?>

    <script src="../../resources/jquery-3.4.1.min.js"></script>
    <script src="../../resources/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="./resources/js/script.js"></script>

</body>
</html>