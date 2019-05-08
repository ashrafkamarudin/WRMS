<?php

/**
*  Basic Model
*/
class Submission_Model extends Model
{
	public $R_C_ID;
	public $R_Year;
	public $R_TotalWithdrawal;
	public $R_WaterAffected;
	public $R_RecycleReused;
	public $R_WaterRisk;
	public $R_Facility;
	public $R_Governance;
	public $R_Compliance;
	public $R_Target;
	private $R_Risk;

	private $table = 'result';

	public function setRisk($total_score, $C_IntensityType)
	{
		$this->R_Risk = $this->calcRisk($total_score, $C_IntensityType);
	}

	public function save($value='')
	{
		$data = [
			'R_C_ID' => $this->R_C_ID,
			'R_Year' => $this->R_Year,
			'R_TotalWithdrawal' => $this->R_TotalWithdrawal,
			'R_WaterAffected' => $this->R_WaterAffected,
			'R_RecycleReused' => $this->R_RecycleReused,
			'R_WaterRisk' => $this->R_WaterRisk,
			'R_Facility' => $this->R_Facility,
			'R_Governance' => $this->R_Governance,
			'R_Compliance' => $this->R_Compliance,
			'R_Target' => $this->R_Target,
			'R_Risk' => $this->R_Risk
			];

		if ($this->db->create($data, $this->table)) {
			return true;
		} 
		return false;
	}

	public function checkYear($year)
	{
		$data = ['*', 'where' => 'R_Year = "' . $year . '"'];

		$dataSet = $this->db->read($data, $this->table);

		if ($dataSet != NULL) {
			return false;
		}
		return true;
	}

	public function calcRisk($total_score, $C_IntensityType)
	{
		
		switch ($total_score) {
			case ($total_score <= 2): // Low Commitment

				switch ($C_IntensityType) {
					case 'HI':
						return 'High Risk';
						break;
					case 'MI':
						return 'High Risk';
						break;
					case 'LI':
						return 'Moderate Risk';
						break;
				}
				break;
			case ($total_score >= 3 && $total_score <= 5): // Moderate Commitment

				switch ($C_IntensityType) {
					case 'HI':
						return 'High Risk';
						break;
					case 'MI':
						return 'Moderate Risk';
						break;
					case 'LI':
						return 'Low Risk';
						break;
				}
				break;
			case ($total_score >= 6 && $total_score <= 8): // High Commitment

				switch ($C_IntensityType) {
					case 'HI':
						return 'Moderate Risk';
						break;
					case 'MI':
						return 'Low Risk';
						break;
					case 'LI':
						return 'Low Risk';
						break;
				}
				break;
		}
	}
}