<div class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! link_to(route('root'), "Robin Lieson", ['class' => 'navbar-brand']) !!}
    </div>
    <div class="navbar-collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li>{!! link_to(route('root'), "Home") !!}</li>
      <li>{!! link_to(route('galleries.index'), "Gallery") !!}</li>
      <li>{!! link_to(route('articles.index'), "Article") !!}</li>
    </ul>
    </div>
  </div>
</div>