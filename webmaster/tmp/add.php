
<script>$('.wrapp').css({'background':'url(img/bg2.png)','background-size':'cover','background-position':'center center','background-repeat':'no-repeat'});</script>
<div class="add-div">
  <article class="container">
    <h2>Let's write an Article. Ready?</h2>
    <form action="end/adding.php" id="add-form" method="post" enctype="multipart/form-data" ng-controller="addCtrl">
      <div class="row">
        <select name="table" ng-model="tablen" class="columns six">
          <option value="" selected="selected">-- Select One --</option>
          <option value="tcode">Code</option>
          <option value="tnotes">Notas</option>
          <option value="twin">Windows</option>
          <option value="tmac">MacOS</option>
          <option value="tgnu">Linux</option>
        </select><span class="columns six tip">Your article will be posted on <b>{{tablen}}.</b></span>
      </div>
      <div class="row">
        <input type="text" name="title" placeholder="Titulo" class="columns six"/>
        <input type="text" name="description" placeholder="description" class="columns six"/>
      </div>
      <div class="row"></div>
      <input type="text" name="img" placeholder="link para imagen principal" class="u-full-width"/>
      <div class="row">
        <input type="file" id="file" name="body" accept=".html,.php" class="no-view inputfile inputfile-1"/>
        <label for="file" class="i1 u-full-width">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>
          </svg><span class="i1s">&nbsp;Carga el body PHP o HTML</span>
        </label>
      </div>
      <div class="row">
        <input type="text" placeholder="Who's writting?" name="nau" class="columns three"/>
        <input type="text" placeholder="Writter's Info" name="iau" class="columns three"/>
        <input type="date" ng-controller="currentDate" value="{{currD | date:'dd-MM-yy'}}" name="date" class="columns three"/>
        <input type="submit" name="send" class="columns three button-primary"/>
      </div>
    </form>
  </article>
</div>