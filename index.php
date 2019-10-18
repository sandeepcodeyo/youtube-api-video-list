<?php
include('header.php');
?>
<div class="main clearfix">
            <div class="col-sm-12 form-sec">
                <h1 style="color: #212529;margin-bottom: 25px;">Free MP3/MP4 Downloader</h1>
                <form class="song-search">
                    <input type="text" autocomplete="off" id="search" placeholder="Search Song or Youtube URL that you want to convert..." required>
                    <input type="submit" value="Search" class="sbmit">
                </form>
            </div>
            <div class="col-sm-12 tab-section" id="result">
            </div>
        </div>
<?php        
include('footer.php');
?>