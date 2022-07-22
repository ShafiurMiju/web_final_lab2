<?php
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="lab_2";

	$conn=new mysqli($servername,$username,$password,$dbname);

    //$q="INSERT INTO student(name,email) VALUES('saltu mia','saltu@gmail.com')";

   /* $result=$conn->query($q);

		if($result){
			echo "Data inserted";
		}
		else{
			echo("data not inserted");
		}*/

        $q="SELECT * FROM student";

        $result=$conn->query($q);        

        if($result->num_rows>0){
            ?>
            <table style="border: 1px solid black; border-collapse:collapse;width:500px">
                <tr >
                    <th style="border: 1px solid black; border-collapse:collapse;width:100px;">ID</th>
                    <th style="border: 1px solid black; border-collapse:collapse;width:200px">Name</th>
                    <th style="border: 1px solid black; border-collapse:collapse;width:200px">Email</th>
                </tr>
        </table>
            <?php
            while($row=$result->fetch_assoc()){
                $id=$row["id"];
                $name=$row["name"];
                $email=$row["email"];?>
            <table style="border: px solid black; border-collapse:collapse;width:500px">
                <tr>
                    <td style="border: 1px solid black; border-collapse:collapse;width:100px; text-align:center;"><?php echo $id; ?></td>
                    <td style="border: 1px solid black; border-collapse:collapse;width:200px; text-align:center;"><?php echo $name; ?></td>
                    <td style="border: 1px solid black; border-collapse:collapse;width:200px; text-align:center;"><?php echo $email; ?></td>
                </tr>
            </table>

                <?php
            }
        }
    
?>

<html>
    <header>
        <title>Student database</title>
    </header>
    <body>

    </body>
</html>