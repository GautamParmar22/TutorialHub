<!DOCTYPE html>
<html >
  <head>
  	<META HTTP-EQUIV=REFRESH CONTENT="6 ; URL=index1.php">
    <meta charset="UTF-8">
    <title>Loading Bar</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font: 150%/1.4 Helvetica, Arial, sans-serif;
  padding: 20px;
  margin-top:280px;
  background-image:url(admin/upload/blurry-lights-abstract-hd-wallpaper-1920x1200-2385.png);
  letter-spacing: 10px;
}  

.well {
  width: 80%;
  background-color: #F7F7F7;
  background-image: linear-gradient(to bottom, #F5F5F5, #F9F9F9);
  background-repeat: repeat-x;
  border-radius: 4px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
  overflow: hidden;
  margin-left:10%;
}

.progress-bar {
  animation: progress 6s;
  padding: .3em;
  text-align: center;
  color: rgba(255,255,255,100);
  background-image: linear-gradient(135deg, #26BDA6, #FF9F65, #DED37E);
  border-radius: 4px 4px 4px 4px;
}

@keyframes progress {
  from {
    width: 0;
    color: rgba(255,255,255,0);
  }
  to {
    width: 100%;
    color: rgba(255,255,255,1);
  }
}

/* rodeo-002
- animate bg position
- animate text opacity/color to pulse
  - or animate letter spacing to pulse
- jquery to adjust width with progress
*/
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
	
    <div class="well">
  <div class="progress-bar">Loading...</div>
</div>
    
    
    
    
    
  </body>
</html>
