<div id="pagination" style=" color:#ccc;">
<?php
///////////// pagination begins////////////////
$adjacents = 3;
$pagination='';
    if($totalposts > 1)
    {
        $pagination .= "<center><div>";
        //previous button
        if ($p > 1)
        $pagination.= "<a href=\"?page=$paged&pg=$prev\"><< Previous</a> ";
        else
        $pagination.= "<span class=\"disabled\"><< Previous</span> ";
        if ($totalposts < 7 + ($adjacents * 2)){
            for ($counter = 1; $counter <= $totalposts; $counter++){
                if ($counter == $p)
                $pagination.= "<span class=\"current\">$counter</span>";
                else
                $pagination.= " <a href=\"?page=$paged&pg=$counter\">$counter</a> ";}
        }elseif($totalposts > 5 + ($adjacents * 2)){
            if($p < 1 + ($adjacents * 2)){
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
                    if ($counter == $p)
                    $pagination.= " <span class=\"current\">$counter</span> ";
                    else
                    $pagination.= " <a href=\"?page=$paged&pg=$counter\">$counter</a> ";
                }
                $pagination.= " ... ";
                $pagination.= " <a href=\"?page=$paged&pg=$lpm1\">$lpm1</a> ";
                $pagination.= " <a href=\"?page=$paged&pg=$totalposts\">$totalposts</a> ";
            }
            //in middle; hide some front and some back
            elseif($totalposts - ($adjacents * 2) > $p && $p > ($adjacents * 2)){
                $pagination.= " <a href=\"?page=$paged&pg=1\">1</a> ";
                $pagination.= " <a href=\"?page=$paged&pg=2\">2</a> ";
                $pagination.= " ... ";
                for ($counter = $p - $adjacents; $counter <= $p + $adjacents; $counter++){
                    if ($counter == $p)
                    $pagination.= " <span class=\"current\">$counter</span> ";
                    else
                    $pagination.= " <a href=\"?page=$paged&pg=$counter\">$counter</a> ";
                }
                $pagination.= " ... ";
                $pagination.= " <a href=\"?page=$paged&pg=$lpm1\">$lpm1</a> ";
                $pagination.= " <a href=\"?page=$paged&pg=$totalposts\">$totalposts</a> ";
            }else{
                $pagination.= " <a href=\"?page=$paged&pg=1\">1</a> ";
                $pagination.= " <a href=\"?page=$paged&pg=2\">2</a> ";
                $pagination.= " ... ";
                for ($counter = $totalposts - (2 + ($adjacents * 2)); $counter <= $totalposts; $counter++){
                    if ($counter == $p)
                    $pagination.= " <span class=\"current\">$counter</span> ";
                    else
                    $pagination.= " <a href=\"?page=$paged&pg=$counter\">$counter</a> ";
                }
            }
        }
        if ($p < $counter - 1)
        $pagination.= " <a href=\"?page=$paged&pg=$next\">Next >></a>";
        else
        $pagination.= " <span class=\"disabled\">Next >></span>";
        $pagination.= "</center>\n";
    }
    echo  $pagination;

///////////// pagination ends////////////////
?>
</div>