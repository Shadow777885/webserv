<!DOCTYPE html>
<html>
    <head> 
        <title> Spi Landing </title>
        <script>
            function toggle(){
                const xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var deser = JSON.parse(this.responseText);
                    document.getElementById("temp").innerHTML=deser.temperature;
                    document.getElementById("press").innerHTML=deser.pressure;
                    document.getElementById("alt").innerHTML=deser.altitude;
                    }
                };
				xhttp.open("POST", "sensor.php", true);
				xhttp.send();
            }
        </script>
    </head>
    <body>
        <button type="button" onclick="toggle();" value="tglsens" name="tglsens" id="tgsens">Toggle sensor</button>  
        <h1>Temperature: <span id="temp"></span> <h1>
        <h1>Pressure: <span id="press"></span> </h1>
        <h1>Altitude: <span id="alt"></span> </h1>
        <h1> Control and live feed for the Spi </h1>
        <break/>

    <div class = "Controls">
        <button type="button" onclick="toggle();" value="tgled" name="tgled" id="tgled">Toggle LED</button>
        <h3> Controls of Spi </h3>
        <p>
            Use the arrows hereunder to control the Spi
        </p>
        <h1>
            <pre>
    ↑               
  ←   →
    ↓
            </pre> 
        </h1>
    </div>
    
    <div class = "Live Feed">
        <h3>View the livefeed here!</h3>
        <p>The live feed has these specs:</p>
        <ul>
            <li>10fps</li>
            <li>720p</li>
            <li>Encoded in h.264</li>
            <li>Transmitted by an esp32</li>
        </ul>
        <img src = "Livefeed.png">
    </div>

    </br>

    <a href="link.html" target="_blank">View the specs of the Spi!</a>
        <div class = "forms">
        <br>

        <label for="Submit">Does not actually do anything</label>
        <input id="submit" type="submit" name="submit">
        <br>

        <label for="radio">Which is the superior coding language?</label>
        <br>
        <input id="radio1" type="radio" name="radio1" value="C">
        <label for="radio1">C is the best!</label>
        <input id="radio2" type="radio" name="radio2" value="C">
        <label for="radio2">C for sure.</label>
        <input id="radio3" type="radio" name="radio3" value="C">
        <label for="radio3">C.</label>
        <br><br>

        <label for="checkboxes">Select all that apply below:</label>
        <br>
        <input id="checkbox1" type="checkbox" name="checkbox 1" value="Best">
        <label for="checkbox1">Best</label> <br>
        <input id="checkbox2" type="checkbox" name="checkbox 2" value="Best">
        <label for="checkbox2">Teacher/Student</label> <br>
        <input id="checkbox3" type="checkbox" name="checkbox 3" value="Best">
        <label for="checkbox3">Ever</label> 
        <br>
    </div>
    </body>

</html>