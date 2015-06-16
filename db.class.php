<?php

class db
{
	private $con,$result;
		function __construct($servername,$username,$password,$database)
		{
			$this->con=mysqli_connect($servername,$username,$password,$database)or die(mysqli_connect_error());
			return $this->con;
		}
		
		public function Query($query)
		{
			$this->result=mysqli_query($this->con,$query)or die(mysqli_error($this->con));
			return $this->result;
		}
		
		public function Num_Result()
		{
			return mysqli_num_rows($this->result);
		}
		
		public function Get()
		{
			if(mysqli_num_rows($this->result)>0)
			{
				$data=[];
			
				while($fetch=mysqli_fetch_assoc($this->result))
				{
					array_push($data,$fetch);
				}
				return $data;
			}
			else
			{
				die("no result was found");
			}
		}
}
?>