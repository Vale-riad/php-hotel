<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
foreach($hotels as $hotel){
    var_dump($hotel);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- /Bootstrap-link -->

    <title>PHP Hotel</title>
</head>
<body>
  <h4>Lista degli hotel</h4>  
  <ul>
    <?php foreach($hotels as $key => $hotel){ ?>
    <li><?php echo $hotel["name"];?></li>
    <li><?php echo $hotel["description"];?></li>
    <li><?php echo $hotel["parking"];?></li>
    <li><?php echo $hotel["vote"];?></li>
    <li><?php echo $hotel["distance_to_center"];?></li>
    <?php } ?>
  </ul>

  <table class="table">
  <?php foreach($hotels as $key => $hotel){ ?>
  <thead>
    <tr>
    <th scope="row">Nome Hotel:</th>
      <th><?php echo $hotel["name"];?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Descrizione:</th>
      <td><?php echo $hotel["description"];?></td>
    </tr>
    <tr>
      <th scope="row">Parking:</th>
      <td><?php echo $hotel["parking"];?></td>
    </tr>
    <tr>
      <th scope="row">Voto:</th>
      <td><?php echo $hotel["vote"];?></td>
    </tr>
    <tr class="gx-3">
      <th scope="row">Distanza dal centro:</th>
      <td ><?php echo $hotel["distance_to_center"];?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</body>
</html>