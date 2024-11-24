using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace sis_boina
{
    internal class Funcionario
    {
        public string NomeFunci { get; set; }
        public string SenhaFunci { get; set; }
        public string EmailFunci { get; set; }
        public string CpfFunci { get; set; }
        public string TelefoneFunci { get; set; }
        public string SetorFunci { get; set; }
        public decimal SalarioFunci { get; set; }
        public string Cargo { get; set; }

        public void cadastroFunc()
        {
            Console.WriteLine("Digite o nome do funcionário: ");
            NomeFunci = Console.ReadLine();

            Console.WriteLine("Digite a senha do funcionário: ");
            SenhaFunci = Console.ReadLine();

            Console.WriteLine("Digite o email do funcionário: ");
            EmailFunci = Console.ReadLine();

            Console.WriteLine("Digite o CPF do funcionário: ");
            CpfFunci = Console.ReadLine();

            Console.WriteLine("Digite o telefone do funcionário: ");
            TelefoneFunci = Console.ReadLine();

            Console.WriteLine("Digite o setor do funcionário: ");
            SetorFunci = Console.ReadLine();

            Console.WriteLine("Digite o salário do funcionário: ");
            SalarioFunci = decimal.Parse(Console.ReadLine());

            Console.WriteLine("Digite o cargo do funcionário: ");
            Cargo = Console.ReadLine();


        }
    }
}
