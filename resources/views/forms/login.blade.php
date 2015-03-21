@extends('app')

@section('page-title')
        <h1> מחשבון לחישוב תקן</h1>
        <h2> ע"פ מפתח עבודה מומלץ בחוז"ר מנכ"ל משרד החינוך</h2>
        <h3>מתווה השירות הפסיכולוגי חינוכי" תש"ע 8/א 1212" </h3>
@stop

@section('content')

    <div class="container">
        <header class="main-header">
            <nav class="horizontal">

            </nav>
        </header>
        <article class="main-content">


                <div class="container2">
	<section id="content">
		<form action="">
			<h1>הזדהות לחיבור למערכת</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="submit" value="התחבר" />


			</div>
		</form><!-- form -->
		<div class="button">

		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->




@stop
