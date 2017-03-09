<?
	// Get login activity
	echo'
	<hr class="HRS hide-for-large" aria-hidden="true">
	<h3>Recent Activity <span class="ra icons"></span></h3>
	<table role="grid">
		<thead>
			<tr>
				<th>Username</th>
				<th>Last Login</th>
			</tr>
		</thead>
  		<tbody>';
			// staff list
			$PQ																= $mysqli->query("SELECT user_id, user_name, DATE_FORMAT(user_last_login, '%D %b %Y') AS LogD, DATE_FORMAT(user_last_login, '%d-%m-%Y') AS ShortLD FROM users ORDER BY user_last_login DESC, user_name ASC");
			$PN																= $PQ->num_rows;
			if ($PN <> 0) {
				while($PP													= $PQ->fetch_assoc()){
					echo '
					<tr>
					<td><span class="wds-bld">'.$PP['user_name'].'</span></td>
					<td><span class="show-for-medium">'.$PP['LogD'].'</span><span class="show-for-small-only" aria-hidden="true">'.$PP['ShortLD'].'</span></td>
					</tr>';
				}
			}
		echo'
		</tbody>
	</table>';