<!DOCTYPE html>
<?php /* Template Name: Questions Page */ ?>

<script>
/*setTimeout(function () {
   window.location.href= '<?php bloginfo('url'); ?>/thank-you/'; // the redirect goes here

},20000); // 5 seconds*/
</script>

<?php
/**
 * Template Name: Questions Page
 * Template Page Type: questions, page
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
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/logo-min.png" alt="">
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
                     <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/timer.svg" alt="timer">
                 </div>
                 <div class="clock_content">
                     <h5>15 Minutes</h5>
                     <p>to take this assessment</p>
                 </div>
            </div>
            <div class="problems">
                 <div class="clock_img">
                     <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/problems.svg" alt="problems">
                 </div>
                 <div class="clock_content">
                     <h5>3</h5>
                     <p>problems to be solved</p>
                 </div>
            </div>
        </div>
    </div>
</section>
<section class="question_section">
    <div class="container bg-white  py-3">
    <form  method="post" enctype="multipart/form-data">

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
<button id="btn-start-recording" style="display:none;">Start Recording</button>
<button id="btn-stop-recording" disabled >Stop Recording</button>

<hr>
<video id="playerVideo" controls autoplay playsinline height="200px" width="200px;"></video>

<span id="blobURL"></span><br>
<span id="download"></span>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/twenty-twenty-one-child/js/RecordRTC/RecordRTC.js"></script>
<script src="https://www.webrtc-experiment.com/hark.js"></script>
<script src="https://www.webrtc-experiment.com/common.js"></script>
<script src="https://www.WebRTC-Experiment.com/RecordRTC.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/RecordRTC/5.6.2/RecordRTC.js" integrity="sha512-ct9A+Fsq37O/MmhMrl0o5R8WoS0V1YS2fW69RGnpa4lIQvUhMOA3xbGQ8oy4UK6CeWb8JPu4QippagGlVu1c+A==" crossorigin="anonymous"></script>
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


  const saveFile = async (blob) => {
  try {
    const handle = await window.showSaveFilePicker({
      types: [{
        accept: {
          // Omitted
        },
      }],
    });
    const writable = await handle.createWritable();
    await writable.write(blob);
    //console.log();
    await writable.close();
    return handle;
  } catch (err) {
    console.error(err.name, err.message);
  }
};

  // 'downloadFile.js', written by blending two solutions:
// 'js-download' https://github.com/kennethjiang/js-file-download
// 'Anders Paulsen' https://blog.jayway.com/2017/07/13/open-pdf-downloaded-api-javascript/

 function downloadFile(data, filename, mime) {
  // It is necessary to create a new blob object with mime-type explicitly set
  // otherwise only Chrome works like it should
  const blob = new Blob([data], {type: mime || 'application/octet-stream'});
  if (typeof window.navigator.msSaveBlob !== 'undefined') {
    // IE doesn't allow using a blob object directly as link href.
    // Workaround for "HTML7007: One or more blob URLs were
    // revoked by closing the blob for which they were created.
    // These URLs will no longer resolve as the data backing
    // the URL has been freed."
    window.navigator.msSaveBlob(blob, filename);
    return;
  }
  // Other browsers
  // Create a link pointing to the ObjectURL containing the blob
  const blobURL = window.URL.createObjectURL(blob);
  const tempLink = document.createElement('a');
  tempLink.style.display = 'none';
  tempLink.href = blobURL;
  tempLink.setAttribute('download', filename);
  // Safari thinks _blank anchor are pop ups. We only want to set _blank
  // target if the browser does not support the HTML5 download attribute.
  // This allows you to download files in desktop safari if pop up blocking
  // is enabled.
  if (typeof tempLink.download === 'undefined') {
    tempLink.setAttribute('target', '_blank');
  }
  document.body.appendChild(tempLink);
  tempLink.click();
  document.body.removeChild(tempLink);
 
    // For Firefox it is necessary to delay revoking the ObjectURL
    window.URL.revokeObjectURL(blobURL);
  
}

 // alert("vfjh");
 var blob = recorder.getBlob();
 var url = URL.createObjectURL(blob);
 var pathArray =url.substring(url.lastIndexOf('/') + 1);
 
 //video_url.value=pathArray;
    document.getElementById('video_ct').value = url
  
const numbers = [1, 2, 3, 4, 5];
 for (i=0;i< numbers.length; i++){
  var str1 = "digimantra ";
var str2 = i;
var str3 = " .webm";
var res = str1.concat(str2, str3);

//var videoname = 'aneeta51'.concat(i).'.web';
//alert(videoname);
var fileType = 'video'; // or "audio"


var fileName = 'C:/xampp/htdocs/digimantra-portal/wp-content/themes/twenty-twenty-one-child/uploads/'.concat(pathArray).concat(str3) ;  // or "wav"
console.log(fileName);
}
var test = document.getElementById('video_ct').value ;
//console.log(fileName);
//alert(bla);
var formData = new FormData();
//console.log(formData);
formData.append(fileType + '-filename', fileName);
formData.append(fileType + '-blob', blob);

xhr('<?php bloginfo('url'); ?>/wp-content/themes/twenty-twenty-one-child/templates/save.php', formData, function (fName) {
   // window.open(location.href + fName);
//console.log(formData);
});

function xhr(url, data, callback) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            callback(location.href + request.responseText);
        }
    };
    request.open('POST', url);
    request.send(data);
}
  



    var url = URL.createObjectURL(blob);
  var video = document.getElementById('playerVideo');
  video.type = "video/mp4";
  video.src = url;
  video.load();
  //download(url);
//console.log(url);

var url =video.src;


let video_url = document.getElementById("video_url");
var pathArray =url.substring(url.lastIndexOf('/') + 1);
//console.log(pathArray[0]);

    video_url.value=pathArray;
    document.getElementById('video_ct').value = url;

//console.log(pathArray);
    recorder.camera.stop();
    video.muted = false;
}

var recorder; // globally accessible

//document.getElementById('btn-start-recording').onclick = function() {
    this.disabled = true;
    captureCamera(function(camera) {
        video.muted = true;
        video.srcObject = camera;

        recorder = RecordRTC(camera, {
            type: 'video'
        });

        recorder.startRecording();

        var max_seconds = 2;
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

                //setTimeout(looper, 1000);
            })();
        });

        // release camera on stopRecording
        recorder.camera = camera;

        document.getElementById('btn-stop-recording').disabled = false;
    });








//};

document.getElementById('btn-stop-recording').onclick = function() {
    this.disabled = true;
    recorder.stopRecording(stopRecordingCallback);


    };



//</script>

<footer style="margin-top: 20px;"><small id="send-message"></small></footer>
<script src="https://www.webrtc-experiment.com/common.js"></script>

         <?php echo do_shortcode('[qsm quiz=3]');?>
       <input type="hidden" name="video_url" value="" id="video_url"> 
 <input type="hidden" name="video_ct" value="" id="video_ct"> 
       <div class="submit_btn text-center">
          <!-- <input type="submit" class="qsm-btn qsm-submit-btn qmn_btn" value="Submit" style="">-->
       </div>
    </form>
    </div>
</section>

</main><!-- #site-content -->

<?php 
 require_once( "wp-config.php");
require_once( "wp-load.php");
global $wpdb;

if ( isset( $_POST['submit'] ) ){

$myurl = $_POST['video_url'];


$myurl1 =  file_put_contents('C:/xampp/htdocs/digimantra-portal/'.$myurl.'.mkv', $_POST['video_ct']);





print_r($myurl1);
//die;
//$image = file_put_contents($_POST['video_url'],'C:\xampp\htdocs\digimantra-portal\ousetions_anwer.mp4');
//file_put_contents('C:\xampp\htdocs\digimantra-portal\ousetions_anwer.mp4', $image);
//print_r($image);
//file_put_contents('./myDir/myFile.gif', $image);

 $tablename = $GLOBALS['wpdb'] -> prefix . 'ousetions_anwer';
    //$tablename=$wpdb->prefix.'ousetions_anwer ';
$_POST['video_url'];
    $data=array(
        'video_url' => $_POST['video_url'], 
        'language' => $_POST['language'],
         'Conditional' => $_POST['Conditional'],
          'statement' => $_POST['statement']

         );
//print_r($data);

     $testing = $wpdb->insert( $tablename, $data);
    if(  $testing  ) { 
      die;
      $url = "/thank-you/";
echo '<script type="text/javascript">
        location.replace("../thank-you");
        </script>';    }
}



?>

</html>