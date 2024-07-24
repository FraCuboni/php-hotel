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
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table table-bordered">

                    <!-- head -->
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>


                    <!-- body -->
                    <tbody>

                        <!-- php per generazione elementi in tabella -->
                        <?php

                        $counter = 0;

                        foreach ($hotels as $hotel) {

                            $name = $hotel["name"];
                            $description = $hotel["description"];
                            $parking = $hotel["parking"];
                            $vote = $hotel["vote"];
                            $distance_to_center = $hotel["distance_to_center"];

                            $counter++;
                            echo "<tr>";
                            echo "<th scope ='row'>" . $counter . "</th>";
                            echo "<td>" . $name . "</td>";
                            echo "<td>" . $description . "</td>";
                            echo "<td>" . ($parking ? "Yes" : "No") . "</td>";
                            echo "<td>" . $vote . "/5" . "</td>";
                            echo "<td>" . $distance_to_center . "km" . "</td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>