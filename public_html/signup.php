<header>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</header>
<?php
$inc = include("./conexion/conexion.php");

try {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        if ($_POST["password"] == $_POST["confirm_password"]) {

            $sql = "INSERT INTO usuarios (email, password,nombre) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $_POST['email'], $_POST['password'], $_POST['nombre']);

            if (mysqli_stmt_execute($stmt)) {

                header("location: login.php");
            } else {
                echo "Error";
            }
        } else {
            echo "<script>
         Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Las contraseñas no coinciden!'
          }).then((result) => {
        if (result.isConfirmed) {
           
            window.history.go(-1);
        }
    })
         
         </script>";
        }
    } 
} catch (Exception $ex) {
    echo "<script>
         alert('Algo salio mal :/');
         window.history.go(-1);
         </script>";
}
?>

<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>LOGIN</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
        <link rel="stylesheet" href="css/EstiloLogin.css"/>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
        <div class="wrapper bg-white">
            <div class="h2 text-center" >¡Bienvenido a Sweet Cream!</div>
            <div class="h4 text-muted text-center pt-2">Regístrate</div>

            <form method="post" class="pt-3">
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-user p-2"></span> 
                        <input type="text" name="nombre" required="" placeholder="Ingresa tu Nombre">

                    </div>
                </div>
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-address-card p-2"></span> 
                        <input type="text" name="email" required="" placeholder="Ingresa tu correo electrónico">
                    </div>
                </div>
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-eye p-2"></span> 
                        <input type="password" name="password" required="" placeholder="Ingresa tu contraseña">
                    </div>
                </div>
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-eye-slash p-2"></span> 
                        <input type="password" name="confirm_password" required="" placeholder="Confirma tu contraseña">
                    </div>

                    <br>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" required="" id="flexCheckDefault" style="background-color: #533f03" > <a class="" data-toggle="modal" data-target="#exampleModalLong1">He leído y Acepto las Políticas de Privacidad</a>
                        <label class="form-check-label" for="flexCheckDefault">
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" required="" id="flexCheckDefault" style="background-color: #533f03" > <a data-toggle="modal" data-target="#exampleModalLong2">He leído y Acepto los Términos y Condiciones </a>
                        <label class="form-check-label" for="flexCheckDefault">
                        </label>
                    </div>


                </div>

                <button class="btn btn-block text-center my-3" type="submit" value="Registrarme">Registrarme</button>
                <div class="text-center pt-3 text-muted"><span> O <br><a href="login.php">Inicia Sesión</a></span></div>


            </form>

            <!-- Modal / Politicas de Privacidad-->
            <div class="modal fade bd-example-modal-lg" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Politicas de Privacidad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="grid">
                            <div class="grid__item large--four-fifths push--large--one-tenth">
                                <div class="rte rte--nomargin rte--indented-images">
                                    <p><strong>Aviso de Privacidad</strong></p>
                                    <p><span style="font-weight: 400;">EL AVISO DE PRIVACIDAD FORMA PARTE DEL USO DEL SITIO WEB WWW.SWEETCREAM.COM</span></p>
                                    <p><strong>RESPONSABLE</strong></p>
                                    <p><span style="font-weight: 400;">En cumplimiento a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, Carlos Moisés Álvarez Bravo, (en adelante Sweet Cream) le informa que SweetCream es responsable de sus datos personales. El "Usuario" podrá contactar a SweetCream en cualquier momento a través de nuestro correo electrónico SweetCreamadmin@gmail.com o directamente en Lago Cardiel 1, Fracc. Paseos del Lago, 55600 México, Méx. Nuestro teléfono es </span><span style="font-weight: 400;">+52 55 8016 4789</span><span style="font-weight: 400;">.</span></p>
                                    <p><span style="font-weight: 400;">Protegemos y salvaguardamos sus datos personales para evitar el daño, pérdida, destrucción, robo, extravío, alteración, así como el tratamiento no autorizado de sus datos personales.</span></p>
                                    <p><strong>DATOS PERSONALES</strong></p>
                                    <p><span style="font-weight: 400;">La información deberá ser siempre veraz y completa. El usuario responderá en todo momento por los datos proporcionados y en ningún caso SweetCream será responsable de la veracidad de los mismos.</span></p>
                                    <p><span style="font-weight: 400;">La información solicitada al usuario en el sitio www.SweetCream.com es: Nombre completo. Teléfonos. Dirección Postal. Mail. Datos de Facturación. Datos de Tarjeta de Crédito. Sus datos personales serán tratados con base a en los principios de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en términos de la Legislación. Se mantendrá la confidencialidad de sus datos personales estableciendo y manteniendo de forma efectiva las medidas de seguridad administrativas, técnicas y físicas, para evitar su daño, pérdida, alteración, destrucción, uso, acceso o divulgación indebida.</span></p>
                                    <p><strong>QUÉ SON LOS COOKIES Y CÓMO SE UTILIZAN</strong></p>
                                    <p><span style="font-weight: 400;">La aceptación de las cookies no es un requisito para visitar nuestra página. Sin embargo, nos gustaría señalar que el uso del "carrito", funcionalidad en SweetCream y orden solo es posible con la activación de las cookies. Las cookies son pequeños archivos de texto que identifican a tu computadora con nuestro servidor como un usuario único cuando tú visitas ciertas páginas en nuestro sitio y que son guardados por tu navegador de internet en el disco duro de tu computadora. Las cookies se pueden utilizar para reconocer tu dirección de protocolo de internet, que te ahorra tiempo mientras quieres entrar a nuestro sitio. Sólo utilizamos cookies para tu comodidad en el uso de SweetCream (por ejemplo, para recordar quién eres cuando deseas modificar tu carrito de compra sin tener que volver a introducir tu dirección de correo electrónico) y no para obtener o usar cualquier otra información sobre ti (por ejemplo de publicidad segmentada). Tu navegador puede ser configurado para no aceptar cookies, pero esto sería restringir el uso de nuestra página. Por favor, acepta nuestra garantía de que el uso de cookies no contienen datos de carácter personal o privado, y están libres de virus. Si deseas obtener más información acerca de las cookies, ve a http://www.allaboutcookies.org, y para obtener información sobre la eliminación de ellos desde el navegador, ve a http://www.allaboutcookies.org/manage-cookies/index.html. En el caso de empleo de cookies, el botón de "ayuda" que se encuentra en la barra de herramientas de la mayoría de los navegadores, le dirá cómo evitar aceptar nuevos cookies, cómo hacer que el navegador le notifique cuando recibe un nuevo cookie o cómo deshabilitar todos los cookies.</span></p>
                                    <p><strong>USO DE LA INFORMACIÓN</strong></p>
                                    <p><span style="font-weight: 400;">La información solicitada permite a SweetCream contactar a los usuarios y potenciales clientes cuando sea necesario para completar los procedimientos de compra. Asimismo, SweetCream utilizará la información obtenida para: • Procurar un servicio eficiente • Informar sobre nuevos productos o servicios que estén relacionados con el contratado o adquirido por el cliente • Dar cumplimiento a obligaciones contraídas con nuestros clientes • Informar sobre cambios de nuestros productos o servicios • Proveer una mejor atención al usuario. Los datos personales o empresariales proporcionados por el usuario formarán parte de un archivo que contendrá su perfil. El usuario puede modificar su perfil en cualquier momento utilizando su número de usuario y contraseña.</span></p>
                                    <p><strong>LIMITACIÓN DE USO Y DIVULGACIÓN DE INFORMACIÓN</strong></p>
                                    <p><span style="font-weight: 400;">En nuestro programa de notificación de promociones, ofertas y servicios a través de correo electrónico, solo SweetCream tiene acceso a la información recabada. Este tipo de publicidad se realiza mediante avisos y mensajes promocionales de correo electrónico, los cuales sólo serán enviados a usted y a aquellos contactos registrados para tal propósito, esta indicación podrá usted modificarla en cualquier momento enviando un correo a sweetcreamadmin.com. En los correos electrónicos enviados, pueden incluirse ocasionalmente ofertas de terceras partes que sean nuestros socios comerciales.</span></p>
                                    <p><strong>DERECHOS ARCO (ACCESO, RECTIFICACIÓN, CANCELACIÓN Y OPOSICIÓN)</strong></p>
                                    <p><span style="font-weight: 400;">El área responsable del manejo y la administración de los datos personales es: Servicio al Cliente a quien puede contactar mediante en el correo electrónico SweetCreamadmin.com o nuestro teléfono es +52 55 8016 4789 </span></p>
                                    <p><strong>PARA EJERCER SUS DERECHOS ARCO Y REVOCAR EL CONSENTIMIENTO OTORGADO</strong></p>
                                    <p><span style="font-weight: 400;">Como titular de datos personales, el "Usuario" podrá ejercitar los derechos ARCO (acceso, cancelación, rectificación y oposición al tratamiento de sus datos personales), o bien, revocar el consentimiento que haya otorgado a SweetCream, para el tratamiento de sus datos personales, enviando directamente su solicitud al área Servicio de Atención al Clientes a través de la cuenta de correo electrónico: SweetCreamadmin.com. Dicha solicitud deberá contener por lo menos: (a) nombre y domicilio u otro medio para comunicarle la respuesta a su solicitud; (b) los documentos que acrediten su identidad o, en su caso, la representación legal; (c) la descripción clara y precisa de los datos personales respecto de los que se solicita ejercer alguno de los derechos ARCO, (d) la manifestación expresa para revocar su consentimiento al tratamiento de sus datos personales y por tanto, para que no se usen; (d) cualquier otro elemento que facilite la localización de los datos personales. Su petición deberá ir acompañada de los fundamentos por los que solicita dicha revocación y una identificación oficial del titular de los datos o de su apoderado. En un plazo máximo de 20 (veinte) días hábiles atenderemos su solicitud y le informaremos sobre la procedencia de la misma a través del correo electrónico del que provenga la petición. SweetCream solicita al usuario que actualice sus datos cada vez que éstos sufran alguna modificación, ya que esto permitirá brindarle un servicio eficiente y personalizado.</span></p>
                                    <p><strong>TRANSFERENCIAS DE INFORMACIÓN CON TERCEROS</strong></p>
                                    <p><span style="font-weight: 400;">Sweetcream únicamente realiza remisiones de datos para cumplir con las obligaciones contraídas con los clientes. SweetCream solo compartirá datos cuando haya sido requerido por orden judicial para cumplir con las disposiciones procesales.</span></p>
                                    <p><strong>PROTECCIÓN</strong></p>
                                    <p><span style="font-weight: 400;">Al momento de comprar un producto en línea, se pedirán datos bancarios para los cuales le ofrecemos seguridad y confidencialidad, ya que contamos con un servidor seguro bajo el protocolo SSL (Secure Socket Layer) de tal manera que la información que envían, se transmite encriptada para asegurar su protección. Para verificar que se encuentra en un entorno protegido, asegúrese de que aparezca una “S” en la barra de navegación “httpS”://. Sin embargo, y a pesar de contar cada día con herramientas más seguras, la protección de los datos enviados a través de Internet no se puede garantizar al 100%; por lo que una vez recibidos, se hará todo lo posible por salvaguardar la información.</span></p>
                                    <p><strong>CAMBIOS EN EL AVISO DE PRIVACIDAD</strong></p>
                                    <p><span style="font-weight: 400;">Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, para la atención de novedades legislativas o jurisprudenciales, políticas internas, nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios o productos y prácticas del mercado. Estas modificaciones estarán disponibles al público a través de nuestra página de Internet www.sweetcream.com sección aviso de privacidad.</span></p>
                                    <p><strong>ACEPTACIÓN DE LOS TÉRMINOS</strong></p>
                                    <p><span style="font-weight: 400;">Esta declaración de Privacidad está sujeta a los términos y condiciones del sitio web de SweetCream antes descrito, lo cual constituye un acuerdo legal entre el usuario y SweetCream. Si el usuario utiliza los servicios del sitio de SweetCream, significa que ha leído, entendido y acordado los términos antes expuestos.</span></p>
                                    <p><strong>AUTORIDAD</strong></p>
                                    <p><span style="font-weight: 400;">Si el usuario/cliente considera que han sido vulnerados sus derechos respecto de la protección de datos personales, tiene el derecho de acudir a la autoridad correspondiente para defender su ejercicio. La autoridad es el Instituto Federal de Acceso a la Información y Protección de Datos (IFAI), su sitio web es: www.ifai.mx.</span></p>
                                    <p><strong>FECHA DE LA ÚLTIMA ACTUALIZACIÓN</strong></p>
                                    <p><span style="font-weight: 400;">Estimado usuario, se le notifica que el Aviso de Privacidad fue modificado el día 28 de Junio de 2022.</span></p>
                                </div> 
                            </div>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>

            <!-- Modal / Terminos y Condiciones-->

            <div class="modal fade bd-example-modal-lg" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Terminos y Condiciones</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="grid">
                            <div class="grid__item large--four-fifths push--large--one-tenth">
                                <div class="rte rte--nomargin rte--indented-images">
                                    <p><b>ÁMBITO DE APLICACIÓN</b></p>
                                    <p><span style="font-weight: 400;">Bienvenido al sitio web SWEETCREAM.COM y todas sus divisiones, subsidiarias, afiliadas y sitios de internet, la cual te ofrecen acceso al sitio web y te venden productos bajo los términos y condiciones establecidos en la misma. Te rogamos que leas detenidamente los presentes términos y condiciones antes de utilizar el sitio web WWW.SWEETCREAM.COM, ya que al entrar a nuestro sitio confirmas tu entendimiento con los mismos, si no aceptas estos términos y condiciones de uso, no podrás utilizar este sitio.</span></p>
                                    <p><span style="font-weight: 400;">Los presentes términos y condiciones, regulan el uso del sitio web SWEETCREAM.COM, del que Carlos Moisés Álvarez Bravo, es propietario, con domicilio en Lago Cardiel 1, Fracc. Paseos del Lago, 55600 México, Méx. Nuestro teléfono es +52 55 8016 4789.</p>
                                    <p><span style="font-weight: 400;">A través de su sitio web SWEETCREAM.COM, SweetCream, oferta bienes, ofreciendo a sus usuarios y  la posibilidad de su adquisición, debido al contenido y la finalidad del sitio web, las personas que quieran beneficiarse de sus servicios deben de suscribirse, lo cual se realiza a través del llenado del formulario de registro y siguiendo los pasos que con posterioridad se les comunicará por medio de correo electrónico para dichos efectos, la condición de suscriptor supone la aceptación de los términos y condiciones de uso.</span></p>
                                    <p><span style="font-weight: 400;">SweetCream, se reserva el derecho de cambiar, modificar, añadir o eliminar partes de estos términos y condiciones de uso en cualquier momento, los cambios serán efectivos cuando se publiquen en el sitio SWEETCREAM.COM, por favor revisa periódicamente las actualizaciones de estos términos y condiciones de uso, ya que tendrás que aceptar los cambios que se realicen para poder seguir accediendo al sitio y seguir comprando productos.</span></p>
                                    <p><b>USO DE </b><a href="http:// SWEETCREAM.COM " class="text-link"><b> SWEETCREAM.COM </b></a></p>
                                    <br>
                                    <p><span style="font-weight: 400;">Al aceptar los presentes términos y condiciones te concedemos una licencia no transferible y revocable para utilizar nuestro sitio, en virtud de los términos y condiciones descritos y aceptados, con el propósito de la compra de artículos ofertados en nuestra página.</span></p>
                                    <p><span style="font-weight: 400;">El uso comercial o el nombre de terceros están prohibidos, salvo lo expresamente permitido por nosotros con anterioridad, cualquier infracción de estos términos y condiciones dará lugar a la revocación inmediata de la licencia otorgada en este apartado, sin previo aviso.</span></p>
                                    <p><span style="font-weight: 400;">Ciertos servicios y las características relacionadas con los mismos, que pueden estar disponibles en el sitio SWEETCREAM.COM, pueden requerir el registro o suscripción, si decides registrarte o suscribirte a cualquiera de estos servicios o funciones relacionadas, te comprometes a proporcionar información precisa y actualizada acerca de ti mismo, para actualizar rápidamente esa información si hay algún cambio.</span></p>
                                    <p><b>ENVIO DE PROMOCIONES Y OFERTAS</b></p>
                                    <p><span style="font-weight: 400;">Durante el proceso de registro, aceptas recibir correos electrónicos promocionales del sitio SWEETCREAM.COM., no obstante, posteriormente, puedes optar por no recibir tales correos promocionales haciendo clic en el enlace en la parte inferior de cualquier correo electrónico promocional.</span></p>
                                    <p><span style="font-weight: 400;">Asimismo durante el proceso de registro nos autorizas expresamente a realizarte llamadas telefónicas y enviarte mensajes de texto con fines mercadológicos, no obstante en todo tiempo tienes la facultad de revocar este consentimiento enviándonos un correo a sweetcreamadmin.com donde nos manifiestes de forma expresa tu deseo de no seguir recibiendo llamadas telefónicas ni envió de mensajes de texto por parte de nuestro equipo de mercadotecnia.</span></p>
                                    <p><span style="font-weight: 400;">Lo anterior de conformidad con la Ley federal de Protección al Consumidor, así como del Acuerdo por el que se establecen las reglas de operación y funcionamiento del Registro Público de Consumidores.</span></p>
                                    <p><b>LAS COMUNICACIONES DEL USUARIO</b></p>
                                    <p><span style="font-weight: 400;">Cualquier comunicación que envíes al sitio web SWEETCREAM.COM, incluyéndose de forma enunciativa más no limitativa, preguntas, críticas, comentarios, sugerencias se convertirá en nuestra única y exclusiva propiedad y no serán devueltos, salvo que medie orden judicial, asimismo cuando remites comentarios o críticas al sitio, también nos concedes el derecho a utilizar el nombre que envíes, en el marco de dicha revisión, comentario, o cualquier otro contenido, por último, cabe mencionar que, no debes de usar una dirección de correo electrónico falsa, es decir, pretender ser alguien que no eres.</span></p>
                                    <p><span style="font-weight: 400;">Asimismo serán de nuestra propiedad y no serán devueltos salvo que medie orden judicial, los datos que los suscriptores envíen al sitio web www.sweetcream.com para registrar diversas cuentas con la finalidad de verse beneficiados con las promociones de nuevos suscriptores, dichas cuentas serán anuladas y dadas de baja inmediatamente, cualquier beneficio o promoción que se haya intentado redimir será cancelado y el suscriptor que haya intentando obtener el beneficio, se le podrá revocar la licencia que se le otorgó al momento de la suscripción, procediendo a cancelar cualquier pedido de productos que hubiera realizado, sin ningún tipo de responsabilidad de nuestra parte.</span></p>
                                    <p><b>RESPONSABILIDAD</b></p>
                                    <p><span style="font-weight: 400;">Hay casos en los cuales una orden de compra puede no ser procesada por circunstancias ajenas a nosotros y las cuales no pueden ser previstas, circunstancias en las cuales interviene la fuerza mayor o el caso fortuito, en ese sentido, SWEETCREAM.COM, informará al cliente de inmediato el motivo por el cual no fue posible procesar una orden, restituyendo cualquier cantidad cobrada al suscriptor, dejando claro que en este proceso se puede pedir información adicional para completar el proceso de reembolso.</span></p>
                                    <p><span style="font-weight: 400;">Asimismo se refiere que todos los productos ofertados en el sitio SWEETCREAM.COM, están sujetos a disponibilidad y se ofrecen a nuestros suscriptores hasta agotar existencias, por lo que puede darse el caso que un mismo producto pueda ser adquirido por varios clientes a la vez y al final del proceso de venta resulte que el producto ya no se encuentre disponible por haberse agotado, aún y cuando aparezca en el sitio web WWW.SWEETCREAM.COM, en cuyo caso se le informará al suscriptor de tal situación procediendo al reembolso de cualquier cantidad pagada por el producto adquirido si es el caso o bien se le notificara de la imposibilidad de procesar la orden de compra.</span></p>
                                    <p><span style="font-weight: 400;">Algunos productos ofertados en el sitio SWEETCREAM.COM, pueden estar sujetos además de los presentes términos y condiciones, a condiciones particulares de venta, los cuales podrán ser consultados por el suscriptor junto con la descripción del producto, es necesario que todo suscriptor verifique las condiciones particulares de venta de estos productos, antes de realizar su compra, a fin de cerciorarse de los términos, condiciones y restricciones que en su caso pudieran aplicar de forma particular.</span></p>
                                    <p><span style="font-weight: 400;">Todas las ofertas de venta, comunicaciones, solicitudes de información entre otros, se realizan a través del sitio SWEETCREAM.COM, mi representada no será responsable de comunicaciones que se envíen fuera de este sitio, asimismo tampoco será responsable por depósitos en efectivo, transferencias o pagos mediante tarjetas de crédito que hagan los suscriptores a cuentas diversas a las autorizadas en la compra de productos, refiriéndose que jamás se hacen solicitudes de depósito a cuentas de particulares.</span></p>
                                    <p><b>PROTECCION DE DATOS</b></p>
                                    <p><span style="font-weight: 400;">Los datos proporcionados por el cliente son protegidos de acuerdo a nuestro aviso de privacidad, publicado en SWEETCREAM.COM .</span></p>
                                    <p><span style="font-weight: 400;"> &nbsp;</span></p>
                                    <p><b>FACTURACION</b></p>
                                    <p><span style="font-weight: 400;">Los suscriptores que adquieran productos podrán solicitar la factura de los mismos al momento de realizar la compra, en caso de no solicitarse contarán con 7 días naturales para solicitarla.</span></p>
                                    <p><b>LEY APLICABLE Y JURISDICCIÓN</b></p>
                                    <p><span style="font-weight: 400;">Para la interpretación y cumplimiento de los presentes términos y condiciones, las partes se someten a la jurisdicción de los tribunales de la Ciudad de México, Distrito Federal renunciado expresamente a cualquier otro fuero que pudiere corresponderles por razón de sus domicilios presentes o futuros.</span></p>
                                    <p><span style="font-weight: 400;">Al utilizar sweecream.com, usted acepta todas las condiciones de venta, así como la actualización regular de sus servicios. Le recomendamos consultar de manera regular esta página para tomar en cuenta cualquier modificación de las condiciones de venta.</span></p>
                                    <p><span style="font-weight: 400;">Los cupones no aplican a tarifas de envío. Todos los precios son en pesos mexicanos, e incluyen I.V.A. Precios pueden variar sin previo aviso debido a factores externos: devaluaciones monetarias, alteraciones drásticas en el tipo de cambio, entre otras.</span></p>
                                    <p><span style="font-weight: 400;">Sweetcream se compromete a proporcionar los mejores productos que cumpla con nuestros estándares de calidad, así como cumplir con la más alta seguridad de la salud y los requisitos reglamentarios aplicables relacionados. En el caso de que alguno de nuestros productos no cumpla con los más altos estándares, no nos hacemos responsables de los daños resultantes de la falta de uso o defecto de los productos.</span></p>

                                    </ol>
                                    <p><b>CONTACTO</b></p>
                                    <p><span style="font-weight: 400;">sweetcreamadmin.com</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>






    </div>
</body>




</html>














<!--<body>
    <header>
        <a href="/php-login">¡Bienvenido a Sweet Cream!</a>
    </header>
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/sesion_style.css" type="text/css">
    
<?php if (!empty($message)): ?>
                                                      <p> <?= $message ?></p>
<?php endif; ?>
    
    <h1>Registrate</h1>
    <span>o <a href="login.php">Inicia Sesion</a></span>
    
    <form  method="post">
    
    <input type="text" name="nombre" placeholder="Ingresa tu Nombre">
<input type="text" name="email" placeholder="Ingresa tu correo electronico">
<input type="password" name="password" placeholder="Ingresa tu contraseña">
<input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
<input type="submit" value="Registrarme"> </form>
    

</body>
</html>-->
