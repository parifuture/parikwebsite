<?php
	$handle = @fopen("500kb", "r");
		if ($handle) {
		    while (($buffer = fgets($handle, 4096)) !== false) {
		    	$doc = strpos($buffer, 'doc');
		    	$pdf = strpos($buffer, 'pdf');
		    	$docx = strpos($buffer, 'docx');
		    	$zip = strpos($buffer, 'zip');
		    	
		    	if($doc === false || $pdf === false || $docx === false || $zip === false)
		        echo 'convert '.$buffer.'-resize 700x700\> '.$buffer.'<br/>';
		    }
		    if (!feof($handle)) {
		        echo "Error: unexpected fgets() fail\n";
		    }
		    fclose($handle);
	}
?>


convert uploads/78c0eb69/52e7d27f/ba6d3fac.jpg -resize 401x599\> ./uploads/78c0eb69/52e7d27f/ba6d3fac.jpg