
<div ng-controller="loginCtrl">
  <h3>So, if you aren't a LCWebmaster, what the hell r u doing HERE?</h3>
  <form action="/" id="myLogin" class="log">
    <div class="cont">
      <input type="text" id="username" placeholder="Nickname" ng-model="username" class="u-full-width"/>
      <input type="password" id="password" placeholder="Password" ng-model="password" class="u-full-width"/>
      <button type="button" ng-click="submit()" value="Login" class="u-full-width">Login</button>
      <h4>Hola {{username}}!</h4>
    </div>
  </form>
</div>