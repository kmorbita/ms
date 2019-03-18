<?php 
require_once("model/LoginModel.php");
class LoginController
{
	protected $data;

	public function __construct()
	{
		$this->data = new LoginModel();
	}
	public function getLogin()
	{
		if ($_POST) {
			$res = $this->data->Login();
			if ($res == "1") {
				header("Location: ../ms/view/admin/index.php");
			}else if($res == "2"){
				header("Location: ../ms/view/clerk/index.php");
			}else{
				return $res;
			}
		}else{

		}
	}
	
}



?>