using System;
using MySql.Data.MySqlClient;

namespace sis_boina
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int opcao;

            do
            {
                Console.Clear();
                Console.WriteLine("\t --O que você deseja fazer no sistema?-- \t");
                Console.WriteLine("1 - Cadastrar Produto");
                Console.WriteLine("2 - Cadastrar Funcionário");
                Console.WriteLine("3 - Cadastrar Fornecedor");
                Console.WriteLine("4 - Cadastrar Matéria-Prima");
                Console.WriteLine("5 - Visualizar Estoque");
                Console.WriteLine("6 - Visualizar Folha Salarial");
                Console.WriteLine("0 - Sair do Sistema");

                Console.Write("Escolha uma opção: ");
                while (!int.TryParse(Console.ReadLine(), out opcao))
                {
                    Console.WriteLine("Opção inválida. Digite um número de 0 a 6:");
                }

                switch (opcao)
                {
                    case 0:
                        Console.WriteLine("Saindo do sistema...");
                        break;

                    case 1:
                        {
                            Produto produto = new Produto();
                            produto.cadastroPro();
                            var conexao = new Conexao();
                            conexao.InserirProduto(produto);
                            break;
                        }

                    case 2:
                        {
                            Funcionario funcionario = new Funcionario();
                            funcionario.cadastroFunc();
                            Conexao conexao = new Conexao();
                            conexao.InserirFuncionario(funcionario);
                            break;
                        }

                    case 3:
                        {
                            Fornecedores fornecedor = new Fornecedores();
                            fornecedor.cadastrarForn();
                            Conexao conexao = new Conexao();
                            conexao.inserirFornecedor(fornecedor);
                            break;
                        }

                    case 4:
                        {
                            MateriaPrima materiaPrima = new MateriaPrima();
                            materiaPrima.cadastroMate();
                            Conexao conexao = new Conexao();
                            conexao.Estoque(materiaPrima);
                            break;
                        }

                    case 5:
                        {
                            Conexao conexao = new Conexao();
                            conexao.mostrandoEstoque();
                            break;
                        }

                    case 6:
                        {
                            Conexao conexao = new Conexao();
                            conexao.mostrandoFolhaSalarial();
                            break;
                        }

                    default:
                        Console.WriteLine("Opção inválida. Tente novamente.");
                        break;
                }

                if (opcao != 0)
                {
                    Console.WriteLine("\nPressione qualquer tecla para continuar...");
                    Console.ReadKey();
                }

            } while (opcao != 0);

            Console.WriteLine("Sistema finalizado.");
        }
    }
}
