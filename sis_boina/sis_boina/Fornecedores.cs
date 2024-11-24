using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace sis_boina
{
    internal class Fornecedores
    {
        public string nomeForn { get; set; }
        public string emailForn { get; set; }
        public string cepForn { get; set; }
        public string logradouro { get; set; }
        public void cadastrarForn()
        {
            Console.WriteLine("Digite o nome do fornecedor: ");
            nomeForn = Console.ReadLine();

            Console.WriteLine("Digite o email do fornecedor: ");
            emailForn = Console.ReadLine();

            Console.WriteLine("Digite o CEP do fornecedor: ");
            cepForn = Console.ReadLine();

            Console.WriteLine("Digite o logradouro do fornecedor: ");
            logradouro = Console.ReadLine();

        }
    }
}
