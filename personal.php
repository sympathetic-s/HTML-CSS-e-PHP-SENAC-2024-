<!DOCTYPE html>
<html lang="pt-BR"> 
    <head> 
        <meta charset="UFT-8">
        <title> Academia better life</title>
        <link rel="stylesheet" href="estilo.css">
        
        
    </head>

    <body>

        <h1 class="titulo">ACADEMIA <strong class="destaque">BETTER</strong> LIFE</h1>

        <div>
            <img src="qualidadedevida.png" alt="Pessoas em forma de cartoon exibindo um halter, uma maçã, um relógio e um estetoscópio">
        </div>
        
        <main>
        <section>

        <h2>Quem somos nós?</h2>
            <p class="paragrafos">A empresa é especializada em treinamentos de força para a terceirada idade.
         Somos um espaço com profissionais capacitados em exercícios para a terceira idade e com uma ampla estrutura de treinamento. </p>

      
        <h2> A importância do exercício físico</h2>
            <p>De acordo com o <a href="https://bvsms.saude.gov.br/bvs/publicacoes/guia_atividade_fisica_populacao_brasileira.pdf"> Guia de atividade física para a população brasileira</a> são diversos os benefícios
            que se têm ao realizar uma prática de exercícios físicos. Dentre eles podemos destacar um aumento na disposição, diminuição das dores,
            melhora da autoestima e autoimagem, controle de doenças crônicas não transmissíveis, diminuição da ansiedade e depressão e dentre outros.</p>


        <h2>Nosso diferencial</h2>
            <p>Em nosso espaço trabalhamos de forma totalmente individual, através de uma avaliação é elaborado um plano de treinamentos exclusivamente focado nas necessidades do aluno. Cada aluno possui suas particularidades, necessitando assim de cuidados específicos. 
            Nossa equipe leva todos esses pontos em consideração na hora da elaboração das aulas e durante as aulas. O acompanhamento presencial do profissional é imprescindível para um bom desenvolvimento do aluno.</p> 


        <h2>Índice de Massa Corpórea</h2>
            <p class="paragrafos3">O <a href="http://scielo.iec.gov.br/scielo.php?pid=S1679-49742012000200015&script=sci_arttext">Índice de Massa Corpórea</a> é reconhecido internacionalmente para avaliar o grau de sobrepso e obesidade da população. Apesar de não ser específico para a medição da composição corporal é amplamente utilizado em estudos epidemiológicos,
             tanto para o monitoramento do estado antropométrico quanto para o monitoramento do excesso de peso da população.  Abaixo nós temos uma campo para você obter a classficação do seu valor de IMC: 
            </p>
            
            <form class="form1" method="post">
            <input type="text" name="imc">
            <input type="submit" name="" value="Enviar">
            <input type="reset">
            </form>

            <?php
            $name1 = $_POST["imc"];
            $listaIMC = [
            ['max' => 18.5, 'msg' => 'Magreza'],
            ['min' => 18.51, 'max' => 24.9, 'msg' => 'Saudável'],
            ['min' => 25.0, 'max'=> 29.9, 'msg'=> 'Sobrepeso'],
            ['min' => 30.0, 'max'=> 34.9, 'msg'=> 'Obesidade Grau I'],
            ['min' => 35.0, 'max'=> 39.9, 'msg'=> 'Obesidade Grau II'],
            ['min' => 39.9, 'msg' => 'Obesidade Grau III'],
            ];
        
            for($i = 0; $i < count($listaIMC); $i++)
            if ($name1 >= $listaIMC[$i]['max']){
            $msg = $listaIMC[$i]['msg'];
            }
            elseif($name1 >= $listaIMC[$i]['min'] && $name1 <= $listaIMC[$i]['max']){
            $msg = $listaIMC[$i]['msg'];   
            break;
            }
            elseif($name1 <= $listaIMC[$i]['max']){
            $msg = $medida[$i]['$msg'];
            break;
            };
        
            echo "Atenção, seu IMC é $name1 e está classificado como $msg";
            ?>

            
            
        <h2>Dúvidas</h2>
           

        </section>

        <form action="nomedapagina.php" method="post"> 

            <label for="nome">Nome:</label>
            <input type="text" id="nome">
            <br>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email">
            <br>
            <br>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade">
            <br>
            <br>
            <label for="estado">Estado:</label>
            <select id="estado">

                <option>Escolha seu estado:</option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
                <option>DF</option>
            </select> 
            <br>
            <br>

            <label for="observacoes">Dúvidas:</label>
            <textarea id="observacoes"></textarea>>
            <br>   
            <br>
            <br>
            <input type="checkbox" id="promocoes"> <label for="promocoes">Deseja receber emails sobre futuras promoções?</label>
            <br>
            <br>
            <input type="submit" id="enviar" value="Confirmar">
            <input type="reset" id="limpar" value="Limpar">


                
        </form>

    
        </main>

        

        <footer class="footer">
            <p>Todos os direitos reservados</p>
            
        </footer>

        

            
    </body>
</html>