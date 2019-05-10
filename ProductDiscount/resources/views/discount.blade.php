<html>
<head>
	<title>Product Discount Calculator</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/01EE5D29-74DE-B246-A4A0-155B6EC10625/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/83EBACC0-573F-314B-944B-CD416C68A693/abn/main.css"/></head>
<body>
<div id="content">
	<h1>Product Discount Calculator</h1>
	<label>Product Description: </label>
	<span>{{ $ProductDescription }}</span><br/>
	<label>Price: </label>
	<span>${{ $ListPrice }}</span><br/>
	<label>Discount Percent: </label>
	<span>{{ $DiscountPercent }}%</span><br/>
	<label>Discount Amount: </label>
	<span>${{ $DiscountAmount }}</span><br/>
	<label>Discount Price: </label>
	<span>${{ $DiscountPrice}}</span><br/>
</div>
</body>
</html>
