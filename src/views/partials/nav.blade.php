<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  
    <div class="navbar-header">
      <a href="../" class="navbar-brand">Laravel Bootstrap</a>
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-main">
      <ul class="nav navbar-nav">

        <li>
          <a href="/bootstrap/readme">Readme</a>
        </li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="/flatly/components" id="download">Components <span class="caret"></span></a>
          @include('layouts.bootstrap.playground.components-nav')
        </li>

        <li>
          <a href="/bootstrap/dashboard">Dashboard</a>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a></li>
      </ul>

    </div>
  </div>
</div>