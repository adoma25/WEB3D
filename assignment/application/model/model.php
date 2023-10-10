<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/db.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	// This is a simple fix to represent, what would in reality be, a table in the database containing the brand names. 
	// The database schema would then contain a foreign key for each drink entry linking back to the brand name
	// This structure allows us to read the list of brand names to populate a menu in a view
	public function dbGetBrand()
	{
		// Return the Brand Names
		return array("-", "Coke", "Coke Light","Coke Zero","Sprite", "Dr Pepper", "Fanta");
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Header (Id INTEGER PRIMARY KEY, slogan TEXT, homeText TEXT, homeLink TEXT, aboutText TEXT, aboutLink)");
			$this->dbhandle->exec("CREATE TABLE Homepage (Id INTEGER PRIMARY KEY, mainTitle TEXT, mainSubtitle TEXT, mainDescription TEXT)");
			$this->dbhandle->exec("CREATE TABLE Brand (Id INTEGER PRIMARY KEY, brandTitle TEXT, brandSubtitle TEXT, brandDescription TEXT)");
			$this->dbhandle->exec("CREATE TABLE Footer (Id INTEGER PRIMARY KEY, mainCopyRights TEXT, githubLink TEXT, statementLink TEXT)");
			$this->dbhandle->exec("CREATE TABLE Controls (Id INTEGER PRIMARY KEY, controlName TEXT, controlTitle TEXT, controlDescription TEXT, firstButtonText TEXT, secondButtonText TEXT, thirdButtonText TEXT, fourthButtonText TEXT, fifthButtonText TEXT)");

			return "Tables created succesfully";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Header (Id, slogan, homeText, homeLink, aboutText, aboutLink) 
				VALUES (1, 'Refreshing the world, one story at a time', 'Home', './index.php?home', 'About-Us', './index.php?home'); " .
			"INSERT INTO Brand (Id, brandTitle, brandSubtitle, brandDescription) 
				VALUES (1, 'Fanta', 'Bright, bubbly and made with five per cent juice', 'Fanta is a soft drink with a tingly, fruity taste'); " .
			"INSERT INTO Brand (Id, brandTitle, brandSubtitle, brandDescription) 
				VALUES (2, 'Coke Energy', 'The only energy drink with a great Coca‑Cola taste!', 'With caffeine from naturally-derived sources, guarana extracts and B vitamins, and completely taurine-free, Coca‑Cola Energy is here to complement your upbeat and busy life. Niacin (Vitamin B3) and Vitamin B6 contribute to normal energy-yielding metabolism. Consume as part of a varied and balanced diet and healthy lifestyle'); " .
			"INSERT INTO Brand (Id, brandTitle, brandSubtitle, brandDescription)  
				VALUES (3, 'Schweppes Classic', 'Feel the fabulous fizz of Schweppes Classic', 'Delicately balanced mixers sparkling with brilliant bubbles. Made for mixing - or simply to quench your thirst.'); ".
			"INSERT INTO Homepage (Id, mainTitle, mainSubtitle, mainDescription) 
				VALUES (1, 'Coca Cola Great Britain', 'Founded in 1886 by pharmacist Dr John S Pemberton in Atlanta, Georgia', 'The Coca‑Cola Company is the worlds leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.'); ".
			"INSERT INTO Footer (Id, mainCopyRights, githubLink, statementLink)  
				VALUES (1, '&copy 2021 Mobile Web 3D Applications - Adem Bencheikh', 'link', 'link'); ".
			"INSERT INTO Controls (Id, controlName, controlTitle, controlDescription, firstButtonText, secondButtonText, thirdButtonText, fourthButtonText, fifthButtonText)  
			VALUES (1, 'Cameras', 'Camera Views', 'These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views', 'Default', 'Back', 'Left', 'Right', 'Off'); ".
			"INSERT INTO Controls (Id, controlName, controlTitle, controlDescription, firstButtonText, secondButtonText, thirdButtonText, fourthButtonText, fifthButtonText)  
			VALUES (2, 'Lights', 'Lights and Render Options', 'These buttons select a limited range of X3D model lighting and render options, use the dropdown menu for more options', 'Poly', 'Wire', 'Headlight', 'Default', 'Off'); ".
			"INSERT INTO Controls (Id, controlName, controlTitle, controlDescription, firstButtonText, secondButtonText, thirdButtonText, fourthButtonText, fifthButtonText)  
			VALUES (3, 'Animation', 'Rotation Controls', 'These buttons select a range of X3D animation options', 'RotateLeft', 'RotateRight', 'RotateFront', 'Stop', 'Off'); ");
			
			return "Data inserted successfully inside db.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Header table
			$sql = 'SELECT * FROM Header';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows
			
			while ($data = $stmt->fetch()) {
				// Write the database conetnts to the results array for sending back to the view
				$result[0][$i]['slogan'] = $data['slogan']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[0][$i]['homeText'] = $data['homeText'];
				$result[0][$i]['homeLink'] = $data['homeLink'];
				$result[0][$i]['aboutText'] = $data['aboutText'];
				$result[0][$i]['aboutLink'] = $data['aboutLink'];
				//increment the row index
				$i++;
			}
			// Prepare a statement to get all records from the Homepage table
			$sql = 'SELECT * FROM Homepage';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows
			
			while ($data = $stmt->fetch()) {
				// Write the database conetnts to the results array for sending back to the view
				$result[1][$i]['mainTitle'] = $data['mainTitle']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[1][$i]['mainSubtitle'] = $data['mainSubtitle'];
				$result[1][$i]['mainDescription'] = $data['mainDescription'];
				//increment the row index
				$i++;
			}
			
			// Prepare a statement to get all records from the Brand table
			$sql = 'SELECT * FROM Brand';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows
			
			while ($data = $stmt->fetch()) {
				// Write the database conetnts to the results array for sending back to the view
				$result[2][$i]['brandTitle'] = $data['brandTitle']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[2][$i]['brandSubtitle'] = $data['brandSubtitle'];
				$result[2][$i]['brandDescription'] = $data['brandDescription'];
				//increment the row index
				$i++;
			}

			// Prepare a statement to get all records from the Footer table
			$sql = 'SELECT * FROM Controls';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows
			
			while ($data = $stmt->fetch()) {
				// Write the database conetnts to the results array for sending back to the view
				$result[3][$i]['controlName'] = $data['controlName']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[3][$i]['controlTitle'] = $data['controlTitle'];
				$result[3][$i]['controlDescription'] = $data['controlDescription'];
				$result[3][$i]['firstButtonText'] = $data['firstButtonText'];
				$result[3][$i]['secondButtonText'] = $data['secondButtonText'];
				$result[3][$i]['thirdButtonText'] = $data['thirdButtonText'];
				$result[3][$i]['fourthButtonText'] = $data['fourthButtonText'];
				$result[3][$i]['fifthButtonText'] = $data['fifthButtonText'];
				//increment the row index
				$i++;
			}

			// Prepare a statement to get all records from the Footer table
			$sql = 'SELECT * FROM Footer';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows
			
			while ($data = $stmt->fetch()) {
				// Write the database conetnts to the results array for sending back to the view
				$result[4][$i]['mainCopyRights'] = $data['mainCopyRights']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[4][$i]['githubLink'] = $data['githubLink'];
				$result[4][$i]['statementLink'] = $data['statementLink'];
				//increment the row index
				$i++;
			}
			
			
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Can 3D Image 1',
			'image3D_1' => 'coke_1',

			'model_2' => 'Coke Can 3D Image 2',
			'image3D_2' => 'coke_2',

			'model_3' => 'Sprite Bottle 3D Image 1',
			'image3D_3' => 'sprite_1',

			'model_4' => 'Sprite Bottle 3D Image 2',
			'image3D_4' => 'sprite_2',

			'model_5' => 'Dr Pepper Cup 3D Image 1',
			'image3D_5' => 'pepper_1',

			'model_6' => 'Dr Pepper Cup 3D Image 2',
			'image3D_6' => 'pepper_2'
		);
	}
}
?>