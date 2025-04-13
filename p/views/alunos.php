<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="alunos.js"></script>
    <script>
        function handleResult(Result){
Result.json().then(function(jsonresp){

    let aluno = new Aluno(jsonresp.nome,jsonresp.idade);
})
        }
        fetch("/main.php").then(handleResult)
        </script>
</head>
<body>
    <h1>Gerenciar Alunos</h1>
</body>
</html>

