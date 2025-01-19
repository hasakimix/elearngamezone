let videoPlayer = null;
let playBackInterval = null;

let videoLength = 0;
let videoPlayBackTime = 0;
let videoPlayBackPercentage = 0;

$(document).ready(function () {
	videoPlayer = videojs('library-video');

	if(videoPlayer.readyState() < 1){
		videoPlayer.one("loadedmetadata", onLoadedMetadata);
	}else{
		onLoadedMetadata();
	}

	videoPlayer.on("play", function(){
		playBackInterval = setInterval(playBackTimer, 1000);
	});

	videoPlayer.on("pause", async function(){
		clearInterval(playBackInterval);
		setTimeout(async function () {
			await getVideoPlayBackPercentage();
			await saveVideoProgress();
		}, 1500)
	});

});

const onLoadedMetadata = () => {
	videoLength = videoPlayer.duration();
	getVideoCurrentTimeProgress();
};

const playBackTimer = async () => {
	videoPlayBackTime = videoPlayer.currentTime();
	await getVideoPlayBackPercentage();
};

const getVideoPlayBackPercentage = async() => {
	var a = videoPlayBackTime / videoLength;
	var percentage = (a * 100).toFixed(2);
	videoPlayBackPercentage = percentage;
};

const getVideoCurrentTimeProgress = async() => {
	if(parseFloat(CURRENT_PROGRESS) > 0){
		var a = (parseFloat(CURRENT_PROGRESS) / 100);
		var current_time = (a * videoLength).toFixed(2);
		videoPlayer.currentTime(current_time);
	}
};

const saveVideoProgress = async () => {
	await $.ajax({
        url: `${PROGRESS_API_URL}`,
        crossDomain: true,
        type: 'POST',
        contentType: "application/json",
        dataType: "json",
        data: JSON.stringify({
			user_id : USER_ID,
			video_id : VIDEO_ID,
			progress : videoPlayBackPercentage
		}),
        beforeSend: function (xhr) {
            console.log("sending");
        },
        error: (error) => {
            if (error.responseJSON == undefined) {
                alert("Something Went Wrong", "Please report it to the team.", 'error');
            } else {
                alert("Something Went Wrong", error.responseJSON.message, 'error');
            }
        },
        success: (response) => {
            console.log(response);
        }
    });
};
