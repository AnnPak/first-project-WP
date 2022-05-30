<div class="blog-post">
    <img src="images/blog/blog-lg.jpg" alt="" class="img-fluid">
    <div class="mt-4 mb-3 d-flex">
        <div class="post-info">
            <i class="fa fa-calendar-check"></i>
            <span><?=the_time('j F Y')?></span>
        </div>
    </div>

    <a href="#" class="h4 "><?=the_title()?></a>

    <div class="content-wrapper">
        <?=the_content();?>
    </div>
   
    <div class="my-4">
        <h5 class="d-inline-block mr-3">Поделитесь:</h5>
        <ul class="list-inline d-inline-block">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>