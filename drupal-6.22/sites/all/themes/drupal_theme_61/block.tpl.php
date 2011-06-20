<div class="art-Block clear-block block block-<?php print $block->module ?>" id="block-<?php print $block->module .'-'. $block->delta; ?>">
    <div class="art-Block-body">

	<?php if ($block->subject): ?>
<div class="art-BlockHeader">
		    <div class="l"></div>
		    <div class="r"></div>
		    <div class="art-header-tag-icon">
		        <div class="t">	
			<h2 class="subject"><?php echo $block->subject; ?></h2>
</div>
		    </div>
		</div>    
	<?php endif; ?>
<div class="art-BlockContent content">
	    <div class="art-BlockContent-body">
	
		<?php echo $block->content; ?>

	    </div>
	</div>
	

    </div>
</div>
