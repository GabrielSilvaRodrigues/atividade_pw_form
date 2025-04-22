<?php include 'header.php'; ?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['user_type'];
    
    if ($tipo == "empresa") {
      include 'empresa_form.php';
    } else {
      include 'normal_form.php';
    }
}
?>
<?php include "footer.php"; ?>