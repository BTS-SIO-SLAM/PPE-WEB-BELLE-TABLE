<div class="divfooter">
        <hr>
        <footer>
        	<div class="socialnet">
        	<a href="https://twitter.com/Belle_TableSIO" target="_blank" class="twitter-share-button" data-count="vertical" data-via="Belle_TableSIO"><img src="twitter.png" height="5%" width="5%"></a>
		<a name="fb_share" type="box_count" href="https://www.facebook.com/Belle-Table-1113642382077898/" target="_blank"><img src ="fb.jpg" height="6%" width="6%"></a>
		<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
		</div>
		<br/>
			<?php
			
			$urlcourante = explode("/",$_SERVER['PHP_SELF']);
			$compteururl = count($urlcourante)-1;
			$pagecourante = $urlcourante[$compteururl];
			
			$ajouturl = explode("?",$_SERVER['REQUEST_URI']);
			$compteururl = count($ajouturl)-1;
			$ajoutcourant = $ajouturl[$compteururl];

			$lapage = explode(".",$pagecourante);
			$lapageen = explode("-",$lapage[0]);
			
			if(count($ajouturl) < 2){
				$lien = $lapageen[0].'.php';
			}
			else{
				$lien = $lapageen[0].'.php?'.$ajoutcourant;
			}
			
			echo'
			<input type="button" class="btnlangue" style="BACKGROUND-IMAGE:url(img/fr.jpg)" onclick="location.href=\''.$lien.'\'">';
			?>
			<ul class="footer">
			<li class="lifooter"><a href="mentionlegale-en.php">Terms and conditions</a></li>
			<li class="lifooter"><a href="planAcces-en.php">Access map</a></li>
			<li class="lifooter"><a href="doc/CGV.pdf" target="_blank">Sale conditions</a></li>
			</ul>
			<p>Copyright &copy; BelleTable 2017</p>
        </footer>
    </div>