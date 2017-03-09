<?
	echo'
	<form accept-charset="UTF-8" method="POST" id="DelForm">
		<p><a href="'.CMS_DIR.'admin-registration.php" class="button radius">ADD A USER <span class="ad icons"></span></a></p>
		<table role="grid">
			<thead>
				<tr>
					<th>Name</th>
					<th>Last Login</th>
					<th class="hide-for-small-only">Registered</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>';
				// staff list
				$PQ																= $mysqli->query("SELECT user_id, user_name, DATE_FORMAT(user_last_login, '%d %M %Y @ %H:%i') AS LogD, DATE_FORMAT(user_last_login, '%d-%m-%Y') AS ShortLD, DATE_FORMAT(user_registration_datetime, '%d %M %Y') AS RegD FROM users ORDER BY user_name ASC");
				$PN																= $PQ->num_rows;
				$d																	= 1;
				if($PN <> 0){
					while($PP													= $PQ->fetch_assoc()){
						echo '
						<tr>
						<td><span class="wds-bld">'.$PP['user_name'].'</span></td>
						<td><span class="show-for-medium">'.$PP['LogD'].'</span><span class="show-for-small-only" aria-hidden="true">'.$PP['ShortLD'].'</span></td>
						<td class="hide-for-small-only">'.$PP['RegD'].'</span></td>
						<td>
							<div class="switch tiny">
								<input type="checkbox" id="uid['.$d.']" class="switch-input" name="uid['.$d.']" value="'.$PP['user_id'].'">
								<label class="switch-paddle" for="uid['.$d.']">
									<span class="switch-active" aria-hidden="true">X</span>
									<span class="switch-inactive" aria-hidden="true"></span>
								</label>
							</div>
						</tr>';
						++$d;
					}
				}
			echo'
			</tbody>
		</table>
	<button type="submit" class="button alert radius" form="DelForm" alt="Delete entries that are checked" value="DelForm">DELETE USERS <span class="dl icons"></span></button>
</form>';