
<style>@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700,900|Open+Sans+Condensed:300')</style>
<hr/>
<h1>CSS3, Efectos faciles de Lograr!</h1>
<p>En la nota pasada (<a href='https://limbocity.xyz/pages/t/notes/view.php?id=15'>esta nota</a>), hablamos sobre el comportamiento del <b>CSS y el HTML</b>, haciendo notar que los dos son necesarios el uno para el otro.<br>Pero, en esta ocación entraremos un poco mas al campo y veremos algunos efectos que solo usan <b>CSS3 y HTML</b> para funcionar. Mas adelante, en la siguiente nota hablaremos de dos cosas que nos permitiran aprovechar MUCHISIMO a <b>ATOM</b>, para poder escribir nuestro <b>CSS y HTML mucho mas rapido</b>.</p>
<h3>Comenzemos...</h3>
<h5>HTML</h5>
<p>Primero nuestro <b>HTML</b>, usaremos un DIV a modo de contenedor para todo nuestro elemento. Una imagen de fondo y un pequeño titulo que aparezca al pasar el mouse encima de nuestro conetenedor.</p>
<pre><code>&lt;div class='contenedor-ejemplo'&gt;
  &lt;img src='http://i.imgur.com/k2Qg2Dj.jpg'&gt;
  &lt;span class='text-over'&gt;Hi! i'm an image!&lt;/span&gt;
&lt;/div&gt;</code></pre>
<p>Asi lo vemos:</p><span>Hemos redimencionado la imagen para que sea un poco mas pequeña*</span>
<div><img src="http://i.imgur.com/k2Qg2Dj.jpg" style="width:300px"/><span>Hi! i'm an image!</span></div>
<p>Como podemos ver, no es mucho HTML.</p>
<h5>CSS</h5>
<p>Ahora el CSS, para darle forma a lo que acabamos de hacer '^-^'<br>Aplicaremos el siguiente CSS al mismo HTML de arriba.</p>
<pre><code>&lt;!--- CSS ---&gt;
.contenedor-ejemplo{width: 300px; height: 300px; border: solid 2px #000; position: relative; overflow: hidden; cursor: pointer;}
.contenedor-ejemplo img{position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%;}
.contenedor-ejemplo span{position: absolute; bottom: 10px; left: 0px; transform: translateX(-100%); background-color: #000; color: #fff; padding: 3px 7px; transition: all .3s ease-in-out;}
.contenedor-ejemplo:hover span{transform: translateX(0); transition: all .3s ease-in-out;}

&lt;!--- HTML ---&gt;
&lt;div class='contenedor-ejemplo'&gt;
  &lt;img src='http://i.imgur.com/k2Qg2Dj.jpg'&gt;
  &lt;span class='text-over'&gt;Hi! i'm an image!&lt;/span&gt;
&lt;/div&gt;</code></pre>
<h5>El Resultado:</h5><span>Pasa el puntero sobre el elemento para ver el efecto.</span>
<style>
  .contenedor-ejemplo{width: 300px; height: 300px; border: solid 2px #000; position: relative; overflow: hidden; cursor: pointer;}
  .contenedor-ejemplo img{position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%;}
  .contenedor-ejemplo span{position: absolute; bottom: 10px; left: 0px; transform: translateX(-100%); background-color: #000; color: #fff; padding: 3px 7px; transition: all .3s ease-in-out;}
  .contenedor-ejemplo:hover span{transform: translateX(0); transition: all .3s ease-in-out;}
</style>
<div class="contenedor-ejemplo"><img src="http://i.imgur.com/k2Qg2Dj.jpg"/><span class="text-over">Hi! i'm an image!</span></div>
<p>Como podemos ver, se ha logrado un efecto minimalista pero muy profesional con muy poco codigo, perfecto para una tienda en linea.</p>
<style>
  .contenedor-ejemplo2{width: 300px; height: 300px; position: relative; overflow: hidden; cursor: pointer;}
  .contenedor-ejemplo2 img{position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%;}
  .contenedor-ejemplo2 span{position: absolute; bottom: 10px; left: 0px; transform: translateX(-100%); background-color: #000; color: #fff; padding: 3px 7px; transition: .3s ease-in-out;}
  .contenedor-ejemplo2:hover span{transform: translateX(0); transition: .3s ease-in-out;}
</style>
<div class="contenedor-ejemplo2"><img src="https://ae01.alicdn.com/kf/HTB1aABTIFXXXXaCXFXXq6xXFXXXt/2015-ropa-nueva-mujer-persona-modelo-largo-largo-c-digo-grande-impresi-n-de-prendas-de.jpg"/><span class="text-over">$50.00 USD</span></div>
<p>Pero, que es lo que hicimos...?</b><br>Ok, lo primero es que en nuestro <b>CSS</b>, usamos algunos elementos nuevos:</p><code>transform: translateX(-100%) y transform: translateX(0)</code>
<p>Estos dos elementos quieren decir que el objeto al que hacen referencia (en este caso ese objeto es nuestra etiqueta <b>SPAN</b>) se movera de su posición original acia su izquierda el espacio proporcional al 100% de su propio tamaño, esto quiere decir que si su tamaño es de 300px, se movera 300px a la izquierda; pero, <b>por que ala izquierda?</b> bueno, por que al igual que en un <b>PLANO CARTESIANO</b>, su <b>EJE X</b> indica su eje <b>HORIZONTAL</b>, y el valor <b>NEGATIVO</b> indica que se movera a la <b>IZQUIERDA</b> del 0 (del centro o de su punto de referencia)</p>
<p>Ahora, si en un principio su posicion en el eje X es 0, pero indicamos una transformación que lo movera de su lugar, por que al pasar el puntero por encima este vuelve a su lugar?</p>
<p>Para eso es la funcion <b>:hover</b>, esto indica que el estilo CSS cambiara cuando el puntero entre en el area del elemento al que se asigno el <b>:hover</b>.<br>Como nostros atribuimos el <b>:hover</b> al DIV con la <span>clase</span> <b>contenedor-ejemplo</b>, y especificamos dentro del <b>:hover</b> que la transformación regresaria desde un -100% hasta un 0; al pasar el puntero por encima.<br>Esto lo hicimos en:</p><code>.contenedor-ejemplo:hover span{transform: translateX(0); transition: all .3s ease-in-out;}</code>
<p>Tambien apreciamos que la especificación <b>transition: all .3s ease-in-out</b> indica que la animación dispone de <b>.3 Segundos</b> para realizarce, <b>all</b> indica que ese tiempo es para todas las transformaciones que hallamos determinado, si es que tubieramos mas de una; y <b>ease-in-out</b> indica que la animación tendra una aceleración de <b>Mayor a menor y luego a Mayor</b>(si, en serio ¬¬)</p>
<h3>En siguientes NOTAS veremos efectos mas complejos.</h3><a href="http://short.am/join/signup.php?refid=lynild"><img src="http://short.am/images/banners/720.jpg" title="short.am - Make short links and earn the biggest money"/></a>