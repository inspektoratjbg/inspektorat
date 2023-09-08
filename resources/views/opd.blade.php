<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" crossorigin="anonymous">
  
  
    <title>OPD</title>
</head>
<body>
    <div class="container">
        <table class="table table-bordered table-hover" id="tbl_log">
            <thead class="bg-dark text-center">
                <tr>
                    <th class="border-dark text-white">No</th>
                    <th class="border-dark text-white"> Nama OPD</th>
                    <th class="border-dark text-white">created_at</th>
                    <th class="border-dark text-white">updated_at</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        {{-- <ul id="items">
           
        </ul> --}}
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            let tbl_log;

            getDatatableLog();

            function getDatatableLog(){
                tbl_log = $('#tbl_log').DataTable({
                    scrollX: false,
                    processing: true,
                    ordering: true,
                    serverSide: false,
                    "ajax": {
                        "url": "https://inspektorat.jombangkab.go.id/opd_api",
                        "type": "get"                     
                    },
                    order: [[0, 'desc']],
                    columns: [
                        {
                            data: 'id',
                            name: 'id',
                            className: 'text-center',
                            width: '5%',
                            searchhable: false,
                            orderable: false,
                        },
                        {
                            data: 'nama_instansi',
                            name: 'nama_instansi'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        }
                    ],
                        fnCreatedRow: function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    }
                });
            }
        });
    </script>
</body>
</html>