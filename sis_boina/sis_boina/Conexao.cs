using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data;
using MySql.Data.MySqlClient;

namespace sis_boina
{
    internal class Conexao
    {
        private string connectionString;

        public Conexao()
        {

            connectionString = "Server=localhost; Database=Pidatabase;User=root;Password='';";
        }


        public MySqlConnection GetConnection()
        {
            return new MySqlConnection(connectionString);
        }


        public void ExecuteNonQuery(string query, Dictionary<string, object> parameters)
        {
            using (var connection = GetConnection())
            {
                try
                {
                    connection.Open();
                    using (var command = new MySqlCommand(query, connection))
                    {

                        foreach (var param in parameters)
                        {
                            command.Parameters.AddWithValue(param.Key, param.Value);
                        }


                        var rowsAffected = command.ExecuteNonQuery();
                        Console.WriteLine($"Query executada com sucesso! Linhas afetadas: {rowsAffected}");
                    }
                }
                catch (Exception ex)
                {
                    Console.WriteLine($"Erro ao executar query: {ex.Message}");
                }
            }
        }
        public void InserirProduto(Produto produto)
        {
            string query = @"
            INSERT INTO produtos (nomeProd, valorProd, tipoProd, pesoProd, horarioProd, datadeProd, validadeProd)
            VALUES (@nomeProd, @valorProd, @tipoProd, @pesoProd, @horarioProd, @datadeProd, @validadeProd)";


            var parametros = new Dictionary<string, object>
        {
            {"@nomeProd", produto.NomeProd},
            {"@valorProd", produto.ValorProd},
            {"@tipoProd", produto.TipoProd},
            {"@pesoProd", produto.PesoProd},
            {"@horarioProd", produto.HorarioProd},
            {"@datadeProd", produto.DatadeProd},
            {"@validadeProd", produto.ValidadeProd}
        };


            ExecuteNonQuery(query, parametros);
        }

        public void Estoque(MateriaPrima materiaPrima)
        {
            string query = @"
    INSERT INTO MateriaPrima (nomeMate, quantMate, dataMater, valiMater, idForn)
    VALUES (@nomeMate, @quantMate, @dataMater, @valiMater, @idForn)";

            var parametros = new Dictionary<string, object>
{
    {"@nomeMate", materiaPrima.nomeMate},
    {"@quantMate", materiaPrima.quantMate},
    {"@dataMater", materiaPrima.dataMater},
    {"@valiMater", materiaPrima.valiMater},
    {"@idForn", materiaPrima.idForn}
};

            ExecuteNonQuery(query, parametros);
        }

        public void inserirFornecedor(Fornecedores fornecedor)
        {
            string query = @"
    INSERT INTO fornecedores (nomeForn, emailForn, cepForn, logradouro)
    VALUES (@nomeForn, @emailForn, @cepForn, @logradouro)";

            var parametros = new Dictionary<string, object>
{
    {"@nomeForn", fornecedor.nomeForn},
    {"@emailForn", fornecedor.emailForn},
    {"@cepForn", fornecedor.cepForn},
    {"@logradouro", fornecedor.logradouro}
};

            ExecuteNonQuery(query, parametros);
        }

        public void InserirFuncionario(Funcionario funcionario)
        {
            string query = @"
    INSERT INTO Funcionario
    (nomeFunci, senhaFunci, emailFunci, cpfFunci, telefoneFunci, setorFunci, salarioFunci, cargo)
    VALUES 
    (@nomeFunci, @senhaFunci, @emailFunci, @cpfFunci, @telefoneFunci, @setorFunci, @salarioFunci, @cargo)";

            var parametros = new Dictionary<string, object>
{
    { "@nomeFunci", funcionario.NomeFunci },
    { "@senhaFunci", funcionario.SenhaFunci },
    { "@emailFunci", funcionario.EmailFunci },
    { "@cpfFunci", funcionario.CpfFunci },
    { "@telefoneFunci", funcionario.TelefoneFunci },
    { "@setorFunci", funcionario.SetorFunci },
    { "@salarioFunci", funcionario.SalarioFunci },
    { "@cargo", funcionario.Cargo }
};

            ExecuteNonQuery(query, parametros);
        }


        public void mostrandoFolhaSalarial()
        {
            string query = "select nomeFunci, setorFunci, cargo, salarioFunci from Funcionario";

            using (var connection = GetConnection())
            {
                try
                {
                    connection.Open();
                    using (var command = new MySqlCommand(query, connection))
                    {
                        using (var reader = command.ExecuteReader())
                        {
                            Console.WriteLine("Folha Salarial:");
                            Console.WriteLine(new string('-', 50));

                            while (reader.Read())
                            {
                                string nome = reader["nomeFunci"].ToString();
                                string setor = reader["setorFunci"].ToString();
                                string cargo = reader["cargo"].ToString();
                                decimal salario = Convert.ToDecimal(reader["salarioFunci"]);

                                Console.WriteLine($"Nome: {nome}");
                                Console.WriteLine($"Setor: {setor}");
                                Console.WriteLine($"Cargo: {cargo}");
                                Console.WriteLine($"Salário: R${salario:F2}");
                                Console.WriteLine(new string('-', 50));
                            }
                        }
                    }
                }
                catch (Exception ex)
                {
                    Console.WriteLine($"Erro ao buscar folha salarial: {ex.Message}");
                }
          
            
            
            
            
            
            }
        }

        public void mostrandoEstoque()
        {
            string query = "select idmateria,nomeMate, quantMate from MateriaPrima";

            using (var connection = GetConnection())
            {
                try
                {
                    connection.Open();
                    using (var command = new MySqlCommand(query, connection))
                    {
                        using (var reader = command.ExecuteReader())
                        {
                            Console.WriteLine("ESTOQUE:");
                            Console.WriteLine(new string('-', 50));

                            while (reader.Read())
                            {
                                string nome = reader["nomeMate"].ToString();
                                int idmateria = int.Parse(reader["idmateria"].ToString());
                                int quantMate = int.Parse(reader["quantMate"].ToString());


                                Console.WriteLine($"ID: {idmateria}");
                                Console.WriteLine($"Nome: {nome}");
                                Console.WriteLine($"Quantidade em estoque: {quantMate}");
                                Console.WriteLine(new string('-', 50));
                            }
                        }
                    }
                }
                catch (Exception ex)
                {
                    Console.WriteLine($"Erro ao buscar folha salarial: {ex.Message}");
                }
            }
        }

    }
}
