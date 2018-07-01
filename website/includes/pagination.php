<?php

//echo 'test page';
echo '
<ul class="pagination">
								<li><a href="?page=1"><<</a></li>';

for($i=0; $i<$count_page; $i += 1)
{
	if($i != $page_num)
	{
		echo '
		<li><a href="?page=' . strval($i + 1) . '">' . strval($i + 1) . '</a></li>
	';
	}
	else
	{
		echo '
		<li class="active"><a href="">' . strval($i + 1) . '<span class="sr-only">(current)</span></a></li>
		';
	}
	
}

echo '
								<li><a href="?page=' . strval($count_page) . '">>></a></li>
							</ul>
';

?>