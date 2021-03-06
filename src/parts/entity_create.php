<section>
	<h2><?php if($page){p($page["contents_name"]);} ?></h2>
	<?php
	  ini_set('display_errors', 1);
		$entity_name = getEntityName($page);
		$table_name = 'org_'.$entity_name;

		foreach(getColumnList($table_name) as $c){
			if(strstr($c['Type'] ,"int")){
				output_form_item($c,"number");
			}else if(strstr($c['Type'] ,"varchar")){
				if(strstr($c['Field'] ,"_flg")){
                    output_form_item($c,"checkbox");
				}else{
					output_form_item($c,"text");
				}
			}else if(strstr($c['Type'] ,"datetime")){
				if(!isAdminDateItem($c['Field'])){
					output_form_item($c,"datetime");
				}
			}
		}
	?>
	<center>
		<button type="button" class="btn btn-primary" id="send">送信</button>
	</center>

</section>

<?php //ainclude_once(getRoot().$local_root."/src/parts/table_information.php"); ?>

<?php
	/* 入力パーツ出力 */
	function output_form_item($item ,$type){
		p('<div class="form-group">');
		$defalut = $item["Default"] <> NULL ? ' (初期値：'.$item["Default"].')' : "";
		p('<label>'.$item["Comment"].$defalut.'</label>');
		if($type == "checkbox"){$value='value = 1';}else{$value='';}
		p('<input type="'.$type.'" class="form-control" placeholder="'.$item["Field"].'" id="'.$item["Field"].'" name="'.$item["Field"].'" '.$value.'>');
		p('</div>');
	}
?>
<?php $file = "$local_root./src/common/server/server_insert_logic.php"; ?>
<?php print $file; ?>
<?php include_once(getRoot().$local_root."/src/common/request/cud_request.php"); ?>
