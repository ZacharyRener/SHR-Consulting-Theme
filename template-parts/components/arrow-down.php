<?php

function arrowDown($link) {

	echo "
	
	
	
	<div class='arrow-down-section'>
		<span onclick='window.scrollToSection(\"$link\")'>
			<i class='fa fa-angle-down'></i>
		</span>
	</div>
	
	";

}