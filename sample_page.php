<?php
    ;
    echo("<h2>");
        echo("Credential: INSERT CREDENTIAL NAME HERE");
        echo("</h2>");
            echo("<h2>");
            echo(date("Y-m-d:H:i:s"));
                echo("<br>");
                $value = trim(system("/path/to/use_otpauth.py"));
                    echo("</h2>");
                    echo(
                              "
      <p>
          <button class=\"js-textareacopybtn\" style=\"vertical-align:top;\">Copy Textarea</button><br>
          <textarea class=\"js-copytextarea\">$value</textarea>
      </p>
      <p id=\"report\"></p>
      <br><br><h2><a href=\"https://landing.example.com/landing.html\">LANDING</h2>
      <br><br><h2><a href=\"https://mail.example.com/\">MAIL</h2>
    <script>
      var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

      copyTextareaBtn.addEventListener('click', function(event) {
      var copyTextarea = document.querySelector('.js-copytextarea');
        copyTextarea.select();

            try {
                  var successful = document.execCommand('copy');
                  var msg = successful ? 'successful' : 'unsuccessful';
                  console.log('Copying text command was ' + msg);
                  document.getElementById(\"report\").innerHTML  = 'copy successful';
                } catch (err) {
                  console.log('Oops, unable to copy');
                  document.getElementById(\"report\").innerHTML  = 'Oops, unable to copy';
      }});
      </script>

      ");
