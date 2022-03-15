<?php
if (isset($_POST['submit'])) 
{

    if (isset($_POST['firstname']) && 
        isset($_POST['lastname']) &&
        isset($_POST['age']) && 
        isset($_POST['aadharno']) &&
        isset($_POST['address']) && 
        isset($_POST['city']) && 
        isset($_POST['upin']) && 
        isset($_POST['bgroup']) && 
        isset($_POST['pnumber']) && 
        isset($_POST['disease'])
        )
    {
        
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $aadharno = $_POST['aadharno'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $upin = $_POST['upin'];
            $bgroup = $_POST['bgroup']; 
            $pnumber = $_POST['pnumber'];
            $disease = $_POST['disease'];


            
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "test";
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
                if ($conn->connect_error) 
                {
                    die('Could not connect to the database.');
                }

                else {
                            $Select = "SELECT aadharno FROM donor WHERE aadharno = ? LIMIT 1";
                            $Insert = "INSERT INTO donor(firstname, lastname, age, aadharno, address, city, upin, bgroup, pnumber, disease) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = $conn->prepare($Select);
                            $stmt->bind_param("s", $aadharno);
                            $stmt->execute();
                            $stmt->bind_result($resultaadharno);
                            $stmt->store_result();
                            $stmt->fetch();
                            $rnum = $stmt->num_rows;
                            if ($rnum == 0) 
                                {
                                    $stmt->close();
                                    $stmt = $conn->prepare($Insert);
                                    $stmt->bind_param("ssiissisis",$firstname, $lastname, $age, $aadharno, $address, $city, $upin, $bgroup, $pnumber, $disease);
                                    if ($stmt->execute()) {
                                        echo "New record inserted sucessfully.";
                                    }
                                    else {
                                            echo $stmt->error;
                                        }
                                }
                            else 
                            {
                                echo "Someone already registers using this Aadhar No. ";
                            }
                                $stmt->close();
                                $conn->close();
                        }
    }
    
        else
        {
            echo "All field are required.";
            die();
        }
}
    else 
    {
            echo "Submit button is not set";
    }
?>