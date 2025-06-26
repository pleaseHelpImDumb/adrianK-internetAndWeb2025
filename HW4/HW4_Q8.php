<!-- 19.9 Write a PHP script that obtains a URL and its description from a user and stores the infor-
mation into a database using MySQL. 

Create and run a SQL script with a database named URL and a table named Urltable. 

The first field of the table should contain an actual URL, and the second,
which is named Description, should contain a description of the URL. 

Use www.deitel.com as the
first URL, and input Cool site! as its description. 

The second URL should be www.php.net, and
the description should be The official PHP site. 

After each new URL is submitted, print the contents of the database in a table. 

[Note: Follow the instructions in Section 18.5.2 to create the Url
database by using the URLs.sql script that’s provided with this chapter’s examples in the dbscripts
folder.] -->

<!DOCTYPE html>
<html>
<head>
    <title>HW4_Q8</title>
    <style>
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
        $query = "SELECT * FROM urltable";
        
        if ((!($database = mysqli_connect("localhost","root","111111")))) 
            die("Could not connect to database </body></html>");
        
        if (!mysqli_select_db($database, "urls")) 
            die("Could not open urls database </body></html>");
        
        if (!($result = mysqli_query($database, $query))){
            print("<p>Could not execute query!</p>");
            die(mysqli_error($database) . "</body></html>");
        }             
        mysqli_close($database);
    ?>

    <table border="1">
        <caption>Results of URLS</caption>
        <?php 
            while ($row = mysqli_fetch_row($result)){
                print("<tr>");

                foreach($row as $key => $value){
                    print("<td>$value</td>");
                }
                print("</tr>");
            }
        ?>
    </table>
</body>
</html>