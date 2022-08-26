<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Documento</title>
	<script src="https://www.paypal.com/sdk/js?client-id=AT5OEeOlcxAuAxi0tv_rqM1S1UIdY2ppx0prUZjIBcvJvHAOuqQ8ppk9u7UM_dZrzhfZfEySdiP6HZU8&currency=MXN"></script>
</head>
<body>

<div id="paypal-button-conteiner"></div>

<script>
	paypal.Buttons({
		style: {
          shape: 'rect',
          color: 'silver',
          layout: 'horizontal',
          label: 'buynow',
          tagline: true
        },

		createOrder: function(data,actions){
			return actions.order.create({
				purchase_units: [{
					amount: {
						value: 1000
					}
				}]
			});
		},

		onApprove: function(data,actions){
			actions.order.capture().then(function (detalles){
				window.location.href="completo.php"
			});
		},

		onCancel: function(data){
			alert("Pago cancelado");
			console.log(data);
		}
	}).render('#paypal-button-conteiner');
</script>

</body>
</html>