			echo '<pre>';
		 	print_r ($_POST);
			die('ready');
			
			// SQL (INSERT)
			$sql = "INSERT INTO recipe_database (user_id, title, description, method, image)
					VALUES ($userID, '$recipetitle', '$recipedesc', '$recipemethod' '$fileName$fileExtension')";
			
			//Make sure it worked
			$this->dbc->query( $sql );
			die($sql);

			// Make sure it worked
			if( $this->dbc->affected_rows ) {
				$this->data['recipeMessage'] = 'Success!';
				//header('Location: index.php?page=upload-recipe');
			} else {
				$this->data['recipeMessage'] = 'Something went wrong!';
			}
		}	
	}
			