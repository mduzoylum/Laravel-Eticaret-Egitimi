<html>
<head>
    <title>Datatable Kullanımı</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
<table id="example" class="display" style="width:100%">
    <thead>
        <th>Id</th>
        <th>Email</th>
        <th>Tarih</th>
        <th>Düzenle</th>
        <th>Sil</th>

    </thead>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            lengthMenu:[[25,100,-1],[25,100,"All"]],
            processing:true,
            serverSide:true,
            ajax :{
                type : "POST",
                headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
                url:'{!! route('datatable.post') !!}',
            },
            columns:[
                {data:'id',name:"id",orderable:false,searchable:true},
                {data:'content',name:"content",searchable:true},
                {data:'created_at',name:"created_at",seacrhable:false},
                {data:'edit',name:"edit"},
                {data:'delete',name:"delete"}
            ]
        });
    });
</script>
</body>
</html>
