<?php

function arrowDown($link) {

	echo "

	<div class='arrow-down-section'>
		<span onclick='window.scrollToSection(\"$link\")'>
			<img src='/wp-content/uploads/2020/02/arrow-down.png'>
		</span>
	</div>
	
	";

}