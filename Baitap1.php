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
  </style>
</head>
<body>
  <?php
    echo '<div>';
    for ($i = 1; $i <= 100; $i++) {
        $class = ($i % 2 === 0) ? 'even' : 'odd';
        echo "<span class=\"number $class\">$i</span>";
    }
    echo '</div>';
  ?>
</body>
</html>