<?php

function getBlock($content, $nbcontent)
{
    $goodblocks = "";
    $nb = 0;
    if (has_blocks($content)) {
        $blocks = parse_blocks($content);
        foreach ($blocks as $block) {
            if ($nb == $nbcontent) {
                $goodblocks = $block['innerHTML'];
            }
            $nb = $nb + 1;
        }
    }
    $nb =0;
    echo $goodblocks;
}

?> 