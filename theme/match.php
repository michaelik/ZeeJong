<?php
/*
Template part for match page

Created: February 2014
*/
?>


<div class="container">

	<h2 id="title-match"><?php echo $this->match->getTeamA()->getName() ?> - <?php echo $this->match->getTeamB()->getName() ?></h2>
	
	
	
	
	<!--<div id="field">
		
			<table>
			  <tbody><tr>
			    <td rowspan="4"><div class="player">1</div></td>
			    <td><div class="player">5</div></td>
			    <td><div class="player">8</div></td>
			    <td><div class="player">11</div></td>
			  </tr>
			  <tr>
			    <td><div class="player">4</div></td>
			    <td rowspan="2"><div class="player">8</div></td>
			    <td rowspan="2"><div class="player">9</div></td>
			  </tr>
			  <tr>
			    <td><div class="player">3</div></td>
			  </tr>
			  <tr>
			    <td><div class="player">2</div></td>
			    <td><div class="player">6</div></td>
			    <td><div class="player">7</div></td>
			  </tr>
			</tbody></table>
		
	</div>-->
	
	
	
	<!-- Information panel -->
	<div class="col-md-4">
	
		<div class="panel panel-default">
		
		
			<div class="panel-heading">
		
				<h3 class="panel-title">Information</h3>
				
				
			</div>
			
			
			
			<div class="panel-body">
				
				<ul class="list-group">
				
					<li class="list-group-item">
						Final score: <?php try { echo $this->match->getScore(); } catch(exception $e) {} ?>
					</li>
				
				
					<li class="list-group-item">
						Competition: <a href="<?php echo SITE_URL . 'competition/' . $this->match->getTournament()->getCompetition()->getId(); ?>">
							<?php echo $this->match->getTournament()->getCompetition()->getName(); ?></a>
					</li>
				
					<li class="list-group-item">Date: <?php echo date('d-m-Y', $this->match->getDate()); ?></li>
					
					<li class="list-group-item">
				    	<span class="badge">14</span>
				    	Cards
				  	</li>
				  	
				  	<li class="list-group-item">
						Referee:
						<?php if($referee = $this->match->getReferee()) { ?>
							<a href="<?php echo SITE_URL . 'referee/' . $this->match->getReferee()->getId(); ?>"><?php echo $this->match->getReferee()->getName(); ?></a>
						<?php } else { ?>
							Not found
						<?php } ?>
				  	</li>
				</ul>
				
				
			</div>
		
		</div>
		
	</div>
	
	
	
	
	
	<!-- Team A -->
	<div class="col-md-4">
		<div class="panel panel-default">
		
		
			<div class="panel-heading">
		
				<h3 class="panel-title"><a href="<?php echo SITE_URL . 'team/' . $this->match->getTeamA()->getId(); ?>"><?php echo $this->match->getTeamA()->getName() ?></a></h3>
				
				
			</div>
			
			
			
			<div class="panel-body">
			
			
				<table class="table table-striped">
				         
				    <tbody>
					    <tr>
					    	<th>#</th>
					    	<th>Name</th>
					    </tr>
					    
					    
					    <?php
					    foreach($this->match->getPlayersTeamA() as $player) { 
					    ?>
					     <tr>
					     	<td><?php echo $player->number; ?></td>
					     	<td><a href="<?php echo SITE_URL . 'player/' . $player->getId(); ?>"><?php echo $player->getName(); ?></a></td>
					     </tr>
					     
					     <?php
					     } //end foreach
					     ?>
				             
					</tbody>
				</table>
			
				
			</div>
			
			
			
			<div class="panel-footer">
					Coach:
					<?php if($coach = $this->match->getTeamA()->getCoachForMatch($this->match->getId())) { ?>
						<a href="<?php echo SITE_URL . 'coach/' . $coach->getId(); ?>"><?php echo $coach->getName(); ?></a>
					<?php } else { ?>
						Not found
					<?php } ?>
			</div>
			
		
		</div>
		
	</div>
	
	
	
	
	
	<!-- Team B -->
	<div class="col-md-4">
	
		<div class="panel panel-default">
		
		
			<div class="panel-heading">
		
				<h3 class="panel-title"><a href="<?php echo SITE_URL . 'team/' . $this->match->getTeamB()->getId(); ?>"><?php echo $this->match->getTeamB()->getName() ?></a></h3>
				
				
			</div>
			
			
			
			<div class="panel-body">
				
				<table class="table table-striped">
				         
				    <tbody>
					    <tr>
					    	<th>#</th>
					    	<th>Name</th>
					    </tr>
					    
					    
					    <?php
					    foreach($this->match->getPlayersTeamB() as $player) { 
					    ?>
					    
					     <tr>
					     	<td><?php echo $player->number; ?></td>
					     	<td><a href="<?php echo SITE_URL . 'player/' . $player->getId(); ?>"><?php echo $player->getName(); ?></a></td>
					     </tr>
					     
					     <?php
					     } //end foreach
					     ?>
				             
					</tbody>
				</table>
				
				
			</div>
			
			
			
			<div class="panel-footer">
					Coach:
					<?php if($coach = $this->match->getTeamB()->getCoachForMatch($this->match->getId())) { ?>
						<a href="<?php echo SITE_URL . 'coach/' . $coach->getId(); ?>"><?php echo $coach->getName(); ?></a>
					<?php } else { ?>
						Not found
					<?php } ?>
			</div>
			
		
		</div>
		
	</div>
	
	

</div>
