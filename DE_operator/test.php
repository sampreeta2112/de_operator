<html>
    <head> 
       <link rel="stylesheet" href="../css/test.css">
    </head>
    <script type="">
    function closeWin() {
  myWindow.close();
}
</script>
    <body>
        <div class="sidenav">
          
          <br/><br/>
          <b>Images from DB</b>
          <?php
          require 'function.php';
         // global $conn;
          //$cans_query = 'select canvasjson,ID from can_backup';
          //$result = mysqli_query($conn, $cans_query);
          echo '<ul class="listing">';
          get_can();
    echo '</ul>';
          ?>
<br/><br/>
<button id="delete_selected" class="button">Delete selected</button>
<button class="button" id="save_can">Save in database</button>
<button class="button" onclick="window.history.back()"> EXIT</button><br/><br/><br/>
        </div>
        <div class="main">
          <canvas id="c" width="690" height="651"  ></canvas>
        </div>
        
<!--
        <div style="display: inline-block; margin-left: 10px">
            <button id="drawing-mode" class="btn btn-info">Cancel drawing mode</button><br>
            <button id="clear-canvas" class="btn btn-info">Clear</button><br>
            https://jsfiddle.net/Fidel90/7kmf3jz2/
            http://jsfiddle.net/xhtv2ewd/
            http://jsfiddle.net/xhtv2ewd/1/
            http://jsfiddle.net/xhtv2ewd/2/
            <div id="drawing-mode-options">
              <label for="drawing-mode-selector">Mode:</label>
              <select id="drawing-mode-selector">
                <option>Pencil</option>
                <option>Circle</option>
                <option>Spray</option>
                <option>Pattern</option>
          
                <option>hline</option>
                <option>vline</option>
                <option>square</option>
                <option>diamond</option>
                <option>texture</option>
              </select><br>
          
              <label for="drawing-line-width">Line width:</label>
              <span class="info">24</span><input type="range" value="30" min="0" max="150" id="drawing-line-width"><br>
          
              <label for="drawing-color">Line color:</label>
              <input type="color" value="#005E7A" id="drawing-color"><br>
          
              <label for="drawing-shadow-color">Shadow color:</label>
              <input type="color" value="#005E7A" id="drawing-shadow-color"><br>
          
              <label for="drawing-shadow-width">Shadow width:</label>
              <span class="info">22</span><input type="range" value="0" min="0" max="50" id="drawing-shadow-width"><br>
          
              <label for="drawing-shadow-offset">Shadow offset:</label>
              <span class="info">14</span><input type="range" value="0" min="0" max="50" id="drawing-shadow-offset"><br>
            </div>
          </div>

-->
        
        <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script src="../js/fabric.min.js"></script>
        <script src="../js/test.js"></script>
    </body>
</html>

