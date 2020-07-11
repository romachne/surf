<?php

	/**
	 * Class of common functions
	 */
	class Commons
	{

		private $dbh = null;
		public function __construct($db)
		{
			$this->dbh = $db->dbh;
		}


	    /**
	     * Check username
	     */
	    public function isAvailableUsername($username)
	    {
	        $request = $this->dbh->prepare("SELECT username FROM admins WHERE username = ?");
	        return $request->execute( array($username) );
	    }


	    /*
	     * Check if a field is empty or not
	     */
	    public function isFieldEmpty($field)
	    {
	    	if ( isset($field) && ( empty($field) || trim($field)  == '' ) )
	    	{
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }



	    /*
	     * Redirecting helper
	     */
	    public function redirectTo($url)
	    {
	    	if (!headers_sent())
	    	{
	    		header('location:'.$url);
	    		exit;
	    	}else{
	    		print '<script type="text/javascript">';
	            print 'window.location.href="'.$url.'";';
	            print '</script>';

	            print '<noscript>';
	            print '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	            print '</noscript>'; exit;
	    	}
	    }


	}
