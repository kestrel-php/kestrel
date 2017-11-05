<?php
	/**
	* 
	*/

	class user extends Eloquent
	{
		protected $table = 'user';
		//constr
		public function load()
		{
			# code...
			$d = 90 * 90;
			return $d;
		}

	}
?>