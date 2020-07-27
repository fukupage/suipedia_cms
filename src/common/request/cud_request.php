<script type="text/javascript">
$(function(){
    /* 二重リクエスト防止 */
    var flag = false;
    $('#send').click(function(){
        if(flag){
            return ;
        }
        flag = true;
        var fd = new FormData();
        <?php
          ini_set('display_errors', 1);
        foreach(getColumnList($table_name) as $c){
            if(!isAdminDateItem($c['Field'])){
                if(strstr($c['Field'] ,"_flg")){
                    p('fd.append("'.$c["Field"].'",$("input[name=\''.$c["Field"].'\']:checked").val());');
                }else{
                    p('fd.append("'.$c["Field"].'",$("#'.$c["Field"].'").val());');
                }
            }
        }
        p('fd.append("table_name", "'.$table_name.'");');
        ?>

        $.ajax({
            type: "POST",
            url: <?php p('"'.$file.'"'); ?>,
            dataType: "text",
            data: fd,
            processData: false,
            contentType: false,
            success: function(data, dataType){
                alert(data);
                <?php p('location.href = "/note/suipedia_cms/admin/'.$entity_name.'/list/";');  ?>
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert("error");
            }
        });
        flag = false;
        return false;
    });
});
</script>
