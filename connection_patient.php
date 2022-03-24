<?php

 
  if (isset($_POST['submit'])) 
        {

                    if (isset($_POST['pname']) && 
                        isset($_POST['gender']) &&
                        isset($_POST['dob']) &&
                        isset($_POST['aadhar']) &&                         
                        isset($_POST['mno']) && 
                        isset($_POST['email']) && 
                        isset($_POST['state']) && 
                        isset($_POST['bgroup']) && 
                        isset($_POST['district']) && 
                        isset($_POST['disease']) &&
                        isset($_POST['city']) &&
                        isset($_POST['last']) 
                        )
                    {

                            $pname = $_POST['pname'];
                            $gender = $_POST['gender'];
                            $dob = $_POST['dob'];
                            $aadhar = $_POST['aadhar'];
                            $mno = $_POST['mno'];
                            $email = $_POST['email'];
                            $state = $_POST['state'];
                            $bgroup = $_POST['bgroup']; 
                            $district = $_POST['district'];
                            $disease = $_POST['disease'];
                            $city = $_POST['city'];
                            $last = $_POST['last'];



                            $host = "localhost";
                            $dbUsername = "root";
                            $dbPassword = "";
                            $dbName = "test";
                            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
                                if ($conn->connect_error) 
                                {
                                    die('Could not connect to the database.');
                                }

                                else 
                                {
                                            $Select = "SELECT aadhar FROM patientinfo WHERE aadhar=? LIMIT 1";
                                            $Insert = "INSERT INTO patientinfo(pname, gender,dob, aadhar, mno, email, state, bgroup, district, disease, city, last) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                                            $stmt = $conn->prepare($Select);
                                            $stmt->bind_param("s", $aadhar);
                                            $stmt->execute();
                                            $stmt->bind_result($resultaadharno);
                                            $stmt->store_result();
                                            $stmt->fetch();
                                            $rnum = $stmt->num_rows;
                                            if ($rnum == 0) 
                                                {
                                                    $stmt->close();
                                                    $stmt = $conn->prepare($Insert);
                                                    $stmt->bind_param("sssiissssssi", $pname, $gender, $dob, $aadhar, $mno, $email, $state, $bgroup, $district, $disease, $city, $last);
                                                    if ($stmt->execute())
                                                    {
                                                        echo "New record inserted sucessfully.";
                                                    }
                                                    else
                                                    {
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