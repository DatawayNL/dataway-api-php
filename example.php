<?php
class datawayAPI
{
	protected $auth;
	protected $errors;
		
	function auth($username, $password)
	{
		$this->auth->username = $username;
		$this->auth->password = $password; 
	}
	
	function request($action, $data = array())
	{
		$data['username'] = $this->auth->username;
		$data['password'] = $this->auth->password;
		
		$ch = curl_init('https://api.dataway.nl/'.$action);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = json_decode(curl_exec($ch));
		curl_close($ch);
		
		if($output->status == 1)
		{
			return $output->data;
		}
		
		$this->errors = $output->message;
	}
	
	function errors()
	{
		return $this->errors;
	}
}
?>
