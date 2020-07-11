<?php

	/**
	* The admins class
	* It contains all action and behaviours admins may have
	*/
	class Admins
	{

		private $dbh = null;

		public function __construct($db)
		{
			$this->dbh = $db->dbh;
		}

		public function loginAdmin($username, $password)
		{
			//Un-comment this to see a cryptogram of a password 
			// echo session::hashPassword($password);
			// die;
			$request = $this->dbh->prepare("SELECT username, password FROM admins WHERE username = ?");
	        if($request->execute( array($username) ))
	        {
	        	// This is an array of objects.
	        	// Remember we setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); in config/dbconnection.php
	        	$data = $request->fetchAll();
	        	
	        	// But if things are right, the array should contain only one object, the corresponding user
	        	// so, we can do this
	        	$data = $data[0];

	        	return session::passwordMatch($password, $data->password) ? true : false;

	        }else{
	        	return false;
	        }

		}

		/**
		 * Check if the admin username is unique
		 * If though we've set this criteria in our database,
		 * It's good to make sure the user is not try that
		 * @param   $username The username
		 * @return Boolean If the username is already usedor not
		 * 
		 */
		public function adminExists( $username )
		{
			$request = $this->dbh->prepare("SELECT username FROM admins WHERE username = ?");
			$request->execute([$username]);
			$Admindata = $request->fetchAll();
			return sizeof($Admindata) != 0;
		}

		/**
		 * Compare two passwords
		 * @param String $password1, $password2 The two passwords
		 * @return  Boolean Either true or false
		 */

		public function ArePasswordsSame( $password1, $password2 )
		{
			return strcmp( $password1, $password2 ) == 0;
		}

		
		/**
		 * Create a new row of admin
		 * @param String $username New admin username
		 * @param String $password New Admin password
		 * @return Boolean The final state of the action
		 * 
		 */
		

		/**
		 * Create a new row of product
		 * 
		 */
		
		public function addNewArticle($headline, $head2, $tag, $description)
		{
			

			$request = $this->dbh->prepare("INSERT INTO ".$tag." (headline, head2, description) VALUES(?,?,?) ");

			// Do not forget to encrypt the pasword before saving
			return $request->execute([$headline, $head2, $description]);
		}


		/**
		 * Edit a product
		 */

		public function updateArticle($headline, $head2, $description, $id, $tag)
		{
			$request = $this->dbh->prepare("UPDATE ".$tag." SET headline = ?, head2 = ?, description = ? WHERE id = ? ");

			return $request->execute([$headline, $head2, $description, $id]);
		}

		/**
		 * Fetch products
		 */
		
		public function fetchArticlesSurfing()
		{
			$request = $this->dbh->prepare("SELECT id, headline, head2, description FROM surfing");
			if ($request->execute()) {
				return $request->fetchAll();
			}
			return false;
		}

		public function fetchArticlesKitesurfing()
		{
			$request = $this->dbh->prepare("SELECT id, headline, head2, description FROM kitesurfing");
			if ($request->execute()) {
				return $request->fetchAll();
			}
			return false;
		}

		public function fetchArticlesSapsurfing()
		{
			$request = $this->dbh->prepare("SELECT id, headline, head2, description FROM sapsurfing");
			if ($request->execute()) {
				return $request->fetchAll();
			}
			return false;
		}
		
		public function fetchArticlesWakeboarding()
		{
			$request = $this->dbh->prepare("SELECT id, headline, head2, description FROM wakeboarding");
			if ($request->execute()) {
				return $request->fetchAll();
			}
			return false;
		}


		/**
		 *  Fetch one product
		 */
		
		public function getAarticle($id, $tag)
		{
			if (is_int($id)) 
			{
				$request = $this->dbh->prepare("SELECT * FROM ".$tag." WHERE id = ?");
				if ($request->execute([$id])) {
					return $request->fetchAll();
				}
				return false;
			}
			return false;
		}

		/**
		 * Delete a product
		 */
		public function deletearticle($id, $tag)
		{
			$request = $this->dbh->prepare("DELETE FROM ".$tag." WHERE id = ?");
			return $request->execute([$id]);
		}

	}
