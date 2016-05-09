<div class="social-contact">
    <ul>
        <?php $tel= str_replace("(0)","",get_field("main_phone","option")); $tel= str_replace(" ","",$tel); ?>
        <li>
            <i class="icon-telephone">
            </i>
            <a href="tel: <?php echo $tel;?> ">
                <?php echo get_field("main_phone","option") ?>
            </a>
        </li>
        <li>
            <a href='<?php echo get_field("facebook","option"); ?>'>
                <i class="icon-facebook">
                </i>
            </a>
        </li>
        <li>
            <a href='<?php echo  get_field("instagram","option"); ?>'>
                <i class="icon-instagram">
                </i>
            </a>
        </li>
        <li>
            <a href='<?php echo  get_field("pinterest","option"); ?>'>
                <i class="icon-pinterest">
                </i>
            </a>
        </li>
    </ul>
</div>
