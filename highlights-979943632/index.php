<!DOCTYPE HTML>
<?php
$cookie_name = "recent5";
if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value = [0,0,0,0,0];
    setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
}

?>
<html>
	<head>
		<title>Highlights by Rahul</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header class="major">
					<h1>Gaming Highlights!</h1>
					<p>Welcome to Highlights, where we do everything Battlefield!</a></p>
				</header>
				<div class="container">
					<ul class="actions">
						<li><a href="#one" class="button special scrolly">Begin</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/Battlefield 1.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Battlefield 1</h2>
						</header>
						<p>Battlefield 1 (also known as BF1) is the fifteenth installment in the Battlefield Series developed by DICE and published by EA. The game is set during World War I. It marks the first installment exclusive to eighth-generation consoles and was released world wide on October 21, 2016.</p>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/Controller.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Services</h2>
						</header>
                        <p>Here's what i do with and around the gaming community.</p>
						<ul class="icons-grid">
							<li>
								<span class="icon major fa-trophy"></span>
								<h3><a href="index copy.php" target="_blank">Achievements</a></h3>
							</li>
                            <li>
                                <span class="icon major fa-shopping-basket"></span>
                                <h3><a href="index copy 2.php" target="_blank">Merchandise</a></h3>
                            </li>
                            <li>
                                <span class="icon major fa-youtube"></span>
                                <h3><a href="index copy 3.php" target="_blank">Youtube Coverage</a></h3>
                            </li>
                            <li>
                                <span class="icon major fa-exchange"></span>
                                <h3><a href="index copy 4.php" target="_blank">Conventions</a></h3>
                            </li>
                            <li>
                                <span class="icon major fa-line-chart"></span>
                                <h3><a href="index copy 5.php" target="_blank">Stats for nerds</a></h3>
                            </li>
                            <li>
                                <span class="icon major fa-user-plus"></span>
                                <h3><a href="index copy 6.php" target="_blank">Platoon Manager</a></h3>
                            </li>
                            <li>
                                <span class="icon major fa-money"></span>
                                <h3><a href="index copy 7.php" target="_blank">Sponsorships</a></h3>
                            </li>
							<li>
								<span class="icon major fa-pencil"></span>
								<h3><a href="index copy 8.php" target="_blank">Recruiting</a></h3>
							</li>
							<li>
								<span class="icon major fa-code"></span>
								<h3><a href="index copy 9.php" target="_blank">Assisting in CTE</a></h3>
							</li>
							<li>
								<span class="icon major fa-facebook"></span>
								<h3><a href="index copy 10.php" target="_blank">Social Media Management</a></h3>
							</li>
							<li>
								<span class="icon major fa-shopping-basket"></span>
								<h3><a href="recent_services.php" target="_blank">Recently Visited Services</a></h3>
							</li>
							<li>
								<span class="icon major fa-shopping-basket"></span>
								<h3><a href="http://www.abc-consulting.tk/highlights-gaming/usersdisplay.php" target="_blank">All Network Users</a></h3>
							</li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/bf1.jpeg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>If this sounds interesting</h2>
						</header>
                        <p>I am a part of an active community that works with developers to assist them in community test environments to try out content still in development. This is a platform that has paved the way for newcomers to become full time streamers and Youtubers that are now the unofficial representatives of players across the world. If you'd like to be a part of the team, shooot me an email!</p>
					</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Four -->
		<!--
			<section id="four" class="main">
				<div class="container">
					<div class="content">
						<header class="major">
							<h2>Elements</h2>
						</header>
						<section>
							<h4>Text</h4>
							<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
							<hr />
							<header>
								<h4>Heading with a Subtitle</h4>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h5>Heading with a Subtitle</h5>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<hr />
							<h2>Heading Level 2</h2>
							<h3>Heading Level 3</h3>
							<h4>Heading Level 4</h4>
							<h5>Heading Level 5</h5>
							<h6>Heading Level 6</h6>
							<hr />
							<h5>Blockquote</h5>
							<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
							<h5>Preformatted</h5>
							<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
						</section>

						<section>
							<h4>Lists</h4>
							<div class="row">
								<div class="6u 12u$(medium)">
									<h5>Unordered</h5>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>
									<h5>Alternate</h5>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>
								</div>
								<div class="6u$ 12u(medium)">
									<h5>Ordered</h5>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h5>Icons</h5>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>
								</div>
							</div>
							<h5>Actions</h5>
							<ul class="actions">
								<li><a href="#" class="button special">Default</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions small">
								<li><a href="#" class="button special small">Small</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<div class="row">
								<div class="6u 12u$(small)">
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
								<div class="6u$ 12u$(small)">
									<ul class="actions vertical small">
										<li><a href="#" class="button special small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
								</div>
								<div class="6u 12u$(small)">
									<ul class="actions vertical">
										<li><a href="#" class="button special fit">Default</a></li>
										<li><a href="#" class="button fit">Default</a></li>
									</ul>
								</div>
								<div class="6u$ 12u$(small)">
									<ul class="actions vertical small">
										<li><a href="#" class="button special small fit">Small</a></li>
										<li><a href="#" class="button small fit">Small</a></li>
									</ul>
								</div>
							</div>
						</section>

						<section>
							<h4>Table</h4>
							<h5>Default</h5>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>

							<h5>Alternate</h5>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>

						<section>
							<h4>Buttons</h4>
							<ul class="actions">
								<li><a href="#" class="button special">Special</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button">Default</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="#" class="button special fit">Fit</a></li>
								<li><a href="#" class="button fit">Fit</a></li>
							</ul>
							<ul class="actions fit small">
								<li><a href="#" class="button special fit small">Fit + Small</a></li>
								<li><a href="#" class="button fit small">Fit + Small</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button special icon fa-download">Icon</a></li>
								<li><a href="#" class="button icon fa-download">Icon</a></li>
							</ul>
							<ul class="actions">
								<li><span class="button special disabled">Disabled</span></li>
								<li><span class="button disabled">Disabled</span></li>
							</ul>
						</section>

						<section>
							<h4>Form</h4>
							<form method="post" action="#">
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="demo-category" id="demo-category">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="demo-priority-low" name="demo-priority" checked>
										<label for="demo-priority-low">Low</label>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="demo-priority-normal" name="demo-priority">
										<label for="demo-priority-normal">Normal</label>
									</div>
									<div class="4u$ 12u$(small)">
										<input type="radio" id="demo-priority-high" name="demo-priority">
										<label for="demo-priority-high">High</label>
									</div>
									<div class="6u 12u$(small)">
										<input type="checkbox" id="demo-copy" name="demo-copy">
										<label for="demo-copy">Email me a copy</label>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="demo-human" name="demo-human" checked>
										<label for="demo-human">Not a robot</label>
									</div>
									<div class="12u$">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

						<section>
							<h4>Image</h4>
							<h5>Fit</h5>
							<div class="box alt">
								<div class="row uniform 50%">
									<div class="12u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								</div>
							</div>
							<h5>Left &amp; Right</h5>
							<p><span class="image left"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
							<p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						</section>

					</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
				</div>
			</section>
		-->

		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Get in touch</h2>
					</header>
					<form method="post" action="#">
						<div class="row uniform">
							<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
							<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
							<div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
							<div class="12u$">
								<ul class="actions">
									<li><input type="submit" value="Send Message" class="special" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li> <li> Design: <a href="https://www.facebook.com/rahul.tiwari.940">FeltThrone18</li> <li> <a href="https://www.facebook.com/navoday.tomar"> Team Manager: Navoday_91</li> <li> <a href="https://www.facebook.com/AAPkaArvind/"> Social Platform Manager: Arvind Kejriwal</li>
					</ul>
				</footer>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
