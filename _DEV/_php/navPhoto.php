<div class="row BgMain">
   <div class="small-centered medium-6 medium-uncentered large-4 large-uncentered columns menuPullup">
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-th fa-fw"></i></div>
         <select name="sort" id="sort" class="classic">
            <option<?php if($thisSet=="Weddings")echo" selected";?> value="W">Weddings</option>
            <option<?php if($thisSet=="Engagements")echo" selected";?> value="E">Engagements</option>
            <option<?php if($thisSet=="Sunsets")echo" selected";?> value="SS">Sunsets</option>
            <option<?php if($thisPage=="Familes")echo" selected";?> value="F">Families</option>
            <option<?php if($thisPage=="Seniors")echo" selected";?> value="S">Seniors</option>
            <option<?php if($thisPage=="Modeling")echo" selected";?> value="M">Modeling</option>
            <option<?php if($thisPage=="Travel")echo" selected";?> value="T">Travel</option>
            <option<?php if($thisPage=="SJF")echo" selected";?> value="SJF">Sonia&rsquo;s Favorites</option>
            <option<?php if($thisPage=="SEF")echo" selected";?> value="SEF">Stephen&rsquo;s Favorites</option>
            <option<?php if($thisPage=="Boudoir")echo" selected";?> value="X">Boudoir</option>
         </select>
      </div>
   </div>
   <?php if($thisSet=="Weddings"){ ?>
   <div class="small-centered medium-6 medium-uncentered large-4 large-uncentered end columns menuPullup">
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-sort"></i></div>
         <select name="WG_sort" id="WG_sort" class="classic">
            <option<?php if($thisPage=="WG1")echo" selected";?> value="WG1">Gallery 1</option>
            <option<?php if($thisPage=="WG2")echo" selected";?> value="WG2">Gallery 2</option>
            <option<?php if($thisPage=="WG3")echo" selected";?> value="WG3">Gallery 3</option>
            <option<?php if($thisPage=="WG4")echo" selected";?> value="WG4">Gallery 4</option>
            <option<?php if($thisPage=="WG5")echo" selected";?> value="WG5">Gallery 5</option>
            <option<?php if($thisPage=="Candids")echo" selected";?> value="Candids">Candids</option>
            <option<?php if($thisPage=="Ceremonies")echo" selected";?> value="Ceremonies">Ceremonies</option>
            <option<?php if($thisPage=="Brides")echo" selected";?> value="Brides">Brides</option>
            <option<?php if($thisPage=="Details")echo" selected";?> value="Details">Details</option>
            <option<?php if($thisPage=="Groups")echo" selected";?> value="Groups">Groups</option>
         </select>
      </div>
   </div>
   <?php }; ?>
   <?php if($thisSet=="Engagements"){ ?>
   <div class="small-centered medium-6 medium-uncentered large-4 large-uncentered end columns menuPullup">
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-sort"></i></div>
         <select name="EG_sort" id="EG_sort" class="classic">
            <option<?php if($thisPage=="EG1")echo" selected";?> value="EG1">Gallery 1</option>
            <option<?php if($thisPage=="EG2")echo" selected";?> value="EG2">Gallery 2</option>
         </select>
      </div>
   </div>
   <?php }; ?>
   <?php if($thisSet=="Sunsets"){ ?>
   <div class="small-centered medium-6 medium-uncentered large-4 large-uncentered end columns menuPullup">
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-sort"></i></div>
         <select name="SS_sort" id="SS_sort" class="classic">
            <option<?php if($thisPage=="SS1")echo" selected";?> value="SS1">Gallery 1</option>
            <option<?php if($thisPage=="SS2")echo" selected";?> value="SS2">Gallery 2</option>
         </select>
      </div>
   </div>
   <?php }; ?>
</div>