<div id="main_dropdown">
 	<ul id="topnav">
   	<!-- (1) -->
     <li><a href="#">Our Story</a>
     	<ul>
       	<li><a href="<?php echo base_url().'index.php/display/history'; ?>">History</a></li>
        <li><a href="<?php echo base_url().'index.php/display/stories'; ?>">Grange Stories</a></li>
      </ul>
     </li>
     <!-- (2) -->
     <li>
    	<a href="#">Our Works</a>
       <ul>
       	<li><a href="<?php echo base_url().'index.php/display/scholarship'; ?>">Scholarship</a></li>
         <li><a href="#">Activities</a>
          <ul>
           	<li><a href="<?php echo base_url().'index.php/display/labulabo'; ?>">LabuLabo</a></li>
            <li><a href="<?php echo base_url().'index.php/display/civic_activities'; ?>">Civic Activities</a></li>
            <li><a href="<?php echo base_url().'index.php/display/academy'; ?>">Grange Academy</a></li>
            <li><a href="<?php echo base_url().'index.php/display/formation_cause'; ?>">Grange Formation Cause</a></li>
          </ul>
            
         </li>
       </ul>
          
     </li>
     <!-- (3) -->
     <li><a href="#">Gallery</a>
     	<ul>
      	<li><a href="<?php echo base_url().'index.php/display/gallery_pictures'; ?>">Pictures</a></li>
      	<li><a href="<?php echo base_url().'index.php/display/gallery_videos'; ?>">Videos</a></li>
      </ul>
     </li>
     <!-- (4) -->
     <li><a href="#">Archives</a>
    	<ul>
       	<li><a href="<?php echo base_url().'index.php/display/news'; ?>">News</a></li>
       	<li><a href="<?php echo base_url().'index.php/display/public_activities'; ?>">Activities</a></li>
        <?php if(true){?>
        <li><a href="<?php echo base_url().'index.php/display/announcements'; ?>">Announcements</a></li>
        <li><a href="<?php echo base_url().'index.php/display/our_activities'; ?>">Grange Activities</a></li>
        <?php }?>
       </ul>
       
     </li>
     <!-- (5) -->
     <li><a href="#">Our Family</a>
     	 <ul>
       	 <li><a href="<?php echo base_url().'index.php/display/residents'; ?>">Resident Members</a></li>
         <li><a href="<?php echo base_url().'index.php/display/jr_alumni'; ?>">Junior Alumni</a></li>
         <li><a href="<?php echo base_url().'index.php/display/sr_alumni'; ?>">Senior Alumni</a></li>
       </ul>
          
     </li>
     
     <!-- (6) -->
     <li><a href="<?php echo base_url().'index.php/display/contact_us'; ?>">Contact Us</a></li>
  </ul><!-- end #topnav -->
</div><!-- end #main_dropdown -->