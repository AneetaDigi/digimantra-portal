<?php
/**
 * Template Name: Playbutton Page
 * Template Page Type: Playbutton, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
<section class="banner_section">
	<div class="container">
		<div class="banner_wrapper">
			<div class="banner_logo">
				<img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/logo-min.png" alt="">
			</div>
			<div class="banner_content">
				<h3>Sample Test</h3>
				<p>By DigiMantra</p>
			</div>
		</div>
	</div>
</section>
<section class="clock_section">
	<div class="container bg-white">
		<div class="clock_wrapper">
			<div class="minuts">
                 <div class="clock_img">
					 <img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/timer.svg" alt="timer">
				 </div>
				 <div class="clock_content">
					 <h5>15 Minutes</h5>
					 <p>to take this assessment</p>
				 </div>
			</div>
			<div class="problems">
                 <div class="clock_img">
					 <img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/problems.svg" alt="problems">
				 </div>
				 <div class="clock_content">
					 <h5>3</h5>
					 <p>problems to be solved</p>
				 </div>
			</div>
		</div>
	</div>
</section>
<section class="playbutton_section mt-5">
    <div class="container bg-white py-4">
        <div class="playbutton_wrap text-center">
            <style>
    html, body {
        margin: 0!important;
        padding: 0!important;
    }

    video {
        width: auto;
        max-width: 100%;
    }
</style>

<title>Auto Stop RecordRTC on Silence</title>
<h1 style="display:none;">Auto Stop RecordRTC on Silence</h1>

<br>
<button id="btn-start-recording" >Play</button>
<button id="btn-stop-recording" disabled style="display: none;">Stop Recording</button>

<hr>
<video  controls autoplay playsinline ></video>

<script src="http://localhost/digimantra-portal/wp-content/themes/twenty-twenty-one-child/js/RecordRTC/RecordRTC.js"></script>
<script src="https://www.webrtc-experiment.com/hark.js"></script>
<script>
var video = document.querySelector('video');
var h1 = document.querySelector('h1');
var default_h1 = h1.innerHTML;

function captureCamera(callback) {
    navigator.mediaDevices.getUserMedia({ audio: true, video: true }).then(function(camera) {
        callback(camera);
    }).catch(function(error) {
        alert('Unable to capture your camera. Please check console logs.');
        console.error(error);
    });
}

function stopRecordingCallback() {
    video.srcObject = null;
    var blob = recorder.getBlob();
    video.src = URL.createObjectURL(blob);

    recorder.camera.stop();
    video.muted = false;
}

var recorder; // globally accessible

document.getElementById('btn-start-recording').onclick = function() {
    this.disabled = true;
    captureCamera(function(camera) {
        video.muted = true;
        video.srcObject = camera;

        recorder = RecordRTC(camera, {
            type: 'video'
        });

        recorder.startRecording();

        var max_seconds = 3;
        var stopped_speaking_timeout;
        var speechEvents = hark(camera, {});

        speechEvents.on('speaking', function() {
            if(recorder.getBlob()) return;

            clearTimeout(stopped_speaking_timeout);

            if(recorder.getState() === 'paused') {
                // recorder.resumeRecording();
            }
            
            h1.innerHTML = default_h1;
        });

        speechEvents.on('stopped_speaking', function() {
            if(recorder.getBlob()) return;

            // recorder.pauseRecording();
            stopped_speaking_timeout = setTimeout(function() {
                document.getElementById('btn-stop-recording').click();
                h1.innerHTML = 'Recording is now stopped.';
            }, max_seconds * 1000);

            
            // just for logging purpose (you ca remove below code)
            var seconds = max_seconds;
            (function looper() {
                h1.innerHTML = 'Recording is going to be stopped in ' + seconds + ' seconds.';
                seconds--;

                if(seconds <= 0) {
                    h1.innerHTML = default_h1;
                    return;
                }

                setTimeout(looper, 1000);
            })();
        });

        // release camera on stopRecording
        recorder.camera = camera;

        document.getElementById('btn-stop-recording').disabled = false;
    });
};

document.getElementById('btn-stop-recording').onclick = function() {
    this.disabled = true;
    recorder.stopRecording(stopRecordingCallback);
};
</script>

<footer style="margin-top: 20px;"><small id="send-message"></small></footer>
<script src="https://www.webrtc-experiment.com/common.js"></script>
        </div>
        <ul class="play_btn_content text-center mt-4 ">

            <li>Camera will be accessed</li>
            <li>Time will begin</li>
            <li>Please make sure you are on a good internet connection</li>
</ul>
    </div>
</section>
</main><!-- #site-content -->

