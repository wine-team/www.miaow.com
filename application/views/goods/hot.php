 <?php if($goods->num_rows()>0):?>
<?php foreach ($goods->result() as $val):?>
<a href="<?php echo site_url('goods/detail?goods_id='.$val->goods_id);?>" class="rx_a" target="_blank">
	<img src="<?php echo $this->config->show_image_thumb_url('mall',strstr($val->goods_img,'|',true))?>" width="160" height="160"/>
	<p><?php echo $val->goods_name;?></p>
	<p class="xj">¥<?php echo $val->promote_price;?></p>
</a>
<?php endforeach;?>
<?php endif;?>
