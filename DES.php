<html>
<body>
		<center>



   <form action="upload_file.php" method="post">

date:<input type="date" name="date" id="date" value="<?php $date ?> "></input><br><br>
product:<input type="text" name="product" id="product" value="<?php $product ?>"></input><br><br>
expense:<input type="text" name="expense" id="expense" value="<?php $expense ?>"></input><br><br>

enctype="multipart/form-data"><label for="file">Filename:</label><input type="file" name="file" id="file" /> <br />

<button type="submit" name="submit" value="submit">submit</button>

</form>
        







        

        <footer>
            <div class="footer">
                <h6 class="text-center">
                    Copyright © 1880-2021, KHEMCHAND VAIJNATH SHAH ® By ARYA NIMESHKUMAR SHAH
                </h6>
            </div>

        </footer>
		</center>
</body>
</html>

<?php

if(isset($_POST['submit'])){
	$date=$_POST["date"];
	$product=$_POST["product"];
	$expense=$_POST["expense"];
	echo $date;
	echo $product;
	echo $expense;
}


$connection=mysqli_connect("localhost","root","","expensesheet");
if(!$connection){
	echo "connection error";
}
else{
	echo "connection successful";
}
	

$query= "INSERT INTO `dailyexpensesheet`(`date`,`product`,`expense`) VALUES ('". $date ."','". $product ."','". $expense ."')";
mysqli_query ($connection,$query);
	
	







?>