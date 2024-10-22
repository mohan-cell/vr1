 
 <!DOCTYPE html>
<html lang="en">
<head>
<title><?php $name = str_replace('_', ' ', $_REQUEST["c"]); echo $name; ?> |MY LIVE TV</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//content.jwplatform.com/libraries/SAHhwvZq.js"></script>

</head>
<style>
    body {
           margin: 0px
         }
         .jwplayer {
              position: absolute !important
             }
         .jwplayer.jw-flag-aspect-mode {
              min-height: 100%;
             max-height: 100%
             }
</style>
 <body>
    
    <div id="myElement"></div>
<script type="text/JavaScript">
    jwplayer("myElement").setup({ 
 "autostart": false,
    "preload": "none",
     "repeat": true,
     "Volume": "100",
     "mute": false,
     "stretching": "exactfit",
     "width": "100%", 
     "setPip": false,

        "playlist": [{

           "sources": [

        {

          "default": false,

          "type": "hls",

 "file": "https://amigofx.com:1936/pcnhd/pcnhd/playlist.m3u8",

 "label": "0"
        }

      ],

        }],

 "primary": "html5",

  "hlshtml": true,

  "autostart": true,

   width: "100%",

  aspectratio: "16:9"

    });

</script>  
</body>
</html>