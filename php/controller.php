<?php
include 'connect.php';

if(isset($_POST['submit'])) {
    $datum_tijd = $_POST['datum_tijd'];
    $beschrijving = $_POST['beschrijving'];

    if($datum_tijd != "" && $beschrijving != "") {
        $sql = "INSERT INTO afspraken (datum_tijd, beschrijving) VALUES('$datum_tijd', '$beschrijving')";
        
        if($conn->query($sql) === true) {
            echo "Afspraak is toegevoegd!<br>";
            header('location: ../index.php');
        } else {
            echo "ERROR!: . $sql . <br> . $conn->error";
        }
    } else {
        echo "Vul alle velden in en klik op toevoegen!<br>";
    }
} else {
    // Submit is NOT clicked
}

function leesAfspraken() {
    include 'connect.php';

    $sql = "SELECT datum_tijd, beschrijving FROM afspraken";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['datum_tijd'] . " -- " . $row['beschrijving'] . "<br>";
        }
    } else {
        echo "Geen resultaten";
    }
    $conn->close();
}

?>