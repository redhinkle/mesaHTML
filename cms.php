

    <?php
error_reporting(0);
    // Open a known directory, and proceed to read its contents

function recurse($dir,$levels = 0){

    $marginleft = $levels * 10;
    echo 'levels are '.$levels.'<br>';
      if ($dh = opendir($dir)) {

            while (($file = readdir($dh)) !== false) {

                if ($file == '.' || $file== '..') continue;
                if (is_dir($dir.'/'.$file)){
                     $levels++;
                    echo 'Directory: '.$dir.'/'.$file.'<br>';
                    recurse($dir.'/'.$file,$levels);
                }
                else {
               //test folder...if it is a directory call function and send new path
                //else
             echo   '<span style="margin-left: '.$marginleft.'"><a href="'.$file.'">Visit '.$file.'</a></span><br>';
                }
             }

            closedir($dh);
        }
    }

recurse('.');
/*
echo '<a href="cms.php?file='.$file.'"> Edit '.$file.'</a> */

    ?>

cms.txt
Displaying cms.txt.
