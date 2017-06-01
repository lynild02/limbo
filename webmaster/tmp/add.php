
<script>$('.wrapp').css({'background':'url(img/bg2.png)','background-size':'cover','background-position':'center center','background-repeat':'no-repeat'});</script>
<div ng-controller="selCtrl" ng-cloak="ng-cloak" layout="column" class="add-div md-padding">
  <article class="container">
    <h2>Let's write an Article. Ready?</h2>
    <form action="end/adding.php" method="post" id="add-form" name="add-form">
      <div class="row">
        <select select="select" ng-model="selectedName" ng-options="x for x in names" name="table" class="columns six">
          <option value="" selected="selected">-- Select One --</option>
        </select><span class="columns six tip">Your article will be posted on {{selectedName}}.</span>
      </div>
      <div class="row">
        <input type="text" name="title-art" placeholder="Titulo" class="columns six"/>
        <input type="text" name="description" placeholder="description" class="columns six"/>
      </div>
      <div class="row">
        <div class="columns three">
          <input type="file" name="img" data-theme="blue" data-input="false" data-buttonText="Header Image" class="u-full-width jfilestyle"/>
        </div>
        <div class="columns three">
          <input type="file" name="img2" data-theme="blue" data-input="false" data-buttonText="Body Image" class="u-full-width jfilestyle"/>
        </div>
        <input type="date" ng-controller="currentDate" value="{{currD | date:'dd-mm-yy'}}" ApplyInEditMode="true" name="date" class="no-view"/>
      </div>
      <div class="row">
        <textarea name="body" class="u-full-width"></textarea>
      </div>
      <div class="row">
        <input type="text" placeholder="Who's writting?" name="nau" class="columns four"/>
        <input type="text" placeholder="Writter's Info" name="iau" class="columns four"/>
        <input type="submit" value="Postear" name="send" class="columns four button-primary"/>
      </div>
    </form>
  </article>
</div>