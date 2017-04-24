<?php

	$title = "Home Page";

?>

<DOCTYPE html>
<HTML><HEAD>
<TITLE><?php echo $title;  ?></TITLE>
</HEAD>

<BODY>

	<h1>Dealing with Strings -- Chapter 5</h1>
<!--
	<?php
		$text = "Hi how are you today, Trenton?";
		$text1 = "     Miami is in ";
		
		echo "$text";
		Echo "<br> $text " ;
		echo ("<br> $text");
		$text1 .= "Florida";
		echo"<br>";
		echo "$text1";
		$text2 = "Hi how are you, Trenton" . " was in the army.";
		echo"<br>";
		echo "$text2";
	?>
	
	<?php
		$text = "Hi how are you today, Trenton?";
		$vegetable = "broccoli";
		echo "<p>Do you have any $vegetable?</p>";
		echo "<p>Do you have any {$vegetable}s?</p>";
		
		//WORD COUNT
		echo "<h1>" . (strlen($text)) . "</h1>"; 							# COUNTING NUMBER CHARACTERS
		echo "<h1>" . (str_word_count($text)) . "</h1>"; 					# COUNTING NUMBER WORDS
		echo (lcfirst($text));												# MAKING FIRST LETTER LOWERCASE
		echo"<br>";
		echo "<span style=\"color:red;\">" . (ucfirst($text) . "</span>");	# MAKING FIRST LETTER UPPERCASE AND IN RED
		echo"<br>";
		echo (ucwords($text));												#MAKES ALL FIRST LETTERS IN ALL WORDS UPPERCASE
		$text = "         Hi how are you today, Trenton?      ";
		echo"<br>";
		echo (trim($text));													# TRIM TEXT FROM BOTH SIDES
		echo (ltrim($text1));
	?>
-->

	
	<?php
		$exampleText = "Wood Working Project";
		echo "Original Text: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . ($exampleText). "<br> </span>";
		echo "First word Subtracted: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (substr($exampleText, 4)) . "<br> </span>";
		echo "First word middle: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (substr($exampleText, 2,8)) . "<br> </span>";
		echo "First word Subtracted: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (substr($exampleText, -7)) . "<br> </span>";
		echo "First word Subtracted: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (substr($exampleText, -15,8)) . "<br> </span>";
		echo "First word Subtracted: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (substr($exampleText, 5,10)) . "<br> </span>";
		
		/*
		 * mds() strrev()  str_shuffle()
		 */
		
		$password = "The baby is so cute";
		echo "<br><br>Original Text: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . ($password) . "<br> </span>";
		echo "Encrypted: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (md5($password)) . "<br> </span>";
		echo "Reverse the phrase: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (strrev($password)) . "<br> </span>";
		echo "Encrypted after reverse the word: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (md5(strrev($password))) . "<br> </span>";
		echo "Shuffled: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (str_shuffle($password)) . "<br> </span>";
		echo "Encrypted after shuffled: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . (md5(str_shuffle($password))) . "<br> </span>";
		
		echo"<br><br><br>";
		$email = "president@whitehouse.gov";
		echo "<br><br>Original Text: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . ($email) . "<br> </span>";
		echo "Position No @: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . strpos($email, '@') . "<br> </span>";
		echo "replace president: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">   " . str_replace("president", "vice.president", $email) . "<br> </span>";
		echo "replace president, case sensitive: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">   " . str_replace("pResident", "vice.president", $email) . "<br> </span>";
		echo "replace president, not case sensitive: <span style=\"color:red;text-decoration:underline;font-size:20;font-weight:bold;\">" . str_ireplace("pResident", "vice.president", $email) . "<br> </span>";
		
		echo"<br><br><br>";
		if(strpos($email, '@')){
			echo "Okay email";
		}else{
			echo "Invalid Email";
		}
		
		$var1 = "Don";
		$var2 = "Dan";
		$var3 = "Doncald";
		echo"<br><br><br>";
		echo (strcmp("Dan", "Don")) . ", ";
		echo (strcmp("Don", "Dan")) . ", ";
		echo (strcmp("Don", "Don")) . ", ";
		echo (strcmp("DOn", "Dan")) . ", ";
		echo (strcasecmp("DOn", "Don")) . ", ";
		echo (strcasecmp("DOnald", "Don")) . ", ";
		
		
		echo"<br><br><br>";
		if($var1 == $var2){
			echo "You are logged in";
		}else{
			echo "You do not have VISA go away!!";
		}
		
	?>
	

</BODY>

</HTML> 