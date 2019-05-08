<?php

/**
*  Basic Model
*/
class Report_Model extends Model
{

	public function read($year)
	{
		$query = "SELECT * FROM `result` INNER JOIN `company` ON company.C_ID = result.R_C_ID WHERE result.R_Year = " . $year;

		$dataSet = $this->db->run($query);

		if ($dataSet != NULL) {
			return $dataSet;
		}
		return false;
	}
}