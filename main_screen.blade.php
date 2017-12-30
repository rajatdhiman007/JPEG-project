@extends('JPEG_project/bootstrapfileformain')
<html>
<head>
<title>JPEG</title>
<style type="text/css">



</style>
</head>
<body > 

<div id="main_body">
  <hr style="margin-left: 100px;">
  <br>
  @foreach ($fnames as $fname)
  <div >
    <article class="_h2d1o _j5hrx _pieko scheduler-border">
    <header class="_s6yvg">
    <a class="_5lote _pss4f _vbtk2" href="/bodhi.27/" style="width: 8%; "><img class="_a012k" src="images/{{$fname-> username}}.jpg"></a>
    <div class="_f95g7">
      <span><b>{{$fname-> fullname}}</b></span>
    </div>
    </header>
  <div>
  <div class="_22yr2 _e0mru">
  <div class="_jjzlb" style="padding-bottom: 62.8704%;">
  <img class="_icyx7" id="pImage_0" src="images/profile_pictures/{{$fname-> filename}}">
  </div>
  <!-- react-empty: 19 -->
  <div class="_ovg3g">
  </div></div></div>
  <div class="_es1du _rgrbt">
  <section class="_tfkbw _hpiil">
  <div class="_iuf51 _oajsw">
  <span class="_tf9x3">
  <!-- react-text: 27 -->
  <!-- /react-text -->
  <!-- react-text: 29 --><!-- /react-text -->
  </span></div>
  </section>
  <section class="_jveic _dsvln"><a class="_ebwb5 _1tv0k" href="#" role="button" aria-disabled="false">
  <form class="_k3t69">
  <input type="text" class="_7uiwk _qy55y" aria-label="Add a comment…" placeholder="Add a comment…" value="">
  </form>
  <button class="_9q0pi coreSpriteEllipsis _soakw">More options</button></section>
  </div>
  </article>
  </div>
  <hr style="margin-left: 100px;">
  @endforeach
  
</div>
</body>
</html>