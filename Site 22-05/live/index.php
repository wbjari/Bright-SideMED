<?php
	include "../assets/inc/header.php";
	include "../assets/inc/connect.php";
?>

	<div id="loading"></div>
	<h1 class="text-center">Live stream voetbaltoernooi AMO1E</h1>
	<div class="col-md-8">
		<iframe src="http://www.ustream.tv/embed/17699591?v=3&amp;wmode=direct" scrolling="no" frameborder="0" class="stream-frame"></iframe>
		<br><a href="http://www.ustream.tv/" class="ustream" target="_blank"></a>
    <div>
			<h2>Nu speelt:</h2>
        <table class="table">
          <tbody class="nowplaying"></tbody>
        </table>
    </div>
    
    <div class="wedstrijdschema">
      <h2>Komende wedstrijden</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Wedstrijdnr</th>
            <th>team</th>
            <th>vs.</th>
            <th>team</th>
          </tr>
        </thead>
     
        <tbody id="wedstrijdschema"></tbody>
      </table>
            	
     	<table class="table table-striped">
      	<h2>Gespeelde wedstrijden</h2>
      	<thead>
        	<tr>
	        	<th>wedstrijdnr</th>
	        	<th>team</th>
	        	<th>vs</th>
	        	<th>team</th>
	        	<th>score</th>
      		</tr>
      	</thead>
        	
      	<tbody id="gespeelde_wedstrijden"></tbody>
     	</table>
    </div>
	</div>
		
	<aside class="col-md-4">
		<div class="poule">
			<h2>Real-time Poulestanden</h2>
			<table class="table table-striped">
				<thead>
					<legend>Poule A</legend>
					<tr>
						<th></th>
						<th>Team</th>
						<th>Punten</th>
					</tr>
				</thead>
	
				<tbody id="poule-a"></tbody>
			</table>
					
			<table class="table table-striped">
				<thead>
					<legend>Poule B</legend>
					<tr>
						<th></th>
						<th>Team</th>
						<th>Punten</th>
					</tr>
				</thead>
			
				<tbody id="poule-b"></tbody>
			</table>	
					
		</div>
			
		<div class="topscorer"></div>
	</aside>

	<div class="clear"></div>

<?php include "../assets/inc/footer.php" ?>