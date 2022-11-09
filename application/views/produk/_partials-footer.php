<style>
	.col_white_amrc {
		color: #FFF;
	}

	.footer1 {
		width: 100%;
		background-color: #263238;
		min-height: 250px;
		padding: 10px 0px 25px 0px;
	}

	.pt2 {
		padding-top: 40px;
		margin-bottom: 20px;
	}

	.footer1 p {
		font-size: 13px;
		color: #CCC;
		padding-bottom: 0px;
		margin-bottom: 8px;
	}

	.mb10 {
		padding-bottom: 15px;
	}

	.footer_ul_amrc {
		margin: 0px;
		list-style-type: none;
		font-size: 14px;
		padding: 0px 0px 10px 0px;
	}

	.footer_ul_amrc li {
		padding: 0px 0px 5px 0px;
	}

	.footer_ul_amrc li a {
		color: #CCC;
	}

	.footer_ul_amrc li a:hover {
		color: #fff;
		text-decoration: none;
	}

	.fleft {
		float: left;
	}

	.padding-right {
		padding-right: 10px;
	}

	.footer_ul2_amrc {
		margin: 0px;
		list-style-type: none;
		padding: 0px;
	}

	.footer_ul2_amrc li p {
		display: table;
	}

	.footer_ul2_amrc li a:hover {
		text-decoration: none;
	}

	.footer_ul2_amrc li i {
		margin-top: 5px;
	}

	.bottom_border {
		border-bottom: 1px solid #323f45;
		padding-bottom: 20px;
	}

	.foote_bottom_ul_amrc {
		list-style-type: none;
		padding: 0px;
		display: table;
		margin-top: 10px;
		margin-right: auto;
		margin-bottom: 10px;
		margin-left: auto;
	}

	.foote_bottom_ul_amrc li {
		display: inline;
	}

	.foote_bottom_ul_amrc li a {
		color: #999;
		margin: 0 12px;
	}

	.social_footer_ul {
		display: table;
		margin: 15px auto 0 auto;
		list-style-type: none;
	}

	.social_footer_ul li {
		padding-left: 20px;
		padding-top: 10px;
		float: left;
	}

	.social_footer_ul li a {
		color: #CCC;
		border: 1px solid #CCC;
		padding: 8px;
		border-radius: 50%;
	}

	.social_footer_ul li i {
		width: 20px;
		height: 20px;
		text-align: center;
	}
</style>
<div class="footer1 mt-5">
	<div class="container bottom_border">
		<div class="row">
			<div class=" col-sm-4 col-md col-sm-4  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
				<!--headin5_amrc-->
				<p class="mb10">Produk original dengan harga bersahabat. Frmt.co hadir dengan berbagai kemudahan untuk anda dalam yang berkeinginan tampil beda dan keren.</p>
				<p><i class="fa fa-location-arrow"></i> Trucuk, Bojonegoro </p>
				<p><i class="fa fa-phone"></i> +62 856 4532 2285 </p>
				<p><i class="fa fa fa-envelope"></i> frmtco@gmail.com </p>


			</div>


			<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<li><a href="<?= base_url('') ?>">Home</a></li>
					<li><a href="<?= base_url('about') ?>">About</a></li>
					<li><a href="<?= base_url('contact') ?>">Contact</a></li>
					<li><a href="<?= base_url('keranjang') ?>">Keranjang</a></li>
					<li><a href="<?= base_url('produk/checkout') ?>">Checkout</a></li>
				</ul>
				<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<li><a href="<?= base_url('auth/login') ?>">Login</a></li>
					<li><a href="<?= base_url('auth/register') ?>">Register</a></li>
				</ul>
				<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
				<!--headin5_amrc ends here-->

				<ul class="footer_ul2_amrc">
					<li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
						<p> Instagram Official <a href="https://www.instagram.com/frmt.co/">FRMT.CO</a></p>
					</li>
					<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
						<p> Twitter Account <a href="#">Frmtco</a></p>
					</li>
					<li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a>
						<p> Facebook Fanspage <a href="#">FRMTCO</a></p>
					</li>
				</ul>
				<!--footer_ul2_amrc ends here-->
			</div>
		</div>
	</div>
	<center>
		<div id="cekresicom_id"></div>
		<script type="text/javascript" src="https://cekresi.com/widget/widgetcekresicom_v1.js"></script>
		<script type="text/javascript">
			init_widget_cekresicom('w1', 380, 110)
		</script>
	</center>

	<div class="container">
		<!--foote_bottom_ul_amrc ends here-->
		<!--		<p class="text-center">Toko Millano made with love by<a href="https://www.instagram.com/rahmaap__/"> @rahmap__</a></a></p>-->

		<ul class="social_footer_ul" style="background-color: #d7f1f5; padding-bottom: 7px; padding-right: 22px; border-radius: 6px">
			<li><img src="<?= base_url('assets/images/bank/bca.png') ?>" width="70" height="25" alt=""></li>
			<li><img src="<?= base_url('assets/images/bank/bni.png') ?>" width="70" height="25" alt=""></li>
			<li><img src="<?= base_url('assets/images/bank/gopay.png') ?>" width="70" height="25" alt=""></li>
			<li><img src="<?= base_url('assets/images/bank/mandiri.png') ?>" width="70" height="25" alt=""></li>
			<li><img src="<?= base_url('assets/images/bank/permata.png') ?>" width="90" height="25" alt=""></li>
			<li><img src="<?= base_url('assets/images/bank/indomaret.png') ?>" width="70" height="25" alt=""></li>
			<li><img src="<?= base_url('assets/images/bank/alfamart.png') ?>" width="70" height="25" alt=""></li>
		</ul>
		<!--social_footer_ul ends here-->
	</div>

</div>