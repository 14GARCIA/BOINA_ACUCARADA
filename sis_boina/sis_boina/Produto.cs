using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace sis_boina
{
    internal class Produto
    {
        public string NomeProd { get; set; }
        public decimal ValorProd { get; set; }
        public string TipoProd { get; set; }
        public double PesoProd { get; set; }
        public TimeSpan HorarioProd { get; set; }
        public DateTime DatadeProd { get; set; }
        public DateTime ValidadeProd { get; set; }

        public void cadastroPro()
        {
            Console.WriteLine("digite o nome do produto");
            this.NomeProd=Console.ReadLine();

            Console.WriteLine("digite o valor do produto");
            this.ValorProd=decimal.Parse(Console.ReadLine());

            Console.WriteLine("digite o tipo do produto");
            this.TipoProd = Console.ReadLine();

            Console.WriteLine("digite o peso do produto");
            this.PesoProd=double.Parse(Console.ReadLine());

            Console.WriteLine("digite o horario que o produto foi feito");
            this.HorarioProd = TimeSpan.Parse(Console.ReadLine());

            Console.WriteLine("digite a data em que o produto foi feito");
            this.DatadeProd= DateTime.Parse(Console.ReadLine());

            Console.WriteLine("digite a data de validade do produto");
            this.DatadeProd = DateTime.Parse(Console.ReadLine());


        }
    }
}
