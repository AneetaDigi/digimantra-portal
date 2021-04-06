<!DOCTYPE html>
<?php /* Template Name: Questions Page */
 require_once( "wp-config.php");
require_once( "wp-load.php");
 ?>

<script>
/*setTimeout(function () {
   window.location.href= 'http://localhost/digimantra-portal/thank-you/'; // the redirect goes here

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
<section class="banner_sectiontest-ques">
    <div class="container">
        <div class="banner_wrapper">
            <div class="banner_logo">
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/logo-min.png" alt="">
            </div>
            
        </div>
    </div>
</section>
<section class="clock_sectiontest">
  <div class="container bg-white bnr-btm">
    <div class="clock_wrapper bnr-btm-box questn">
      <div class="minuts">
                 <div class="clock_img">
           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/time-left.png" alt="timer">
         </div>
         <div class="clock_content">
         

           <h5 class="minut"><div class="count">
              <div id="timer"></div> Minutes
              </div>
             </h5>
           <p class="assmnt">To take this assessment</p>
           
         </div>
      </div>
      <div class="problems">
                 <div class="clock_img">
           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/hypothesis-1.png" alt="problems">
         </div>
         <div class="clock_content">
          <?php 
            if( $author_field){
//echo $author_field;
?>

           <h5 class="minut"><?php echo $author_field; ?> Minutes</h5>
          
          <?php }else{ ?>
          <h5 class="minut">30 Minutes</h5>
        <?php } ?>
           <p class="assmnt">Problems to be solved</p>
         </div>
      </div>
    </div>
  </div>
</section>
<section class="question_section">
    <div class="container bg-white  py-3 vde-box">
    <div class="tbs-cnt">
  <p class="tst-authr"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/warning.png"> <span class="wrng">Warning:</span> If you changed your current tab/visit on another page your test will be automatically submit after 3 attempts.</p>
  </div>
       <form  id="myForm"  method="post" enctype="multipart/form-data">

<input type="hidden" name="file_url" value="" id="file_url"> 
<style>
  #hide-answer{display:none;}
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
<div class="btnrcdng">
<button id="btn-start-recording" style="display:none;">Start Recording</button>
<button id="btn-stop-recording"   disabled >Stop Recording</button>
</div>

<div class="plyvido">
<video id="playerVideo"  autoplay playsinline height="200px" width="200px;"></video>
</div>

<span id="blobURL"></span><br>
<span id="download"></span>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/twenty-twenty-one-child/js/RecordRTC/RecordRTC.js"></script>
<script src="https://www.webrtc-experiment.com/hark.js"></script>
<script src="https://www.webrtc-experiment.com/common.js"></script>
<script src="https://www.WebRTC-Experiment.com/RecordRTC.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/RecordRTC/5.6.2/RecordRTC.js" integrity="sha512-ct9A+Fsq37O/MmhMrl0o5R8WoS0V1YS2fW69RGnpa4lIQvUhMOA3xbGQ8oy4UK6CeWb8JPu4QippagGlVu1c+A==" crossorigin="anonymous"></script>
   <?php 
if (isset($_POST['submit']))
    {  
 ?>
<script type="text/javascript">
window.location = "/thank-you/";
</script>      
    <?php

    } ?> 
       <script type="text/javascript">
            

      var count = 0;

$(window).on('blur', function () {
    count++;
    //alert(count);
    if (count == '3 ') {
     // function submitform(){
          console.log("tstst");
           


  //alert('test');
   document.forms["myForm"].submit();
//}
         window.location.href = '/thank-you/'; 

        //}
    }
   
});
    window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 9000000);

        function submitform(){
          //alert('test');
          document.forms["myForm"].submit();
        }

        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 9000000);
        }
    }
</script>
<script>var video = document.querySelector('video');
var h1 = document.querySelector('h1');
var default_h1 = h1.innerHTML;

function captureCamera(callback) {
    navigator.mediaDevices.getUserMedia({ audio: true, video: true }).then(function(camera) {
        callback(camera);
    }).catch(function(error) {
        alert('Unable to capture your camera. Turn on your camera and try again..!');
    location.href = '/';
        //die("Can't connect!");
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
     document.getElementById('file_url').value = pathArray
  
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
let cutom_url = document.getElementById("pathArray");
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

        var max_seconds = 30;
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
     <?php
          global $wpdb;
        $current_user_id = get_current_user_id();   
        //echo $current_user_id;
        $author_field = get_field('time_set', 'user_'. $current_user_id );
//$variable = get_field('time_set', $current_user_id);
//echo $author_field;
?>
<p><?php echo the_field('time_set', $current_user_id); ?></p>
    <script>

//   setTimeout("window.location='/thank-you/'",120000); 
      
//      var minutes = 30, seconds = 000;   jQuery(function(){     jQuery("span.countdown").html(minutes + ":" + seconds);     var count = setInterval(function(){ if(parseInt(minutes) < 0) { clearInterval(count); } else {jQuery("span.countdown").html(minutes + ":" + seconds); if(seconds == 0) { minutes--; if(minutes < 10) minutes = "0"+minutes; seconds = 59;} seconds--; if(seconds < 10) minutes = "0"+seconds;} }, 1000);   })

//  timer js start

      

var sec         = <?php echo $author_field;?>,
    countDiv    = document.getElementById("timer"),
    secpass,
    countDown   = setInterval(function () {
        'use strict';
        
        secpass();
    }, 1000);

function secpass() {
    'use strict';
    
    var min     = Math.floor(sec / 60),
        remSec  = sec % 60;
    
    if (remSec < 10) {
        
        remSec = '0' + remSec;
    
    }
    if (min < 10) {
        
        min = '0' + min;
    
    }
    countDiv.innerHTML = min + ":" + remSec;
    
    if (sec > 0) {
        
        sec = sec - 1;
        
    } else {
        
        clearInterval(countDown);
        
        //countDiv.innerHTML = 'countdown done';
        
     window.location.href = '/thank-you/'; 
        
    }
}
// end timer js
      
</script>
<script src="https://www.webrtc-experiment.com/common.js"></script>
<div id="show-answer">
   <?php echo do_shortcode('[qsm quiz=3]');?>
</div>
<div id="hide-answer">
  <p>You dont'have have camera.You are not able to do this test</p>
</div>


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

global $wpdb;

if ( isset( $_POST['submit'] ) ){

$myurl = $_POST['file_url'];


//$myurl1 =  file_put_contents('C:/xampp/htdocs/digimantra-portal/'.$myurl.'.mkv', $_POST['video_ct']);





print_r($myurl1);
//die;
//$image = file_put_contents($_POST['video_url'],'C:\xampp\htdocs\digimantra-portal\ousetions_anwer.mp4');
//file_put_contents('C:\xampp\htdocs\digimantra-portal\ousetions_anwer.mp4', $image);
//print_r($image);
//file_put_contents('./myDir/myFile.gif', $image);
$post_id = $wpdb->get_results("SELECT *  FROM wp_mlw_results  order by result_id desc Limit 1");
$result_id =$post_id[0]->result_id;

 $tablename = $GLOBALS['wpdb'] -> prefix . ' mlw_results';
    //$tablename=$wpdb->prefix.'ousetions_anwer ';
$_POST['file_url'];
    $data=array(
        'file_url' => $_POST['file_url'] 
      
         );
//print_r($data);
$updata_data = $wpdb->query($wpdb->prepare("UPDATE wp_mlw_results SET file_url= '".$_POST['file_url']."' WHERE result_id='".$result_id."' " ));
//print_r($updata_data);
//echo "UPDATE wp_mlw_results SET file_url= '".$_POST['file_url']."' WHERE result_id='".$result_id."' ";
//die;

   
}if(  $updata_data  ) { 
      die;
      $url = "/thank-you/";
echo '<script type="text/javascript">
        location.replace("../thank-you");
        </script>';    }




?>
<script>
//   $(".qsm-btn").click(function(){
    
//   $('form').css('display','none');
//   });
  </script>

</html>