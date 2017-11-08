<?php
/**
 * Audio Player
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the LICENSE.md file.
 *
 * @author Marcel Scherello <audioplayer@scherello.de>
 * @copyright 2016-2017 Marcel Scherello
 */
 ?>
	<div class="sm2-bar-ui full-width">
		<div class="bd sm2-main-controls">
			<div class="sm2-inline-texture"></div>
			<div class="sm2-inline-gradient"></div>
  
			<div class="sm2-inline-element sm2-button-element">
				<div class="sm2-button-bd" id="toggle_alternative"></div>
			</div>

			<div class="sm2-inline-element sm2-button-element toolTip" data-placement="right" title="<?php p($l->t('previous song')); ?>">
				<div class="sm2-button-bd">
					<a href="#prev" class="sm2-inline-button previous"><?php p($l->t('previous song')); ?></a>
				</div>
			</div>
  
			<div class="sm2-inline-element sm2-button-element toolTip" data-placement="right" title="<?php p($l->t('play/ pause')); ?>">
				<div class="sm2-button-bd">
					<a href="#play" class="sm2-inline-button play-pause"><?php p($l->t('play/ pause')); ?></a>
				</div>
			</div>
  
			<div class="sm2-inline-element sm2-button-element toolTip" data-placement="right" title="<?php p($l->t('next song')); ?>">
				<div class="sm2-button-bd">
					<a href="#next" class="sm2-inline-button next"><?php p($l->t('next song')); ?></a>
				</div>
			</div>
  
			<div class="sm2-inline-element sm2-button-element">
				<div class="sm2-playlist-cover"></div>
			</div>

			<div class="sm2-inline-element sm2-inline-status">
				<div class="sm2-playlist">
					<div class="sm2-playlist-target">
     					<!-- playlist <ul> + <li> markup will be injected here -->
     					<!-- if you want default / non-JS content, you can put that here. -->
     					<noscript><p>JavaScript is required.</p></noscript>
    				</div>
   				</div>

				<div class="sm2-progress">
					<div class="sm2-row">
						<div class="sm2-inline-time">0:00</div>
						<div class="sm2-progress-bd">
							<div class="sm2-progress-track">
								<div class="sm2-progress-bar"></div>
								<div class="sm2-progress-ball">
									<div class="icon-overlay"></div>
								</div>
							</div>
						</div>
						<div class="sm2-inline-duration">0:00</div>
					</div>
				</div>
			 </div>

			<div class="sm2-inline-element sm2-button-element sm2-volume toolTip" data-placement="left" title="<?php p($l->t('Volume')); ?>">
				<div class="sm2-button-bd">
					<span class="sm2-inline-button sm2-volume-control volume-shade"></span>
					<a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
				</div>
			</div>
 
			<div class="sm2-inline-element sm2-button-element sm2-repeat toolTip" data-placement="left" title="<?php p($l->t('Repeat playlist')); ?>">
				<div class="sm2-button-bd">
					<a href="#repeat" class="sm2-inline-button repeat">repeat</a>
				</div>
			</div>
			
			<div class="sm2-inline-element sm2-button-element sm2-shuffle toolTip" data-placement="left" title="<?php p($l->t('Shuffle playlist')); ?>">
				<div class="sm2-button-bd">
					<a href="#shuffle" class="sm2-inline-button shuffle">shuffle</a>
				</div>
			</div>
		</div>

		<div class="bd sm2-playlist-drawer sm2-element">
			<div class="sm2-inline-texture">
				<div class="sm2-box-shadow"></div>
			</div>
 			<!-- playlist content is mirrored here -->
			<div class="sm2-playlist-wrapper">
				<ul class="sm2-playlist-bd " id="activePlaylist">
				</ul>
			</div>
		</div>
	</div>
