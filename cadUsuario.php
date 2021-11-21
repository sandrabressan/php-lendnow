<!DOCTYPE html>
<html>
    <head>
        <title>LendNow-Cadastro Usuario</title>
        <link href="estilo.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container-ficha-cadastro">
            <div class="banner">
                <h1 class="banner">LendNow</h1>
                <h2 class="banner">Empréstimos de forma rápida e segura</h2>
              </div>
        <div class="ficha-cadastro">
        <h2 class="ficha-cadastro">Ficha Cadastral</h2>

            <form action="Itens.php" method="post" name="cadastrousuario">
                <table>
                    <tr>
                        <th class="ficha-cadastro">Nome</th>
                        <th class="ficha-cadastro">Sobrenome</th>
                        <th class="ficha-cadastro">CPF</th>
                        <th class="ficha-cadastro">RG</th>
                        <th class="ficha-cadastro">Órgão Emissor</th>
                        <th class="ficha-cadastro">Data de Emissão</th>
                    </tr>
                    <tr>
                        <td><input class="ficha-cadastro" type="text" name="nomeusuario" placeholder="Digite o nome"></td>
                        <td><input class="ficha-cadastro" type="text" name="sobrenome" placeholder="Digite o sobrenome"></td>
                        <td><input class="ficha-cadastro" type="text" name="CPF" placeholder="000.000.000-00"></td>
                        <td><input class="ficha-cadastro" type="text" name="RG" placeholder="Digite o RG"></td>
                        <td><input class="ficha-cadastro" type="text" name="orgaoemissor" placeholder="SSP/UF"></td>
                        <td><input class="ficha-cadastro" type="date" name="dataemissao" placeholder="Digite o Órgão Emissor"></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <th class="ficha-cadastro">Data de Nascimento</th>
                        <th class="ficha-cadastro">Sexo</th>
                        <th class="ficha-cadastro">Telefone Residencial</th>
                        <th class="ficha-cadastro">Telefone Celular</th>
                        <th class="ficha-cadastro">E-mail</th>
                        <th class="ficha-cadastro">Logradouro</th>

                    </tr>
                    <tr>
                        <td><input class="ficha-cadastro"  type="date" name="datanascimento"></td>
                        <td>
                            <select class="ficha-cadastro" name="sexo">
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </td>
                        <td><input class="ficha-cadastro" type="tel" name="telefoneresidencial" placeholder="(xx) xxxx-xxxx"></td>
                        <td><input class="ficha-cadastro" type="tel" name="telefonecelular" placeholder="(xx) 9xxxx-xxxx"></td>
                        <td><input class="ficha-cadastro" type="email" name="email" placeholder="aaa_bb@gmail.com"></td>
                        <td><input class="ficha-cadastro" type="text" name="logradouro" placeholder="Rua/Avenida/Rodovia"></td>

                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <th class="ficha-cadastro">Número</th>
                        <th class="ficha-cadastro">Complemento</th>
                        <th class="ficha-cadastro">Bairro</th>
                        <th class="ficha-cadastro">Cidade</th>
                        <th class="ficha-cadastro">Estado</th>
                        <th class="ficha-cadastro">CEP</th>
                    </tr>
                    <tr>
                        <td><input class="ficha-cadastro" type="text" name="numero" placeholder="Digite o número"></td>
                        <td><input class="ficha-cadastro" type="text" name="Complemento" placeholder="Bloco/Apartamento/Casa"></td>
                        <td><input class="ficha-cadastro" type="text" name="bairro" placeholder="Digite o bairro"></td>
                        <td><input class="ficha-cadastro" type="text" name="cidade" placeholder="Digite a cidade"></td>
                        <td><input class="ficha-cadastro" type="text" name="estado" placeholder="Digite o estado"></td>
                        <td><input class="ficha-cadastro" type="text" name="CEP" placeholder="00.000-000"></td>
                    </tr>
                    <tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                        <td><input class="ficha-cadastro" type="submit" value="Cadastrar"></td>
                        <td><input class="ficha-cadastro"  type="submit" value="Atualizar Cadastro"></td>
                    </tr>
                </table>
            </form><br />
            <a href="Itens.php" class="ficha-cadastro">Voltar</a>
        </div>
    </div>
    <footer>
        <p>Todos os direitos reservados</p>
    </footer>
    </body>
</html>