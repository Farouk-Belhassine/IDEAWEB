<?php 
include 'dbconfig.php';
class User{
	private $login;
    private $Password;
	private $role;
    public $conn;	

	public function __construct($login,$Password,$conn)
	{
		$this->login=$login;
		$this->Password=$Password;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPassword()
	{
		return $this->Password;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$login,$Password)
	{
		$req="select * from users where user_name='$login' && user_pass='$Password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>