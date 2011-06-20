<div class="art-Post">
    <div class="art-Post-tl"></div>
    <div class="art-Post-tr"></div>
    <div class="art-Post-bl"></div>
    <div class="art-Post-br"></div>
    <div class="art-Post-tc"></div>
    <div class="art-Post-bc"></div>
    <div class="art-Post-cl"></div>
    <div class="art-Post-cr"></div>
    <div class="art-Post-cc"></div>
    <div class="art-Post-body">
<div class="art-Post-inner">
    
	<div class="comment<?php if ($comment->status == COMMENT_NOT_PUBLISHED) echo ' comment-unpublished'; ?>">
<h2 class="art-PostHeader"> 
			<?php if ($picture) {echo $picture; } ?>
				<?php if ($title) {echo $title; } ?>
				<?php if ($new != '') { ?><?php echo $new; ?><?php } ?>

		</h2>
		
		<?php if ($submitted): ?>
			<div class="submitted"><?php echo $submitted; ?></div>
			<div class="cleared"></div><br/>
		<?php endif; ?>	
<div class="art-PostContent">
		
			<?php echo $content; ?>

		</div>
		<div class="cleared"></div>
		
		<div class="links"><?php echo $links; ?><div class="cleared"></div></div>	
	</div>

</div>

    </div>
</div>
