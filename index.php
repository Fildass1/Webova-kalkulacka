<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Kalkulačka</title>
    <link rel="stylesheet" href="style.css" />
    <script language="javascript" type="text/javascript">
        	 <!--
	        	var veta = new String;
	        	function pridejCislo(precteno){
	        		veta += precteno;
	        		document.getElementById("vysledek").value = veta;
	        	}
	        	function poslatData(){
	        		var data = {
	        			retezec: veta,
	        		};
	        		var xhr = new XMLHttpRequest();
	        		xhr.open("POST", "math.php", true);
	        		xhr.setRequestHeader("Content-Type", "application/json");
	        		xhr.onreadystatechange = function(){
	        			if (xhr.readyState == XMLHttpRequest.DONE){
	        				document.getElementById("vysledek").value = xhr.responseText;
	        			}
	        		};
	        		xhr.send(JSON.stringify(data));
                    veta = "";
	        	}
                function smazat(){
                    document.getElementById("vysledek").value = "";
                    veta = "";
                }
                document.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter'){
                        document.getElementById("operator=").click();
                    }
                    if (event.key === '7'){
                        document.getElementById("cislo7").click();
                    }
                    if (event.key === '8'){
                        document.getElementById("cislo8").click();
                    }
                    if (event.key === '9'){
                        document.getElementById("cislo9").click();
                    }
                    if (event.key === '/'){
                        document.getElementById("operator/").click();
                    }
                    if (event.key === '4'){
                        document.getElementById("cislo4").click();
                    }
                    if (event.key === '5'){
                        document.getElementById("cislo5").click();
                    }
                    if (event.key === '6'){
                        document.getElementById("cislo6").click();
                    }
                    if (event.key === '*'){
                        document.getElementById("operator*").click();
                    }
                    if (event.key === '1'){
                        document.getElementById("cislo1").click();
                    }
                    if (event.key === '2'){
                        document.getElementById("cislo2").click();
                    }
                    if (event.key === '3'){
                        document.getElementById("cislo3").click();
                    }
                    if (event.key === '-'){
                        document.getElementById("operator-").click();
                    }
                    if (event.key === '0'){
                        document.getElementById("cislo0").click();
                    }
                    if (event.key === '.'){
                        document.getElementById("operator.").click();
                    }
                    if (event.key === '+'){
                        document.getElementById("operator+").click();
                    }
                    if (event.key === 'Delete'){
                        document.getElementById("funkceSmazat").click();
                    }
                })



	        	
        	//-->
        </script>
  </head>
  <body>
        <div id="boxik">
            <h1>Kalkulačka</h1>
            <form method="POST">
            	<input type="text" id="vysledek">
            </form>
            <table>
            	<tr>
            		<td><button onclick="pridejCislo('7')" id="cislo7" value="7">7</button></td>
            		<td><button onclick="pridejCislo('8')" id="cislo8" value="8">8</button></td>
            		<td><button onclick="pridejCislo('9')" id="cislo9" value="9">9</button></td>
            		<td><button onclick="pridejCislo(' / ')" id="operator/" value="/">/</button></td>
            	</tr>
            	<tr>
            		<td><button onclick="pridejCislo('4')" id="cislo4" value="4">4</button></td>
            		<td><button onclick="pridejCislo('5')" id="cislo5" value="5">5</button></td>
            		<td><button onclick="pridejCislo('6')" id="cislo6" value="6">6</button></td>
            		<td><button onclick="pridejCislo(' * ')" id="operator*" value="*">*</button></td>
            	</tr>
            	<tr>
            		<td><button onclick="pridejCislo('1')" id="cislo1" value="1">1</button></td>
            		<td><button onclick="pridejCislo('2')" id="cislo2" value="2">2</button></td>
            		<td><button onclick="pridejCislo('3')" id="cislo3" value="3">3</button></td>
            		<td><button onclick="pridejCislo(' - ')" id="operator-" value="-">-</button></td>
            	</tr>
            	<tr>
            		<td><button onclick="pridejCislo('0')" id="cislo0" value="0">0</button></td>
            		<td><button onclick="pridejCislo('.')" id="operator." value=".">.</button></td>
            		<td><button onclick="poslatData()" id="operator=" value="=">=</button></td>
            		<td><button onclick="pridejCislo(' + ')" id="operator+" value="+">+</button></td>
            	</tr>
                <tr>
                    <td><button onclick="smazat()" id="funkceSmazat" value="AC">AC</button></td>
                </tr>
            </table>
        </div>


  </body>
</html>