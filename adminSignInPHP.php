<?php

include_once 'DBConnection.php';  //var $conn

    if( isset($_POST['questionSubmitButton']) ){
        
        //create table if it is'nt present
        $tableSqlQuestions = "CREATE TABLE `online_exam`.`question_set` IF NOT EXISTS (
                                `sr_no` int(4) NOT NULL AUTO_INCREMENT,
                                `question` varchar(255) NOT NULL,
                                `option1` varchar(255) NOT NULL,
                                `option2` varchar(255) NOT NULL,
                                `option3` varchar(255) NOT NULL,
                                `option4` varchar(255) NOT NULL,
                                `f_answer` varchar(255) NOT NULL,
                                 PRIMARY KEY (`sr_no`)
                            ) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1";
        
            mysqli_query($conn, $tableSqlQuestions);
        
            $sqlQuestion = "INSERT INTO `online_exam`.`question_set` (question, option1 , option2 , option3, option4, f_answer) VALUES ('".$_POST["question"]."', '".$_POST["option1"]."', '".$_POST["option2"]."', '".$_POST["option3"]."', '".$_POST["option4"]."', '".$_POST["answer"]."')";
            
            if (mysqli_query($conn, $sqlQuestion)) {
                echo "<br> Question submitted successfully into database <br>";
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    }

?>
<footer>
<input type="button" value="click here to view questions" class="homebutton" id="btnHome" onClick="document.location.href='viewQuestions.php'" />
</footer>