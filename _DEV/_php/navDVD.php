<div class="row BgMain">
	<div class="small-centered medium-6 medium-uncentered large-4 large-uncentered columns menuPullup">
		<div class="input-group">
			<div class="input-group-addon"><i class="fa fa-th fa-fw"></i></div>
			<select name="sort" id="sort" class="classic">
				<option<?php if($thisPage=="DVDp")echo" selected";?> value="P">Platinum DVD Artwork</option>
				<option<?php if($thisPage=="DVDg")echo" selected";?> value="G">Gold DVD Artwork</option>
				<option<?php if($thisPage=="DVDs")echo" selected";?> value="S">Silver DVD Artwork</option>
			</select>
		</div>
	</div>
</div>