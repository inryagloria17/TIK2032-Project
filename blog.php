<?php
  include 'koneksi.php';
?>

<html>
    <head>
        <title>Inrya's Personal Homepage</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
      <div class="main">
        <div class="navbar">
          <label class="logo">My Blog</label>
          <ul>
            <li><a href= "MAIN.php" >HOME </a></li>
            <li><a href= "gallery.php" >GALLERY </a></li>
            <li><a href= "contact.php" >CONTACT </a></li>
          </ul>
        </div>
      </div>
        <div class="content">
          <h2>
            ARTIKEL MINAHASA TERKINI
          </h2>
          <?php
            $sql = "SELECT judul, url FROM link_blog";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<p><a href='" . $row["url"] . "'>" . $row["judul"] . "</a></p>";
                }
              } else {
                  echo "<p>No blog posts found.</p>";
              }
            ?>
        </div>
    </body>
</html>