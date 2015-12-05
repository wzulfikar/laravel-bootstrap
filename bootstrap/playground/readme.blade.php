@extends('layouts.bootstrap.main')

@section('container')

<div class="page-header">
	<div class="row">
	  <div class="col-lg-8 col-md-7 col-sm-6">
	    <h1>What?</h1>
	    <p class="lead">Basic knowledge about this template</p>
	  </div>
	</div>
</div>

<div class="row">
	
	<div class="col-md-6">
    <h4>Installation</h4>
    <p>
    Extract <code>bootstrap.zip</code> to <code>resources/views/layouts</code> and
    copy all files from <code>bootstrap/assets</code> to <code>public/assets</code>.
    <br/>
    If you use elixir, copy below code in your gulpfile and run <code>gulp</code>
		<pre>mix.copy('resources/views/layouts/bootstrap/assets', 'public/assets');</pre>
    </p>

    <h4>Template Switching</h4>
    <p>
    By default, <a href="https://bootswatch.com/flatly/">bootswatch flatly</a> template is used. To switch the template,
    set path to your bootstrap.css file in your <code>.env</code> file like so:
    <code>BOOTSTRAP_THEME=/assets/css/bootswatch-lumen.css</code><br/>
    <small class="text-muted"><i>You can use your own customized boostrap or download from bootstrap themes creator like <a href="https://bootswatch.com">https://bootswatch.com</a> </i></small>
    </p>
	</div>

		<div class="col-md-6">
			Code that needs to be inside your <code>whatever.blade.php</code>

<pre class="buffer-top">
{{ '@'.'extends("layouts.bootstrap.main")' }}

{{ '@'.'section("container")' }}

{{ '<div class="page-header">' }}
	Your Page Header
{{ '</div>' }}

Your page content

{{ '@'.'stop' }}

</pre>

		</div>

</div>

<hr/>

<h4>Structure</h4>
<p>
	It has 2 main files: <code>bootstrap/main.blade.php</code> for general layout and <code>bootstrap/admin.blade.php</code> for admin layout. 
</p>
<br/>
<h4>Partials</h4>
<p>Some html codes for the layout are separated to its own file in <code>bootstrap/partials</code>:</p>
<ul>
	<li>
		<code>head.blade.php</code>
	</li>
	<li>
		<code>nav.blade.php</code>
	</li>
	<li>
		<code>errors.blade.php</code>
	</li>
	<li>
		<code>footer.blade.php</code>
	</li>
	<li>
		<code>script.blade.php</code>
	</li>
</ul>
<br/>
<h4>Adding Custom Style/Script</h4>
<p>This template uses <code>public/assets/custom.css</code> and <code>public/assets/custom.js</code> to fetch its custom styling and script (by custom, I mean, whatever not covered by bootstrap or jquery). You can add your styling/script there, or, link your new css in <code>partials/head.blade.php</code> and your script in <code>partials/script.blade.php</code></p>
<br/>
<h4>Testing The Template</h4>
<p>
Set route to the template:
</p>
<pre>
Route::get('bootstrap/{playground?}',function($playground = 'readme'){

$validator = Validator::make(Request::all(), [
  'title' => 'required|unique:posts|max:255',
  'body' => 'required',
]);

// Uncomment below code to display template with no error banner
// return view('layouts.bootstrap.playground.'.$playground);

return view('layouts.bootstrap.playground.'.$playground)->withErrors($validator);

});
</pre>
@stop