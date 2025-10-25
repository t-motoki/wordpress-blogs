<?php
  function br(){
    echo nl2br("\n");
  }
  echo "hello from the TOP!";
  br();
  echo "hello from the TOP! again!";
 ?>
<!DOCTYPE html>
<html lang="ja">
  <body>

    <p>Hello World<?php echo " from PHP"; ?></p>

  </body>
</html>
