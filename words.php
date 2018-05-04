<body>
<hr />
  <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="9999999" />
    <br />
    <label for="screenshot">Загрузить файл words.json:</label> 
    <br />
    <br />
    <input type="file" id="words" name="words" />
    <hr />
    <input type="submit" value="Add" name="submit" />
    <br />

</body> 



<?php
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.
define('GW_UPLOADPATH', 'js/');
define ('GW_MAX_FILE_SIZE', '500');
$words = $_FILES['words']['name'];
$words_type = $_FILES['words']['type'];
$words_size = $_FILES['words']['size'];

echo 'Какие данные сейчас в файле :' . '<br/>';
$words_serv = file_get_contents('js/words.json');

echo '<br /> ' . $words_type; 
echo '<br /> ' . $words_size; 
echo '<br /> ' . $words_type; 

    if (!empty($words)) {

      if (($words_type == 'application/json') &&
          ($words_size > 0 ) && ($words_size <= GW_MAX_FILE_SIZE)) {

            $target = GW_UPLOADPATH . $words;
        echo '<br />' . $target;
              if (move_uploaded_file($_FILES['words']['tmp_name'], $target)) {
                  
                 // Confirm success with the user
                  echo '<p>Thanks for adding your new high score!</p>';
                  #echo  '<strong>Screenshot</strong>' . $screenshots;
                  echo '<p><a href="index.php">&lt;&lt; Back to high scores</a></p>';
                
              }
         } 
         else {
            echo '<p class="error">Please add correct file format or filesize.</p>';      
            @unlink ($_FILES['screenshot']['tmp_name']);
    }
      }
    else {
      echo '<p class="error">Please enter all of the information to add your high score.</p>';
    }
   

echo $words_serv;
?>
  </form>
  <form name="form" action="" method="get">
  <input type="text" name="subject" id="subject" value=$words_serv>
</form>