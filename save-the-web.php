<?php include '/modules/header.php'; ?>
<?php include '/modules/navigation.php'; ?>
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="label label-success navbar-right"><b>0</b> saved web pages!</span>
					<h3 class="panel-title">
						Save The Web!
					</h3>
				</div>
				<div class="panel-body">
					<p>
						Websites get created and removed all the day, and hundreds of thousands of websites get removed each year. When a website is gone, you can't access it anymore, and the information is gone. This is where The Internet Archive steps in. The Internet Archive is a free website archiver that takes a snapshot of every website sent in. This is how you can see how <a href="http://web.archive.org/web/20010612124356/http://microsoft.com">microsoft.com looked like in june 12 2001</a>:
					</p>
					<img src="https://images.fawdaw.com/image.php?di=F5EKY" width="50%">
					<br><br>
					<p>
						To help saving the Internet, i built a little bot that goes trough some websites from a list that is updated weekly, and saves them to The Internet Archive. 
						Because the list is quite small, i only save 2 web pages every 90 seconds, but this will change as soon as it is needed. 
						I will set up a submit form where anyone can add websites to the bot query to have their sites saved automatically in the short future.
					</p>
					<!--
					<p>
						If you wish to help me saving websites, you can <a href="/save/autosave.php?source=browser">run my simple save-script in your browser</a>. It run automatically, and saves one web page after another.
					</p>
					-->
					<br>
					<p>
						So far, i have saved <b>0</b> web pages to The Internet Archive since 19th of July 2018.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<?php include '/modules/sidebar.php'; ?>
		</div>
	</div>
	<br>
	<?php include '/modules/footer.php'; ?>
</div>