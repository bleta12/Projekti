<?php
 include_once 'Piktura.php';
 include_once 'PikturaRepository.php';

  $errorMesazh="";
  $successMessage="";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $piktura=$_POST["Piktura"];
    $emri=$_POST["Emri"];
    $autori=$_POST["Autori"];
    $cmimi=$_POST["Cmimi"];


   do {

    if(empty($piktura) ||empty($emri) ||empty($autori) ||empty($cmimi)){
        $errorMesazh=" Duhet te plotesohen te gjitha hapsirat";
        break;
    }
    
   
    $piktura1 = new Piktura($piktura,$emri,$autori,$cmimi);

    $pikturaRepository = new PikturaRepository();
    $exist=$pikturaRepository ->insertPainting($piktura1);
  
    if (!$exist) {
        $errorMesazh="Piktura ekziston";
        break;
    }
    
    $successMessage = "Piktura eshte shtuar me sukses";

     header("location: Tabela.php");
     exit;

   }while(false);

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pikturat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?php include "Header.php" ?>
<body>
 
    <div class="container my-5">
         <h2>New Painting</h2>
        <?php

         if(!empty($errorMesazh)){
            echo "  
         <div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <span>$errorMesazh</span>
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
         </div>
            ";
         } 

         ?>
         <form method="POST">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Piktura</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Piktura" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Emri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Emri" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Autori</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Autori" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cmimi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Cmimi" value="">
                </div>
            </div>

            <?php

            if(!empty($successMessage)){
                echo " 
                <div class='row mb-3'>
                   <div class='offset-sm-3 col-sm-6'>
                     <div class='alert alert-success alert-dissmisible fade show' role='alert'>
                        <span>$successMessage</span>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>
                </div>
             </div>";

            }

            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="Submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                      <a class="btn btn-outline-primary" href="Tabela.php" role="button">Cancel</a>
                </div>
            </div>
         </form>
    </div>
</body>
<?php include "Footer.php" ?>
</html>