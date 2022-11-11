<?php
echo"
	<head>
		<title>PullRequest</title>
	</head>
	<body>
		<h2>GitHub y pull request</h2>
	</body>
	<script>
    function formatearNombre(){
        var inputFormulario = document.getElementById("nombre");
        var nombre = inputFormulario.value;
        var resultado = nombre.toLowerCase();
        inputFormulario.value = resultado;
        return;
    }
    function esMayor(){
        var edad = document.getElementById("edad").value;
        if(edad < 18){
            return false;
        }
        return true;
    }
	</script>
";
?>