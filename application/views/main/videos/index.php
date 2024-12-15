<link rel="stylesheet" href="<?= base_url("/assets/css/videos/videos.css?version=".uniqid()) ?>" />
<link rel="stylesheet" href="<?= base_url("/assets/css/video-js.css?version=".uniqid()) ?>" />

<div class="video-container">
	<div class="box-container">
	<div class="content">
</div>
<h1 class="video-title" id="program">What is <?= $videos["name"] ?>?</h1>
		<p class="video-title" id="htmlDescription">
			<?= $videos["description"] ?>
		</p>
		<video id="library-video" class="video-js" controls preload="auto" width="800" data-setup="{}">
				<source src="<?= $videos["video_url"] ?>" type="video/mp4" />
				<p class="vjs-no-js">
					To view this video please enable JavaScript, and consider upgrading to a
					web browser that
					<a href="https://videojs.com/html5-video-support/" target="_blank">
						supports HTML5 video</a>
				</p>
			</video>		
	</div>
</div>

<script>
	const PROGRESS_API_URL  = '<?= base_url("api/progress/video"); ?>';
	const VIDEO_ID = '<?= $videos["video_id"] ?>';
	const USER_ID = '<?= $user_id ?>';
</script>
<script src="<?= base_url("assets/js/video-js.js?version=" . uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/videos/main.js?version=" . uniqid()) ?>"></script>
