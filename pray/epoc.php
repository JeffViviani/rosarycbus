<?php
  $daysSinceEpoc = floor(time() / 86400);
  $weeksSinceEpoc = floor($daysSinceEpoc / 3.5);

  function numFilesInDir($dir)  {
    $fileCount = 0;
    $files = glob($dir . "*");
    if ($files){
      $fileCount = count($files);
    }
    return $fileCount;
  }

  function getScripture($dir, $weeksSinceEpoc) {
    $numPassages = numFilesInDir($dir);
    $todaysPassage = $weeksSinceEpoc % $numPassages;
    return file_get_contents($dir . strval($todaysPassage) . '.txt');
  }
?>