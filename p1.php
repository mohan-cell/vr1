<html>
<head>
<title><?php $name = str_replace('_', ' ', $_REQUEST["c"]); echo $name; ?> |MY LIVE TV</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css" />
<script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>


<style>
	:root {
--plyr-color-main: #d9230f;
}





</style>

</head>
<body>


<video  autoplay controls  playsinline>
    
<?php
printf("<source type=\"application/vnd.apple.mpegurl\" src=\"https://amigofx.com:1936/pcnhd/pcnhd/playlist.m3u8\">", $_REQUEST["c"]);
?>
    


</video>


<script>


function videovisible() {
    document.getElementById('loading').style.display = 'none'
}
document.addEventListener("DOMContentLoaded", () => {
    const e = document.querySelector("video"),
        n = e.getElementsByTagName("source")[0].src,
        o = {};
     {
        new Plyr(e, o)
    }
});
</script>

</body>
</html>

