<h4>销售项目概览</h4>
<table id="seller-project" class="table display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>最终用户</th>
            <th>销售状态</th>
        </tr>
    </thead>
</table>

<script>
$(document).ready(function() {
    $('#seller-project').dataTable({
        sDom: "<'pull-right'l>rtip"
    });
});
</script>
