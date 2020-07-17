<?php
 include 'database.php';
//var_dump($database); die();
 $author = $_GET["author"];
 // var_dump($author); die();
 if (empty($author) || $author === "All") {
   // var_dump($database); die();
   header('Content-Type: application/json');
   echo json_encode($database);
 } else {
   $cdFilter= [];
   foreach ($database as $cd ) {
     if ($cd["author"] === $author) {
       $cdFilter[] = $cd;
     }
   }
   if (empty($cdFilter)) {
     $cdFilter = [
        [
          'title' => 'Nessun titolo',
          'author' => 'Nessun autore corrispondente',
          'year' => 'Non ci sono anni',
          'poster' => 'Nessun poster esistente'
        ]
      ];
   }
    header('Content-Type: application/json');
    echo json_encode($cdFilter);
 }



?>
