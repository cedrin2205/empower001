
   <!DOCTYPE>
   <html>
    <head>
      <title>Users</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href=>
    </head>
    <body>
    
    <div class="left-sidebar">
    <h2 style="font-size: medium;">Registered Users:</h2>
    
    <div class="users-students" " style="
   
      
      ">
      <?php
      include "database.php";
      
      $sql = "SELECT r.lrn, u.full_name, u.role, u.email FROM registrar r INNER JOIN users u ON r.lrn = u.lrn";
      $result = mysqli_query($conn, $sql) or die("Error in SQL query");

      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $lrn = $row['lrn'];
              $full_name = $row['full_name'];
              $role = $row['role'];
              $email = $row['email'];
              echo "<p style='font-size: 12px; padding-left: 20px;'>LRN: $lrn</p>";
              echo "<p style='font-size: 12px; padding-left: 20px;'>Name: $full_name</p>";
              echo "<p style='font-size: 12px; padding-left: 20px;'>Role: $role</p>";
              echo "<p style='font-size: 12px; padding-left: 20px;'>Email: $email</p>";
          }
      } else {
          echo "No registered users found.";
      }
      ?>
    </div>
   
</div>
        </div>

    </body>
   </html> 
    
    
    
<script>
    function validateForm() {
        var lrn = document.getElementById('lrn').value;
        var strand = document.getElementById('strand').value;

        if (lrn === "" || strand === "") {
            alert("Please fill up LRN and select a strand.");
            return false;
        }
        return true;
    }
</script>