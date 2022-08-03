@extends('layouts.core')

@section('sidebar_width', 'col-md-4')
@section("title", "Crypto - corbin.world")


@section('content')

<div class="col-md-8" style="padding-left: 0px;">
    <section id="later" style="margin-top: 25px;">

		<article>
			<hr>
			<h2 style="margin-bottom: 0px;"><i class="fa fa-link"></i> Crypto Currencies</h2>
			<p class="title" style="font-size: 0.7em">Live Market Data of top Crypto-Currencies.</p>
			<hr class="end">
		</article>


		<article>

	<meta name="description" content="Live Cryptocurrency Prices">
	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link rel="dns-prefetch" href="https://coincap.io">
	<link rel="dns-prefetch" href="https://static.coincap.io">
	<link rel="dns-prefetch" href="https://api.coincap.io">
	<link rel="dns-prefetch" href="https://ws.coincap.io">
	<link rel="dns-prefetch" href="https://graphql.coincap.io">
	<link rel="stylesheet" href="style.min.css">
	<script src="https://weboas.is/crypto/x4-crypto-tables.min.js" data-entry="x4-crypto-tables" async></script>

	<div id="main-widget"></div><script>window.X4CryptoTables=window.X4CryptoTables||[];window.X4CryptoTables.push({"type":"coinTable","selector":"#main-widget","subtheme":"outlined","margins":{"top":48,"bottom":0},"controls":{"coinTable":{"actions":{"buy":{"visible":false},"sell":{"visible":false},"website":{"visible":true},"explorer":{"visible":true}},"background":{"table":false},"grid":{"border":true}}},"values":{"perPage":100}});</script>

		</article>
    </section>

	<section>
	    <article>
	        <h1 style="color: #1482A7">CodeBuilder Inc.</h1>
	        <ol id="articles">
	        <li><a href="https://codebuilder.us"><img src="https://codebuilder.us/images/mandala4_75.png" style="max-height: 50px; max-width: 50px;"><br><b>CodeBuilder. Inc.</b> - Software Engineering Solutions.</a></li>
	        </ol>
	    </article>
	</section>

</div> <!-- end col-md-8 -->


@endsection