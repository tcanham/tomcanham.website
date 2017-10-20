<div class="main-content"> 
    <div class="news">
        <h2><?= esc($data['heading']); ?></h2> 
        <?php foreach($data['news'] as $news_item):?>
       <article class="news-item">
           <h4><?php  echo esc($news_item['title']);?></h4>
            <div class="news-txt"> 
                <?php  echo esc($news_item['news']);?><br><br>
            </div>  
        </article>  
        <?php endforeach;?>
    </div>
</div><!-- End of Main-content-->        
    