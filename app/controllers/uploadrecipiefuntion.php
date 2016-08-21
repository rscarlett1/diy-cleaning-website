
			// Instance of Intervention Image
			$manager = new ImageManager();

			// Get the file that was just uploaded
			$image = $manager->make( $_FILES['image']['tmp_name'] );

			$fileExtension = $this->getFileExtension( $image->mime() );

			$fileName = uniqid();


			$image->save("img/uploads/original/$fileName$fileExtension");

			$image->resize(400, null, function ($constraint) {
			     $constraint->aspectRatio();
			});

			$image->save("img/uploads/recipes/$fileName$fileExtension");

						
			//Filter the data
			$recipetitle = $this->dbc->real_escape_string($recipetitle);
			$recipedesc = $this->dbc->real_escape_string($recipedesc);
			$recipemethod = $this->dbc->real_escape_string($recipemethod);

			// Get the ID of logged in user
			$userID = $_SESSION['user_id'];

			// SQL (INSERT)
			$sql = "INSERT INTO recipe_database (user_id, title, description, method, image)
					VALUES ($userID, '$recipetitle', '$recipedesc', '$recipemethod' '$fileName$fileExtension')";
			die($sql);
			//Make sure it worked
			$this->dbc->query( $sql );

			// Make sure it worked
			if( $this->dbc->affected_rows ) {
				$this->data['recipeMessage'] = 'Success!';
				header('Location: index.php?page=upload-recipe');
			} else {
				$this->data['recipeMessage'] = 'Something went wrong!';
			}