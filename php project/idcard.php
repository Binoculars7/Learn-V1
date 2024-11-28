<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ID Card Generator</title>
  <link rel="stylesheet" href="idcard.css">
</head>
<body>


  <form id="user-form" method="GET">
    <div class="form-input">
        <input name="fname" type="text" placeholder="Full Name" required>
    </div>
    <div class="form-input">
        <input name="position" type="text" placeholder="Position" required>
    </div>
    <div class="form-input">
        <input name="department" type="text" placeholder="Department" required>
    </div>
    <div class="form-input">
        <input name="submit" type="submit">
    </div>
  </form>


  <?php
  


    if (isset($_GET['submit'])) {
             # Collection of User information
       $fname = $_GET['fname'];
       $position = $_GET['position'];
       $department = $_GET['department'];

    # id NUMBER AUTO GENERATOR

    $id_num1 = rand(50, 999);
    $id_num2 = rand(1000, 3000);
    $final_id = $id_num1.$id_num2;

     # Date to expire
    $date = date('d-m');
    $exp_year = date('Y') + 1; 
    $real_date = $date.'-'.$exp_year;

         # THE ID UI
       echo '<div class="id-card">
    <div class="header">
      <h2>Global Funds</h2>
    </div>
    <div class="photo">
      <img src="../person_1.jpg" alt="ID Photo">
    </div>
    <div class="details">
      <h3>'.$fname.'</h3>
      <p>ID: '.$final_id.'</p>
      <p>Position: '.$position.'</p>
      <p>Department: '.$department.'</p>
    </div>
    <div class="footer">
      <p>Valid Until: '.$real_date.'</p>
    </div><a class="new_id" href="idcard.php">Generate new card</a>
  </div>
  
  ';
        
   
       # THe script to remove the form after submit

    echo "<script>
    const userform = document.getElementById('user-form');
    userform.style.display = 'none';
</script>";
 }
  ?>




</body>
</html>
