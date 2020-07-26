			<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
			<?php include "marquee.php" ?>
				<div style="height:32px; display:block;"></div>
				<!--正中央-->
				<h3>更多最新消息顯示區</h3>
				<hr>
				<?php
				$table="news";
				$db = new DB($table);

                $total = $db->count();
                $div = 5;
                $now = $_GET['p'] ?? "1";
                $pages = ceil($total / $div);
                $prev = (($now - 1) > 0) ? ($now - 1) : 1;
                $next = (($now + 1) <= $pages) ? ($now + 1) : $pages;
                $start = ($now - 1) * $div;

                $rows = $db->all([], " LIMIT $start,$div ");
                foreach ($rows as $row) {
?>
<div class="sswww"><?=($start+1)?>. <?=mb_substr($row['text'],0,20);?>
<div class="all" style="display:none"> <?=$row['text'];?></div>
</div>
<?php
$start++;
				}
?>
				<div style="text-align:center;">
					<?php
        echo "<a href='?do=" . $table . "&p=" . $prev . "'> < </a>";
        for ($i = 1; $i <= $pages; $i++) {
            $fontsize = ($now == $i) ? "30px" : "20px";
            echo "<a href='?do=" . $table . "&p=" . $i . "' style='font-size:" . $fontsize . "'>" . $i . "</a>";
        }
        echo "<a href='?do=" . $table . "&p=" . $next . "'> > </a>";
        ?>
				</div>
			</div>
			<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
			<script>
				$(".sswww").hover(
					function() {
						$("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>").css({
							"top": $(this).offset().top - 50
						})
						$("#alt").show()
					}
				)
				$(".sswww").mouseout(
					function() {
						$("#alt").hide()
					}
				)
			</script>
			