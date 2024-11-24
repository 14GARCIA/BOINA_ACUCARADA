using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace sis_boina
{
    internal class MateriaPrima
    {
        public string nomeMate { get; set; }
        public int quantMate { get; set; }
        public DateTime dataMater { get; set; }
        public DateTime valiMater { get; set; }
        public int idForn { get; set; }

        public void cadastroMate()
        {
        Console.WriteLine("Digite o nome da matéria-prima: ");
        nomeMate = Console.ReadLine();
        Console.WriteLine("Digite o nome da matéria-prima: ");
        quantMate = int.Parse(Console.ReadLine());
         Console.WriteLine("Digite a data em que foi comprada a matéria-prima:");
        dataMater = DateTime.Parse(Console.ReadLine());
        Console.WriteLine("Digite a validade da matéria-prima:");
        valiMater = DateTime.Parse(Console.ReadLine());
        Console.WriteLine("digite o id do fornecedor:");
        idForn = int.Parse(Console.ReadLine());

        }
    }
}
