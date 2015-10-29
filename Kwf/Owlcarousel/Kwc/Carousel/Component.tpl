<div class="<?=$this->rootElementClass;?>">
    <input type="hidden" value="<?=htmlspecialchars(json_encode($this->config))?>" />
    <div class="<? if(count($this->listItems) > 1) { ?>listWrapper owl-carousel<? } else { ?>imageWrapper<? } ?>">
        <? foreach ($this->listItems as $child) { ?>
        <div class="<?=$child['class'];?>" style="<?=$child['style'];?>">
            <?=$this->component($child['data']);?>
        </div>
        <? } ?>
    </div>
</div>
