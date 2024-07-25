<?php
        // Check if the WMID parameter is present in the URL
        $id;
        $name;
        $email;
        $address;
        $accessLevelshow;
        $password;

        include '../database/config.php';

        if (isset($_GET['WMID'])) {
            // Get the WMID value from the URL
            $WMID = $_GET['WMID'];
            $id = $WMID;

            $sql = "SELECT name,email,address,access_level,password FROM webmaster WHERE WMID= '$WMID'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $name = $row['name'];
                $email = $row['email'];
                $address = $row['address'];
                $accessLevelshow = $row['access_level'];
                $password = $row['password'];
            } else {
                // echo "No webmaster found with the given WMID.";
            }

            $sql = "SELECT * FROM webmaster_contact WHERE WMID= '$WMID'";
            $result = $conn->query($sql);

            $contact_no1=null;
            $contact_no2=null;

            if ($result->num_rows > 0) {
                // Fetching data from each row
                $x=0;
                while ($row = $result->fetch_assoc()) {
                    if($x==0){
                        $contact_no1 = $row['contact_no'];
                        $x++;
                    }else{
                        $contact_no2 = $row['contact_no'];
                    }
                }
            } else {
                // echo "No data found.";
            }


        } else {
            echo "WMID parameter is missing.";
        }
        ?>