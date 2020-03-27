<?php

$pageContent = '
<h1>Page Not Found</h1>
<img class="image-404" src="/wp-content/uploads/2020/03/magicrabbit.jpg">
<h2>
    We may be wizards of IT. 
    But even we can’t summon what you seek.
</h2>
Why not give this little trick a try?
<form action="/" method="get">
    <input class="form-control searchForm" name="s" type="text" placeholder="Search" aria-label="Search">
</form>
';

echo "

<div class='col-md-8 main-content'>

    <div class='container'>

        $pageContent
    
    </div>

</div>

";

?>