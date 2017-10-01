<h4>负责项目概览</h4>
<table id="manager-project" class="table display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>最终用户</th>
            <th>项目阶段</th>
        </tr>
    </thead>
</table>

<script>
$(document).ready(function() {
    $('#manager-project').dataTable({
        sDom: "<'pull-right'l>rtip"
    });
});
</script>
