<?php

/**
*  Basic Model
*/
class Company_Model extends Model
{
	public $C_ID;
	public $C_Name;
	public $C_Address;
	public $C_Country;
	public $C_Email;
	public $C_ContactNum;
	public $C_BusinessType;
	public $C_IntensityType;

	private $table = 'company';

	public function save($value='')
	{
		$data = [
			'C_Name' => $this->C_Name,
			'C_Address' => $this->C_Address,
			'C_Country' => $this->C_Country,
			'C_Email' => $this->C_Email,
			'C_ContactNum' => $this->C_ContactNum,
			'C_BusinessType' => $this->C_BusinessType,
			'C_IntensityType' => $this->C_IntensityType
			];

		if ($this->db->create($data, $this->table)) {
			return true;
		} 
		return false;
	}

	public function read($intesityType)
	{
		$data = ['*', 'where' => 'C_IntensityType = "' . $intesityType . '"'];

		$dataSet = $this->db->read($data, $this->table);

		if ($dataSet != NULL) {
			return $dataSet;
		}
		return false;
	}

	public function update()
	{
		$data = [
			'C_Name' => $this->C_Name,
			'C_Address' => $this->C_Address,
			'C_Country' => $this->C_Country,
			'C_Email' => $this->C_Email,
			'C_ContactNum' => $this->C_ContactNum,
			'C_BusinessType' => $this->C_BusinessType,
			'C_IntensityType' => $this->C_IntensityType
			];

		if ($this->db->update($data, 'C_ID=' . $this->C_ID, $this->table)) {
			return true;
		}
		return false;
	}

	public function delete()
	{
		if ($this->db->delete('C_ID =' . $this->C_ID, $this->table)) {
			return true;
		}
		return false;
	}

	public function getById($C_ID)
	{
		$data = 'C_ID =' . $C_ID;

		return $this->db->getID($data, $this->table); // insert data
	}
}