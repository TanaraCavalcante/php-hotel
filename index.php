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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/33f70ca49a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="py-3">
        <h2 class="mb-5">Hotel List</h2>
    </header>
    <main class="container">
            <section>
                <form action="" method="get" style="width: 18rem;">
                    <div>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Do you need a parking?</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                        <div class="mb-3">
                            <input class="form-control" id="word" name="stars" placeholder="How many stars in the hotel?"></input>
                        </div>
                    </div>
                    <div >
                        <button type="submit" class="btn btn-warning">Submit</button>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                </form>
            </section>
            <section class="my-3">
                <ul class="list-unstyled">
                    <?php  foreach($hotels as $hotel) { ?>
                         <li class="card-title fs-5">  <?php echo $hotel["name"] ?>   </li>
                        <li class="card-subtitle mb-2 text-muted">  <?php echo $hotel["description"] ?>   </li>
                         <li class="card-text">  
                            <?php 
                                if($hotel["parking"] === true){
                                    echo "Has parking!";
                                }else{
                                    echo "No parking!";}
                            ?>
                        </li>
                        <li class="card-text">Vote:  <?php echo $hotel["vote"] ?> <i class="fa-solid fa-star" style="color: #FFD43B;"></i> </li>
                        <li class="card-text mb-3">Distance to center:  <?php echo $hotel["distance_to_center"] ?> kms  </li>
                        <hr>
                    <? } ?>
                </ul>
            </section>
    </main>
    
</body>
</html>