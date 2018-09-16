<script typt="text/javascript">
        function toggle_visibility_ol(ol_menu_first_level) {
        var f = document.getElementById(ol_menu_first_level);
        //alert(f.style.display);
        var $links2 = $('.main_link_aa_drop');
            if(f.style.display == 'block')
            {
            f.style.display = 'none';
            $links2.removeClass('mainlinks_selected');
            
            }
            else
            {
            f.style.display = 'block';
            $links2.addClass('mainlinks_selected');
            }
        }
    </script>
	<style type="text/css">
	.main-links ul#ol_menu_first_level {
	float:left;	
	display:none;
	padding-left:0;
	width:100%;
	margin-top:0;
	
}
.main-links ul#ol_menu_first_level > li {
	float:left;
	list-style:none;
	display:inline-block;
	width:100%;
	padding-left:0;
	margin-left:0;
	border-bottom:1px solid #bfc6cc;
	
}
.main-links ul#ol_menu_first_level > li > a {
	cursor:pointer;
	float:left;
	color:#3a3b68;
	font-size:16px;
	font-weight:bold;
	width: 89.5%;
	height:36px;
	line-height:36px;
	background:url(http://peo.on.ca/multimedia/images/mobile-menu-first-level-arrow.png) 40px no-repeat;
	padding-left:70px;
	
}
		</style>
    <div class="mobile-menu-container">
    	<div class="main-links">
        		<a class="main_link_aa_drop" onClick="toggle_visibility_ol('ol_menu_first_level');">Other Links</a>
            <ul id="ol_menu_first_level" style="display:none;">
			
			 <li><a href="http://peo.on.ca/index.php?ci_id=1826&la_id=1">Terms of use</a></li>
                 <li><a href="http://peo.on.ca/index.php?ci_id=1827&la_id=1">Privacy Policy</a></li>
                 <li><a href="http://peo.on.ca/index.php?ci_id=1828&la_id=1">Site Map</a></li>
                 <li><a href="http://peo.on.ca/index.php?ci_id=1830&la_id=1">Contact Us</a></li>
                 <li><a href="http://peo.on.ca/index.php?ci_id=25545&la_id=1">Customer Service Accessibility Policy</a></li>
                 <li><a href="http://peo.on.ca/index.php?ci_id=25574&la_id=1">Search</a></li>
                 <li><a href="http://peo.on.ca/index.php?ci_id=25652&la_id=1">Latest updates</a></li>
                  
               </ul>
			
        </div>   
    </div>
	</div>
</section></div>