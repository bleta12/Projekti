<?php
session_start();
include 'PikturaRepository.php';

$id = $_GET['id'];
$pikturaRepository = new PikturaRepository();
$piktura1 = $pikturaRepository->getPikturaById($id);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pikturat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Edit Painting</h2>
        <form method="POST">
            <input type="hidden" value="<?php echo $piktura1['ID'] ?>" name="Id">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Piktura</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Piktura" value="<?php echo $piktura1['Piktura'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Emri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Emri" value="<?php echo $piktura1['Emri'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Autori</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Autori" value="<?php echo $piktura1['Autori'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cmimi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Cmimi" value="<?php echo $piktura1['Cmimi'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="Submit" name="edit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="Tabela.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
try {
    if (isset($_POST['edit'])) {
        $id = $_POST["Id"];
        $piktura = $_POST["Piktura"];
        $emri = $_POST["Emri"];
        $autori = $_POST["Autori"];
        $cmimi = $_POST["Cmimi"];

        $pikturaRepository->editPiktura($id, $piktura, $emri, $autori, $cmimi);
        $_SESSION['successMessage'] = "Piktura edited successfully!";
        header("location:{$_SERVER['HTTP_REFERER']}");
        exit();
    }
} catch (Exception $e) {
    $_SESSION['errorMessage'] = $e->getMessage();
    header("location:{$_SERVER['HTTP_REFERER']}");
    exit();
}


if (isset($_SESSION['successMessage'])) {
    echo "
    <div class='row mb-3'>
        <div class='offset-sm-3 col-sm-6'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <span>{$_SESSION['successMessage']}</span>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        </div>
    </div>";

    
    unset($_SESSION['successMessage']);
}


if (isset($_SESSION['errorMessage'])) {
    echo "
    <div class='row mb-3'>
        <div class='offset-sm-3 col-sm-6'>
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <span>{$_SESSION['errorMessage']}</span>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        </div>
    </div>";

    
    unset($_SESSION['errorMessage']);
}
?>