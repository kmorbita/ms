<?php 
require_once("../../model/AdminModel.php");
class AdminController
{
	protected $data;

	public function __construct()
	{
		$this->data = new AdminModel();
	}
	public function changepass()
	{
		$res = $this->data->toChangepass();
		return $res;
	}
	public function getLogout($user,$role)
	{
		$res = $this->data->Logout($user,$role);
		if ($res == true) {
			header("Location: ../../index.php");
		}
	}
}


?>