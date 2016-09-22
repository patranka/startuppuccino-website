<section>

	<?php foreach ($sessions_set as $session) { ?>

		<div class="session" id="session<?php echo $session['id']; ?>">

			<div class="head">
				<h3><?php echo $session['title']." | ".$session['date']; ?></h3>
			</div>
			
			<div class="description">
				<p><pre><?php echo $session['description']; ?></pre></p>
			</div>

			<div class="guests" id="guests__<?php echo $session['id']; ?>">
				<?php if(isset($session['guests'])){ ?>
				<?php foreach ($session['guests'] as $guest){ ?>
					<div class="guest" guest-id="<?php echo $guest['id']; ?>">
						<a href="../people/?user_id=<?php echo $guest['id']; ?>">
							<div style="background-image:url('../app/assets/pics/people/<?php echo $guest['avatar']; ?>')"></div>
						</a>
					</div>
				<?php }} ?>
			</div>

			<div class="foot">
				<span onclick="SpHome.layout.toogleResources(<?php echo $session['id']; ?>)">Resources</span>
				<span onclick="SpHome.layout.toogleComments(<?php echo $session['id']; ?>)">Comments</span>
			</div>

			<div class="resources">
				<ul>
					<?php if(isset($session['resources'])){
						foreach ($session['resources'] as $resource) { ?>
						<li>
							<a href="../app/api/download/?f=<?php echo $resource; ?>" target="_blank">
								<span class="icon pdf"></span><?php echo $resource; ?>
							</a>
						</li>
					<?php } } ?>
				</ul>
			</div>

			<!--

			<div class="comments">

				<span class="toggle_button" onclick="Sp.layout.toggleComments('1')">comments (0)</span>
				<div class="comments_wrapper">

				</div>

			</div>

			-->

		</div>

	<?php } ?>

</section>