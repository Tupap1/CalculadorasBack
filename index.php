<!DOCTYPE html>
 <html lang="es">
    <head>
         <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <1 Enlace de hojas de estilo de bootstrap -->
                 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0- beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- BmbxuPwQa21c/FVZBCNJ7UAyJXM6wuqIj61tLrc4wSX@szH/Ev+nYRRUWlolf1f1" crossorigin="anonymous">


                <!-- Enlace google fonts -->
                   <link rel="preconnect" href="https://fonts.gstatic.com">
                   <link href="https://fonts.googleapis.com/css?family-Pangolin&display-swap" rel="stylesheet">


                <!--Enlace javascript para Sweetalert--> 
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

                
                <title>Taller Calculadora de PHP</title>

    </head>
                 
    <body> 
        <div class="container">
            <h1>Calculadora PHP</h1> 

                <hr>

                    <form method="post">

                        <label>Número 1</label>
                            <input type="number" max=10000 min-e name="numero1" placeholder="0" required autofocus>

                        <label>Número 2</label>
                            <input type="number" max="10000" min="0" placeholder="0" name="numero2">
                            
                            <hr> 



                            <input type="radio" class="form-check-input" name="opcion" value="sumar" required> Sumar

                            <input type="radio" class="form-check-input" name="opcion" value="restar" required> Restar 
                            
                            <input type="radio" class="form-check-input" name="opcion" value="multiplicar" required> 
                            Multiplicar 
                            
                            <input type="radio" class="form-check-input" name="opcion" value="division" required> División
                            
                            <input type="radio" class="form-check-input" name="opcion" value="potenciacion" required> Potenciación
                            
                            <input type="radio" class="form-check-input" name="opcion" value="concatenacion" required> Concatenación 
                            
                            <hr>
                            
                            <input type="submit" class="btn btn-success w-25" value="Enviar" > 
                            
                            <input type="reset" class="btn btn-danger w-25" value="Limpiar">
                            
                            <hr>
                    </form>
            </div>
                          
            <div class="container">
                <?php
                    if ($_POST){
                        function Sumar (){
                            echo "La suma de los números es:"
                            ($_POST['numero1']+$_POST['numero2']); 
                            }
                        function Restar (){
                            echo "La resta de los números es:".
                            ($_POST['numero1' ]-$_POST['numero2']); }


                        function Multiplicar (){
                            echo "La multiplicación de los números es: ". ($_POST['numero1']*$_POST['numero2']);
                                }
                                function Division (){
                                }
                                if ($_POST['numero2']==0)
                                $d="Error: division por ";
                                else
                                $d=$_POST['numero1']/$_POST['numero2']; echo "La division de los números es: ".$d;
                                function Potenciacion (){
                                echo "La potenciación de los números es:" (pow($_POST['numero1'],$_POST['numero2']));
                                }

                                function Concatenacion (){
                                echo "La Concatenación de los números es:" ($_POST['numero1'].$_POST['numero2']);
                                }
                            switch($_POST['opcion'])
                            {
                                case 'sumar':
                                Sumar();
                                break;
                                
                                case 'restar':
                                Restar();
                                break;

                                case 'multiplicar':
                                Multiplicar();
                                break;

                                case 'division':
                                Division();
                                break;

                                case 'potenciacion':
                                Potenciacion();
                                break;

                                case 'concatenacion':
                                Concatenacion();
                                break;
                             default:
                                echo "Error en la opción seleccionada"; break;
                            }
                        }

                    ?>
            </div>
        <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body> 
    </html>
                                