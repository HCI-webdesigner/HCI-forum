			<div id="send-debate">
				<form action="/HCI-forum/Controller/saveDebate.php" id="debateForm" method="post">
					<label for="content">发表：</label>
					<textarea name="content" id="content-form" cols="30" rows="10"></textarea><br />
					<input type="hidden" name="postId" value="<?php echo $postId;?>">
					<input type="submit" name="sub" id="submit-button"/>
					<input type="reset" />
				</form>
			</div>
			<div id="control-panel">+</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>