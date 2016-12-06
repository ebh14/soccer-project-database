<?php

if(isset($_REQUEST['Player_Insert'])){
    playerInsert();
}
else if (isset($_REQUEST['Player_Delete'])){
	deletePlayer();
}
else if (isset($_REQUEST['Player_Update'])){
	updatePlayer();
}
else if (isset($_REQUEST['Club_Insert'])){
	clubInsert();
}
else if (isset($_REQUEST['Club_Delete'])){
	deleteClub();
}
else if (isset($_REQUEST['Club_Update'])){
	updateClub();
}
else if (isset($_REQUEST['Fixture_Insert'])){
	fixtureInsert();
}
else if (isset($_REQUEST['Fixture_Delete'])){
	deleteFixture();
}
else if (isset($_REQUEST['Fixture_Update'])){
	updateFixture();
}
else if (isset($_REQUEST['Scorer_Insert'])){
	scorerInsert();
}
else if (isset($_REQUEST['Scorer_Delete'])){
	deleteScorer();
}
else if (isset($_REQUEST['Scorer_Update'])){
	updateScorer();
}
else if (isset($_REQUEST['Player_Query'])){
	queryPlayer();
}
else if (isset($_REQUEST['League_Standings_Query'])){
	leagueStandings();
}
else if (isset($_REQUEST['GoalScorers_Query'])){
	topGoalsScorers();
}
else if (isset($_REQUEST['Find_GoalScorers_Query'])){
	findGoalScorers();
}

?>
	
	<h1> SOCCER PLAYER DATABASE </h1>
	
	<h2> Insert, Delete, Update Records</h2>
	
	<h3>Input Player Information </h3>
	<p>Fields: ID/Name/Age/Position/Height/Weight/Club/Nationality/Update</p>

	<form method="post" action ="finalphp.php">
	
	<input type="text" name = "Player_ID"/>
	<input type="text" name = "Player_Name"/>
	<input type="text" name = "Player_Age" />
	<input type="text" name = "Player_Position" />
	<input type="text" name = "Player_Height" />
	<input type="text" name = "Player_Weight" />
	<input type="text" name = "Player_Club" />
	<input type="text" name = "Player_Nationality" />
	<input type="text" name = "Player_Update_Args" />
	<input type = "submit" name = "Player_Insert" value = "Insert">
	<input type = "submit" name = "Player_Delete" value = "Delete">
	<input type = "submit" name = "Player_Update" value = "Update">

	</form>	
	
	
	<h3>Input Club Information </h3>
	<p>Fields: Name/Manager/League/Points/Update</p>

	<form method="post" action = "finalphp.php">
	
	<input type="text" name="Club_Name"/>
	<input type="text" name = "Club_Manager" />
	<input type="text" name = "Club_League" />
	<input type="text" name = "Club_Points" />
	<input type="text" name = "Club_Update_Args" />
	<input type = "submit" name = "Club_Insert" value = "Insert">
	<input type = "submit" name = "Club_Delete" value = "Delete">
	<input type = "submit" name = "Club_Update" value = "Update">

	</form>	
	

	
	<h3>Input Fixture Information </h3>
	<p>Fields: ID/League/Home Team/Away Team/Score/Date/Update</p>

	<form method="post" action = "finalphp.php">
	
	<input type="text" name="Fixture_ID"/>
	<input type="text" name = "Fixture_League" />
	<input type="text" name = "Fixture_Home" />
	<input type="text" name = "Fixture_Away" />
	<input type="text" name = "Fixture_Score" />
	<input type="text" name = "Fixture_Date" />
	<input type="text" name = "Fixture_Update_Args" />
	<input type = "submit" name = "Fixture_Insert" value = "Insert">
	<input type = "submit" name = "Fixture_Delete" value = "Delete">
	<input type = "submit" name = "Fixture_Update" value = "Update">

	</form>	
	
	<h3>Input Scorer Information </h3>
	<p>Fields: PlayerID/FixtureID/Goals/Update</p>

	<form method="post" action = "finalphp.php">
	
	<input type="text" name="Scorer_Player_ID"/>
	<input type="text" name = "Scorer_Fixture_ID" />
	<input type="text" name = "Scorer_Goals" />
	<input type="text" name = "Scorer_Update_Args" />
	<input type = "submit" name = "Scorer_Insert" value = "Insert">
	<input type = "submit" name = "Scorer_Delete" value = "Delete">
	<input type = "submit" name = "Scorer_Update" value = "Update">

	</form>	
	
	<h2>Search through Records</h2>

	<h3>Filter Search for Players</h3>
	<p>Fields: Search by ID/Name/Age/Position/Height/Weight/Club/Nationality</p>
	
	<form method="post" action ="finalphp.php">
	
	<input type="text" name = "Query_Player_ID"/>
	<input type="text" name = "Query_Player_Name"/>
	<input type="text" name = "Query_Player_Age" />
	<input type="text" name = "Query_Player_Position" />
	<input type="text" name = "Query_Player_Height" />
	<input type="text" name = "Query_Player_Weight" />
	<input type="text" name = "Query_Player_Club" />
	<input type="text" name = "Query_Player_Nationality" />
	<input type = "submit" name = "Player_Query" value = "Search">


	</form>	
	
	<h3>League Standings</h3>
	
	<form method="post" action ="finalphp.php">

	<input type = "submit" name = "League_Standings_Query" value = "League Standings">

	</form>	
	
	
	<h3>League Top GoalScorers</h3>
	
	<form method="post" action ="finalphp.php">
	
	<input type = "submit" name = "GoalScorers_Query" value = "Top Goal Scorers">

	</form>	
	
	<h3>Find Goal Scorers (Day or Match)</h3>
	<p>Fields: Search by Player Name/Number of Goals Scored/Home Team/Away Team/Date(Month Day,Year)</p>
	
	<form method="post" action ="finalphp.php">
	
	<input type="text" name = "Goal_Scorers_Player_Name"/>
	<input type="text" name = "Goal_Scorers_Num_Scored"/>
	<input type="text" name = "Goal_Scorers_home"/>
	<input type="text" name = "Goal_Scorers_away"/>
	<input type="text" name = "Goal_Scorers_date"/>
	<input type = "submit" name = "Find_GoalScorers_Query" value = "Search">

	</form>	
	
<?php

// INSERT FUNCTIONS
function playerInsert()
{
	$by_id = $_POST['Player_ID'];
	$by_name = $_POST['Player_Name'];
    $by_age = $_POST['Player_Age'];
	$by_position = $_POST['Player_Position'];
    $by_weight = $_POST['Player_Weight'];
	$by_height = $_POST['Player_Height'];
	$by_club = $_POST['Player_Club'];
	$by_nationality = $_POST['Player_Nationality'];
	
	$firstHalf = "INSERT INTO player (pid, name, age, position, height, weight, team, nationality) VALUES";
	$secondHalf = " ('$by_id', '$by_name', '$by_age', '$by_position', '$by_height', '$by_weight', '$by_club', '$by_nationality')";
	$insert = $firstHalf.$secondHalf ;
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($insert);
	unset($db); 
	
	//echo($insert);
}

function clubInsert()
{
	$by_name = $_POST['Club_Name'];
	$by_manager = $_POST['Club_Manager'];
    $by_league = $_POST['Club_League'];
	$by_points = $_POST['Club_Points'];
    
	
	$firstHalf = "INSERT INTO club (name, manager, league, points) VALUES";
	$secondHalf = " ('$by_name', '$by_manager', '$by_league', '$by_points')";
	$insert = $firstHalf.$secondHalf ;
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($insert);
	unset($db); 
	
	//echo($insert);
}


function fixtureInsert()
{
	$by_id = $_POST['Fixture_ID'];
	$by_league = $_POST['Fixture_League'];
    $by_home = $_POST['Fixture_Home'];
	$by_away = $_POST['Fixture_Away'];
    $by_score = $_POST['Fixture_Score'];
	$by_date = $_POST['Fixture_Date'];

	
	$firstHalf = "INSERT INTO fixture (fid, league, home, away, score, date) VALUES";
	$secondHalf = " ('$by_id', '$by_league', '$by_home', '$by_away', '$by_score', '$by_date')";
	$insert = $firstHalf.$secondHalf ;
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($insert);
	unset($db); 
	
	//echo($insert);
}

function scorerInsert()
{
	$by_playerID = $_POST['Scorer_Player_ID'];
	$by_fixtureID = $_POST['Scorer_Fixture_ID'];
    $by_goals = $_POST['Scorer_Goals'];
    
	
	$firstHalf = "INSERT INTO scorers (Spid, Sfid, goals) VALUES";
	$secondHalf = " ('$by_playerID', '$by_fixtureID', '$by_goals')";
	$insert = $firstHalf.$secondHalf ;
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($insert);
	unset($db); 
	
	//echo($insert);
}

//DELETE FUNCTIONS
function deletePlayer()
{
	$by_id = $_POST['Player_ID'];
	$by_name = $_POST['Player_Name'];
    $by_age = $_POST['Player_Age'];
	$by_position = $_POST['Player_Position'];
    $by_weight = $_POST['Player_Weight'];
	$by_height = $_POST['Player_Height'];
	$by_club = $_POST['Player_Club'];
	$by_nationality = $_POST['Player_Nationality'];


    $firstHalf = "DELETE FROM player";
    $conditions = array();

    if($by_id !="") {
      $conditions[] = "pid='$by_id'";
    }
    if($by_name !="") {
      $conditions[] = "name='$by_name'";
    }
    if($by_age !="") {
      $conditions[] = "age='$by_age'";
    }
    if($by_position !="") {
      $conditions[] = "position='$by_position'";
    }
	if($by_height !="") {
      $conditions[] = "height='$by_height'";
    }
    if($by_weight !="") {
      $conditions[] = "weight='$by_weight'";
    }
    if($by_club !="") {
      $conditions[] = "team='$by_club'";
    }
    if($by_nationality !="") {
      $conditions[] = "nationality='$by_nationality'";
    }

    $delete = $firstHalf;
    if (count($conditions) > 0) {
      $delete .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($delete);
	unset($db); 
	
	//echo ($delete);
}	

function deleteClub()
{
    $by_name = $_POST['Club_Name'];
	$by_manager = $_POST['Club_Manager'];
    $by_league = $_POST['Club_League'];
	$by_points = $_POST['Club_Points'];

    $firstHalf = "DELETE FROM club";
    $conditions = array();

    if($by_name !="") {
      $conditions[] = "name='$by_name'";
    }
    if($by_manager !="") {
      $conditions[] = "manager='$by_manager'";
    }
    if($by_league !="") {
      $conditions[] = "league='$by_league'";
    }
    if($by_points !="") {
      $conditions[] = "points='$by_points'";
    }


    $delete = $firstHalf;
    if (count($conditions) > 0) {
      $delete .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($delete);
	unset($db); 
	
	//echo ($delete);
}	


function deleteFixture()
{
	$by_id = $_POST['Fixture_ID'];
	$by_league = $_POST['Fixture_League'];
    $by_home = $_POST['Fixture_Home'];
	$by_away = $_POST['Fixture_Away'];
    $by_score = $_POST['Fixture_Score'];
	$by_date = $_POST['Fixture_Date'];


    $firstHalf = "DELETE FROM fixture";
    $conditions = array();

    if($by_id !="") {
      $conditions[] = "fid='$by_id'";
    }
    if($by_league !="") {
      $conditions[] = "league='$by_league'";
    }
    if($by_home !="") {
      $conditions[] = "home='$by_home'";
    }
    if($by_away !="") {
      $conditions[] = "away='$by_away'";
    }
	if($by_score !="") {
      $conditions[] = "score='$by_score'";
    }
    if($by_date !="") {
      $conditions[] = "date='$by_date'";
    }
 
 
    $delete = $firstHalf;
    if (count($conditions) > 0) {
      $delete .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($delete);
	unset($db); 
	
	//echo ($delete);
}	

function deleteScorer()
{
    $by_spid = $_POST['Scorer_Player_ID'];
	$by_sfid = $_POST['Scorer_Fixture_ID'];
    $by_goals = $_POST['Scorer_Goals'];

    $firstHalf = "DELETE FROM scorers";
    $conditions = array();

    if($by_spid !="") {
      $conditions[] = "Spid='$by_spid'";
    }
    if($by_sfid !="") {
      $conditions[] = "Sfid='$by_sfid'";
    }
    if($by_goals !="") {
      $conditions[] = "goals='$by_goals'";
    }



    $delete = $firstHalf;
    if (count($conditions) > 0) {
      $delete .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($delete);
	unset($db); 
	
	//echo ($delete);
}	

function updatePlayer()
{
	$by_id = $_POST['Player_ID'];
	$by_name = $_POST['Player_Name'];
    $by_age = $_POST['Player_Age'];
	$by_position = $_POST['Player_Position'];
    $by_weight = $_POST['Player_Weight'];
	$by_height = $_POST['Player_Height'];
	$by_club = $_POST['Player_Club'];
	$by_nationality = $_POST['Player_Nationality'];
	$update_args = $_POST['Player_Update_Args'];

	
    $firstHalf = "UPDATE player";
	$firstHalf .= ' SET '.$update_args;
    $conditions = array();

    if($by_id !="") {
      $conditions[] = "pid='$by_id'";
    }
    if($by_name !="") {
      $conditions[] = "name='$by_name'";
    }
    if($by_age !="") {
      $conditions[] = "age='$by_age'";
    }
    if($by_position !="") {
      $conditions[] = "position='$by_position'";
    }
	if($by_height !="") {
      $conditions[] = "height='$by_height'";
    }
    if($by_weight !="") {
      $conditions[] = "weight='$by_weight'";
    }
    if($by_club !="") {
      $conditions[] = "team='$by_club'";
    }
    if($by_nationality !="") {
      $conditions[] = "nationality='$by_nationality'";
    }

    $update = $firstHalf;
    if (count($conditions) > 0) {
      $update .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($update);
	unset($db); 
	
	//echo ($update);
}	
function updateClub()
{
    $by_name = $_POST['Club_Name'];
	$by_manager = $_POST['Club_Manager'];
    $by_league = $_POST['Club_League'];
	$by_points = $_POST['Club_Points'];
	$update_args = $_POST['Club_Update_Args'];;
	
    $firstHalf = "UPDATE club";
	$firstHalf .= ' SET '.$update_args;
    $conditions = array();

    if($by_name !="") {
      $conditions[] = "name='$by_name'";
    }
    if($by_manager !="") {
      $conditions[] = "manager='$by_manager'";
    }
    if($by_league !="") {
      $conditions[] = "league='$by_league'";
    }
    if($by_points !="") {
      $conditions[] = "points='$by_points'";
    }


    $update = $firstHalf;
    if (count($conditions) > 0) {
      $update .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($update);
	unset($db); 
	
	 //echo ($update);
}	


function updateFixture()
{
	$by_id = $_POST['Fixture_ID'];
	$by_league = $_POST['Fixture_League'];
    $by_home = $_POST['Fixture_Home'];
	$by_away = $_POST['Fixture_Away'];
    $by_score = $_POST['Fixture_Score'];
	$by_date = $_POST['Fixture_Date'];
	$update_args = $_POST['Fixture_Update_Args'];

    $firstHalf = "UPDATE fixture";
	$firstHalf .= ' SET '.$update_args;
    $conditions = array();

    if($by_id !="") {
      $conditions[] = "fid='$by_id'";
    }
    if($by_league !="") {
      $conditions[] = "league='$by_league'";
    }
    if($by_home !="") {
      $conditions[] = "home='$by_home'";
    }
    if($by_away !="") {
      $conditions[] = "away='$by_away'";
    }
	if($by_score !="") {
      $conditions[] = "score='$by_score'";
    }
    if($by_date !="") {
      $conditions[] = "date='$by_date'";
    }
 
 
    $update = $firstHalf;
    if (count($conditions) > 0) {
      $update .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($update);
	unset($db); 
	
	//echo ($update);
}	

function updateScorer()
{
    $by_spid = $_POST['Scorer_Player_ID'];
	$by_sfid = $_POST['Scorer_Fixture_ID'];
    $by_goals = $_POST['Scorer_Goals'];
	$update_args = $_POST['Scorer_Update_Args'];

    $firstHalf = "UPDATE scorers";
	$firstHalf .= ' SET '.$update_args;
    $conditions = array();

    if($by_spid !="") {
      $conditions[] = "Spid='$by_spid'";
    }
    if($by_sfid !="") {
      $conditions[] = "Sfid='$by_sfid'";
    }
    if($by_goals !="") {
      $conditions[] = "goals='$by_goals'";
    }



    $update = $firstHalf;
    if (count($conditions) > 0) {
      $update .= " WHERE " . implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
	$db->exec($update);
	unset($db); 
	
	//echo ($update);
}	

//Queries

function queryPlayer()
{
	$by_id = $_POST['Query_Player_ID'];
	$by_name = $_POST['Query_Player_Name'];
    $by_age = $_POST['Query_Player_Age'];
	$by_position = $_POST['Query_Player_Position'];
    $by_weight = $_POST['Query_Player_Weight'];
	$by_height = $_POST['Query_Player_Height'];
	$by_club = $_POST['Query_Player_Club'];
	$by_nationality = $_POST['Query_Player_Nationality'];


    $firstHalf = "SELECT * FROM player";
    $conditions = array();

    if($by_id !="") {
      $conditions[] = "pid LIKE '%$by_id%'";
    }
    if($by_name !="") {
      $conditions[] = "name LIKE '%$by_name%'";
    }
    if($by_age !="") {
      $conditions[] = "age LIKE '%$by_age%'";
    }
    if($by_position !="") {
      $conditions[] = "position LIKE '%$by_position%'";
    }
	if($by_height !="") {
      $conditions[] = "height LIKE '%$by_height%'";
    }
    if($by_weight !="") {
      $conditions[] = "weight LIKE '%$by_weight%'";
    }
    if($by_club !="") {
      $conditions[] = "team LIKE '%$by_club%'";
    }
    if($by_nationality !="") {
      $conditions[] = "nationality LIKE '%$by_nationality%'";
    }
	

    $query = $firstHalf;
    if (count($conditions) > 0) {
      $query .= " WHERE " .implode(' AND ', $conditions);
    }

	
	/*echo '<table>;
	echo <th>Name</th>';*/	
			
	$db = new SQLite3('soccer.sq3');
    $result = $db->query($query);
    while ($row = $result->fetchArray(SQLITE3_ASSOC))
    {
	/*echo '<tr>', $row['name'], '</tr>';*/
	
          echo  'Name: ' . $row['name'] . ' | ' . 'Age: ' . $row['age'] . ' | ' . 'Position: ' . $row['position'] . ' | ' . 'Height: ' .  $row['height'] .   'cm | ' . 
	  'Weight: ' . $row['weight'] .  'kg | ' . 'Club Name: ' . $row['team'] . ' | ' . 'Nationality: ' . $row['nationality'];
		  echo nl2br ( "\n");
    }
   unset($db) ;  
	
	echo '</tr></table>';
	
	//echo ($query);
}	

function leagueStandings()
{

	$query = "SELECT name, points FROM (SELECT * FROM club  WHERE league = 'English Premier League') ORDER BY points DESC";
	
	$db = new SQLite3('soccer.sq3');
    $result = $db->query($query);
    while ($row = $result->fetchArray(SQLITE3_ASSOC))
    {
          echo 'Club Name: ' .  $row['name'] . ' | ' . 'Points: ' .  $row['points'];
		  echo nl2br ( "\n");
    }
   unset($db) ;  
	
	//echo ($query);

}

function topGoalsScorers()
{
	$query = "SELECT * FROM (SELECT player.name, SUM(goals) AS goals FROM player INNER JOIN scorers ";
	$query .= "ON player.pid = scorers.Spid GROUP BY player.pid ) ORDER BY goals DESC";
	
	$db = new SQLite3('soccer.sq3');
    $result = $db->query($query);
    while ($row = $result->fetchArray(SQLITE3_ASSOC))
    {
          echo 'Player Name: ' . $row['name'] . ' | ' . 'Total Goals: ' . $row['goals'];
		  echo nl2br ( "\n");
    }
   unset($db) ;  
	
	//echo ($query);
}

function findGoalScorers ()
{
	$by_name = $_POST['Goal_Scorers_Player_Name'];
    $by_goals = $_POST['Goal_Scorers_Num_Scored'];
	$by_home = $_POST['Goal_Scorers_home'];
    $by_away = $_POST['Goal_Scorers_away'];
	$by_date = $_POST['Goal_Scorers_date'];


    $firstHalf = "SELECT player.name AS name, player.team AS team, scorers.goals AS goals, fixture.date AS date FROM fixture";
	$firstHalf .= " INNER JOIN scorers ON fixture.fid = scorers.Sfid INNER JOIN player ON scorers.Spid = player.pid ";
    $conditions = array();

    if($by_name !="") {
      $conditions[] = "player.name LIKE '%$by_name%'";
    }
    if($by_goals !="") {
      $conditions[] = "scorers.goals LIKE '%$by_goals%'";
    }
    if($by_home !="") {
      $conditions[] = "fixture.home LIKE '%$by_home%'";
    }
    if($by_away !="") {
      $conditions[] = "fixture.away LIKE '%$by_away%'";
    }
	if($by_date !="") {
      $conditions[] = "fixture.date LIKE '%$by_date%'";
    }

	

    $query = $firstHalf;
    if (count($conditions) > 0) {
      $query .= " WHERE " .implode(' AND ', $conditions);
    }
	
	$db = new SQLite3('soccer.sq3');
    $result = $db->query($query);
    while ($row = $result->fetchArray(SQLITE3_ASSOC))
    {
          echo 'Player Name: ' . $row['name'] . ' | ' . 'Club Name: ' . $row['team'] . ' | ' . 'Goals: ' .  $row['goals'] . ' | ' . 'Date: ' .  $row['date'];
		  echo nl2br ( "\n");
    }
   unset($db) ;  
	
	
	//echo ($query);
}

?>
