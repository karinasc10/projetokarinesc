<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['usuario_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="usuarios">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id = {$_SESSION['usuario_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
        
        if($row['img'] == '' || $row['img'] == null){

 echo '<img src="data:image/jpeg;base64,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" alt="">';

       }else{
        echo '<img src="php/images/'. $row['img'] .'" alt="">';


       }  ?>
       
       
       <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Selecione um Planaltinense</span>
        <input type="text" placeholder="Pesquise por um Planaltinense...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="usuarios-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
