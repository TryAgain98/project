<?php
                    
                    $sqls = "select * from quanly"; 
                    $results = mysqli_query($conn, $sqls);
                    if (mysqli_num_rows($results) > 0) {

                        while ($rows = mysqli_fetch_assoc($results)) {
                            print "<p id='Name'> Công ty : ".$rows["name"]."</p>";
                              print "<p id='address' >Địa chỉ : ".$rows["address"]."</p>";
                               print "<p id='email'  > Email :".$rows["email"]."</p>";
                                print "<p id='phone'> Số điện thoại : ".$rows["phone"]."</p>";
                                 print "<p id='add'>".$rows["add"]."</p>";
								 print "</br>";
                        }
                    }
                    mysqli_close($conn);
                    ?>
