
<article class="container">
  <form style="text-align: center;" action="end/search.php" method="post" class="login-ct">
    <div id="logo">
      <h1 style="font-family: Montserrat"><b>Limbo City</b></h1>
    </div>
    <h3>Sistema de revisi&oacute;n de Formato de Pago.</h3>
    <p>Por favor, ingrese el numero de Formato que desea revisar.</p>
    <input type="text" placeholder="####" name="number" ng-model="numb" onkeypress="return justNumbers(event);"/>
    <input type="submit" name="send" value="REVISAR"/>
    <h4>Se revisara en busca del Formato numero:<br><span style='color: #d3394c; font-weight: bolder;'>{{numb}}</span><br><br></h4>
    <div class="row"><span class="columns four">Limbo City&nbsp;&copy;</span><span class="columns four">
        <p style="background: url(https://www.limbocity.xyz/img/aglogo.svg); background-size: contain; background-repeat: no-repeat; background-position: center center; text-indent: 100%; white-space: nowrap; overflow: hidden;">angel gomez</p></span><span class="columns four"><a href='http://www.limbocity.xyz' target='_blank' style='color: #000; text-decoration: none;'>www.limbocity.xyz</a></span></div>
  </form>
</article>
<script>
  function justNumbers(e){
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
    return true;
     
    return /\d/.test(String.fromCharCode(keynum));
    }
</script>