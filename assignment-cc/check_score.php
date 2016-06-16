<?php
	function check_answer($q_id,$sent_val) {
		$connect = mysqli_connect('localhost','root','','assignment-cc');
		$q_id = mysqli_real_escape_string($connect,$q_id);
		$sent_val = mysqli_real_escape_string($connect,$sent_val);
		$result = mysqli_query($connect,"SELECT * FROM question_answers WHERE q_id=".$q_id.";");
		
		if($result) {
			$check = mysqli_fetch_array($result,MYSQLI_ASSOC);
			mysqli_close($connect);
			if($check["ans_value"] == $sent_val) {
				return true;
			} else {
				return false;
			}
		} else {
			mysqli_close($connect);
			throw("Invalid Question");
		}
		
		return false;
	}

	function count_score($list) {
		$score = (int)0;
		foreach($list as $key => $value) {
			if(check_answer($key,$value))
				$score++;
		}
		return (int)$score;
	}

	function get_score() {
		return count_score($_POST);
	}
?>