
<div ng-controller="dashCtrl" class="dash">
  <article class="container">
    <h2>Hello! What do you like to do right now?</h2>
    <div class="row">
      <figure type="button" ng-model="add" ng-click="myaddSubmit()" class="columns three rr"><img src="img/004-file.svg"/>
        <figcaption>
          <h4>Añadir archivo</h4>
        </figcaption>
      </figure>
      <figure type="button" ng-model="addf" ng-click="myaddfSubmit()" class="columns three rr"><img src="img/001-inbox.svg"/>
        <figcaption>
          <h4>Am. Archivos</h4>
        </figcaption>
      </figure>
      <figure type="button" ng-model="usr" ng-click="usrSubmit()" class="columns three rr"><img src="img/003-users.svg"/>
        <figcaption>
          <h4>Am. Usuarios</h4>
        </figcaption>
      </figure>
      <figure type="button" ng-model="sett" ng-click="settSubmit()" class="columns three rr"><img src="img/002-settings.svg"/>
        <figcaption>
          <h4>Settings</h4>
        </figcaption>
      </figure>
    </div>
  </article>
</div>