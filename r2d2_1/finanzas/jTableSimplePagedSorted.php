<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	

<link href="themes/lightcolor/gray/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body>
	<div id="PeopleTableContainer" style="width: 600px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Tabla de Ingresos',
				paging: true,
				pageSize: 10,
				sorting: true,
				defaultSorting: 'fecha DESC',
				actions: {
					listAction: 'PersonActionsPagedSorted.php?action=list',
					createAction: 'PersonActionsPagedSorted.php?action=create',
					updateAction: 'PersonActionsPagedSorted.php?action=update',
					deleteAction: 'PersonActionsPagedSorted.php?action=delete'
				},
				fields: {
					id: {
						title: 'id',
						key: true,
						create: false,
						edit: false,
						list: true
					},
					descripcion: {
						title: 'descripcion',
						width: '40%'
					},
					saldo: {
						title: 'saldo',
						width: '20%'
					},
					fecha: {
						title: 'fecha',
						width: '30%',
						type: 'date',
						create: false,
						edit: false
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
 
  </body>
</html>
