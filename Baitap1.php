<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>In 1-100</title>
  <style>
    .odd {
      color: blue;
      font-weight: bold;
      font-style: italic;
    }
    .even {
      color: red;
      font-weight: bold;
    }
    /* Tùy chọn: khoảng cách giữa các số */
    .number {
      margin-right: 6px;
    }
    Utt80nam
  </style>
</head>
<body>
  <?php
    echo '<div>';
    for ($i = 1; $i <= 100; $i++) { 

      if( $i % 2 == 0){
        echo "<b> <span class = 'number' style = 'color: red' > $i </div>";
      }
      else{
        echo "<b> <span class = 'number' style = 'color: blue' > $i </div>";
      }
        // $class = ($i % 2 === 0) ? 'even' : 'odd';
        // echo "<span class=\"number $class\">$i</span>";
    }
    echo '</div>';
  ?>
</body>
</html>