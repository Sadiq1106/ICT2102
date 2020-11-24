
                        <?php
                         define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
                         define("DBNAME", "sql1902670ian");
                         define("DBUSER", "ict1902670ian");
                         define("DBPASS", "NAI0762091");

                        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                        ?>
<?php
                        if (isset($_POST['submit'])) {
                            ?>
                            <table class="table_summary">
                                <tr>
                                    <td>Check-in (Date)</td>
                                    <td>Room Type</td>
                                </tr>
                                <?php
                                    $search = "%{$_POST['searchdate']}%";
                                    $flag = 0;
                                    $sql = $conn->prepare("select flight_to, takeoff_date from flight where date(takeoff_date) like ?");
                                    $sql->bind_param("s", $search);
                                    $sql->execute();
                                    $result = $sql->get_result();
                                    $sql->close();
                                   
                                    while ($data = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <tr>
                                        <td>
                                        <p>Flight From: <?php echo $data['flight_from'] ?></p>
                           <p>Flight To: <?php echo $data['flight_to'] ?></p>
                           <!-- <p>Ticket Price: <?php echo $data['ticket_price'] ?></p> -->
                           <p>Takeoff Date:<?php echo $data['takeoff_date'] ?></p>
                           <p>Takeoff Time: <?php echo $data['takeoff_time'] ?></p>
                           <p>Expected Touchdown Date: <?php echo $data['expected_touchdown_date'] ?></p>
                           <p>Expected Touchdown Time: <?php echo $data['expected_touchdown_time'] ?></p>
                                        </td>
                                        
                                    </tr>
                                <?php
                                    }
                                    ?>
                            </table>
                        <?php
                        }
                        mysqli_close($conn);
                        ?>