<?php

	function get_user_count(){
		$connection = mysqli_connect("localhost:7882","root","","crud");
		
		$user_count = "";
		$query = "select count(*) as user_count from users";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}

	function get_book_count(){
		$conn = mysqli_connect("localhost:7882","root","","crud");
		
		$book_count = "";
		$query = "select count(*) as book_count from books";
		$query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$book_count = $row['book_count'];
		}
		return($book_count);
	}

	function get_category_count(){
		$conn1 = mysqli_connect("localhost:7882","root","","crud");
		
		$cat_count = "";
		$query = "select count(*) as cat_count from category";
		$query_run = mysqli_query($conn1,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$cat_count = $row['cat_count'];
		}
		return($cat_count);
	}

	function get_author_count(){
		$conn2 = mysqli_connect("localhost:7882","root","","crud");
		
		$author_count = "";
		$query = "select count(*) as author_count from authors";
		$query_run = mysqli_query($conn2,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$author_count = $row['author_count'];
		}
		return($author_count);
	}

	function get_issued_book_count(){
		$conn3 = mysqli_connect("localhost:7882","root","","crud");
		
		$issued_book_count = "";
		$query = "select count(*) as issued_book_count from issued_books";
		$query_run = mysqli_query($conn3,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$issued_book_count = $row['issued_book_count'];
		}
		return($issued_book_count);
	}
?>