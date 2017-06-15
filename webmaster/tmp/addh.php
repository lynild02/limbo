
<script>$('.wrapp').css({'background':'url(img/bgh.jpg)','background-size':'cover','background-position':'center center','background-repeat':'no-repeat'});</script>
<div class="add-div">
  <article class="container">
    <h2>Let's add a Hentai. Ready?</h2>
    <form action="end/addingh.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <select name="type" ng-model="tablen" class="columns six">
          <option value="" selected="selected">-- Select One --</option>
          <option value="hentai">Hentai</option>
          <option value="doujinshi">Doujinshi</option>
          <option value="other">Contribution</option>
        </select><span class="columns six tip">Your content will be posted on <b>{{tablen}}.</b></span>
      </div>
      <div class="row">
        <input type="text" name="title" placeholder="Titulo" class="columns six"/>
        <input type="text" name="description" placeholder="description" class="columns six"/>
      </div>
      <div class="row"></div>
      <input type="text" name="img" placeholder="link para imagen principal" class="u-full-width"/>
      <div class="row">
        <input type="text" name="chap1" placeholder="Link Chap1" class="columns four"/>
        <input type="text" name="chap2" placeholder="Link Chap2" class="columns four"/>
        <input type="text" name="chap3" placeholder="Link Chap3" class="columns four"/>
      </div>
      <div class="row">
        <input type="text" name="chap4" placeholder="Link Chap4" class="columns four"/>
        <input type="text" name="chap5" placeholder="Link Chap5" class="columns four"/>
        <input type="text" name="chap6" placeholder="Link Chap6" class="columns four"/>
      </div>
      <div class="row">
        <input type="text" name="chap7" placeholder="Link Chap7" class="columns four"/>
        <input type="text" name="chap8" placeholder="Link Chap8" class="columns four"/>
        <input type="text" name="chap9" placeholder="Link Chap9" class="columns four"/>
      </div>
      <div class="row">
        <input type="text" name="chap10" placeholder="Link Chap10" class="columns four"/>
      </div>
      <div class="row">
        <input type="submit" name="send" class="columns four button-primary"/>
      </div>
    </form>
  </article>
</div>