<html>

<head>
    <title>Patient Information</title>
</head>

<body>
    <h3>Patient Information</h3>
    <table width="100%" border="1px" style="text-align: center" ;>
        <tr>
            <td>
                QR Code
            </td>
            <td>
                Patient ID
            </td>
            <td>
                Patient Name
            </td>
            <td>
                Patient Room
            </td>
            <td>
                Patient Blood Preasure
            </td>
            <td>
                Patient SpO2
            </td>
            <td>
                Patient Weight
            </td>
            <td>
                Patient Picture
            </td>
        </tr>
        <?php
        $servername = "mysql";
        $username = "test";
        $password = "test";
        $dbname = 'test';

        // Create connection
        $mysqli = mysqli_connect($servername, $username, $password, $dbname);

        // return $sql;
        $sql = 'SELECT * FROM patient_information';
        $result = $mysqli->query($sql);
        foreach ($result as $r) { ?>
            <tr>
                <td>

                    <img src="./qrcode_generator/qrcode.php?s=qr&d=<?= $r['patient_id'] ?>&sf=8&ms=r&md=0.8" alt="">

                </td>
                <td>
                    <?= $r['patient_id'] ?>
                </td>
                <td>
                    <?= $r['patient_name'] ?>
                </td>
                <td>
                    <?= $r['patient_room_number'] ?>
                </td>
                <td>
                    <?= $r['patient_blood_pressure'] ?>
                </td>
                <td>
                    <?= $r['patient_spo2'] ?>
                </td>
                <td>
                    <?= $r['patient_weight'] ?>
                </td>
                <td>
                    <?= $r['patient_image'] ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>