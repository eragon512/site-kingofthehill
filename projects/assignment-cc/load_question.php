<?php
	
	function load_question($q_data) {
		echo "<div class='question'>\n";
			echo $q_data["q_title"]."\n";
			if($q_data["q_type"] == "options") {
				//$connect = mysqli_connect('localhost','root','','assignment-cc');
				$connect = mysqli_connect('mysql.hostinger.in','u730133463_samal','g8S^|6BJh@','u730133463_proj');
				$result = mysqli_query($connect,"SELECT * FROM question_options WHERE q_id=".$q_data["q_id"].";");
				
				$q_options = [];
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$q_options[] = $row;
				};

				mysqli_free_result($result);
				mysqli_close($connect);
				
				echo "<div class='options'>\n";
				foreach($q_options as $options_entry) {
					echo "<div class='radio'>\n";
						echo "<label><input type='radio' name='".$options_entry["q_id"]."' id='Q".$options_entry["q_id"].$options_entry["op_no"]."' value='".$options_entry["op_no"]."'>".$options_entry["op_no"].". ".$options_entry["op_text"]."</label>";
					echo "</div>\n";
				}
				unset($options_entry);
				echo "</div>\n";
			}
			else if($q_data["q_type"] == "fib") {
				echo "<div class=''>\n";
				echo "</div>\n";
			}
		echo "</div>\n";
	}

	function load_all_questions() {
		//$connect = mysqli_connect('localhost','root','','assignment-cc');
		$connect = mysqli_connect('mysql.hostinger.in','u730133463_samal','g8S^|6BJh@','u730133463_proj');
		$result = mysqli_query($connect,"SELECT * FROM questions");
		
		$all_q_data = [];
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$all_q_data[] = $row;
		};
		
		mysqli_free_result($result);
		mysqli_close($connect);

		//print_r($all_q_data);
		
		foreach($all_q_data as $entry) {
			//print_r($entry);
			load_question($entry);
		}
	}