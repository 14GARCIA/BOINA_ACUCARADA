 create database PIdatabase;
 use Pidatabase;
 
 CREATE TABLE Clientes (
  idClien INTEGER(5) UNSIGND NOT NULL AUTO_INCREMENT,
  senhaClien Varchar (50) not null ; 
  nomeClien VARCHAR(150) NOT NULL,
  cpfClien VARCHAR(20) NOT NULL,
  emailClien VARCHAR(150) NOT NULL,
  cepClien VARCHAR(10) NOT NULL,
  lograClien VARCHAR(100) NOT NULL,
  cidadeClien VARCHAR(30) NOT NULL,
  bairroClien VARCHAR(30) NOT NULL,
  ufClien VARCHAR(3) NOT NULL,
  PRIMARY KEY(idClien)
);
 
 
CREATE TABLE fornecedores (
  idForn INTEGER(5)   NOT NULL AUTO_INCREMENT,
  nomeForn VARCHAR(150) NULL,
  emailForn VARCHAR(150) NULL,
  cepForn VARCHAR(40) NULL,
  logradouro VARCHAR(50) NULL,
  PRIMARY KEY(idForn)
);

CREATE TABLE Funcionario (
  idFuncionario INTEGER(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeFunci VARCHAR(150) NOT NULL,
  senhaFunci varchar (50) not null;
  emailFunci VARCHAR(150) NOT NULL,
  cpfFunci VARCHAR(25) NOT NULL,
  telefoneFunci VARCHAR(20) NOT NULL,
  setorFunci VARCHAR(50) NOT NULL,
  salarioFunci DECIMAL(20) NOT NULL,
  cargo VARCHAR(90) NOT NULL,
  PRIMARY KEY(idFuncionario)
);
 
CREATE TABLE MateriaPrima (
  idmateria INTEGER(9)  NOT NULL AUTO_INCREMENT,
  nomeMate VARCHAR(40) Not NULL,
  quantMate INTEGER(30)  ,
   dataMater Date not null, 
   valiMater date Not null, 
   PRIMARY KEY(idmateria ),
  idForn INTEGER   , 
FOREIGN KEY (idForn) references fornecedores (idForn) 
);
  
 
CREATE TABLE Produtos (
  idProdutos INTEGER(5) NOT NULL AUTO_INCREMENT,
 primary key (idProdutos),
  nomeProd VARCHAR(100) NOT NULL,
  valorProd DECIMAL(20) NOT NULL,
  tipoProd VARCHAR(20) NULL,
  pesoProd DECIMAL(20) NOT NULL,
  horarioProd VARCHAR(20) NOT NULL,
  datadeProd DATE NOT NULL,
  validadeProd DATE NOT NULL 
  
);
 

CREATE TABLE Pedido (
  idPed INTEGER(100)   NOT NULL AUTO_INCREMENT,
  dataPed DATE NOT NULL,
  tipoPed VARCHAR(40) NOT NULL,
  pagoPed VARCHAR(40) NULL,
  primary key (idPed),
 
  /* Foreign Keys do pedido*/
   
  /* Dados do Produto em si*/ idProdutos integer not null,
  /* Dados do Cliente em si*/ idClien integer unsigned not null,
 
 constraint foreign key (idClien) references Clientes (idClien),
 constraint foreign key (idProdutos) references Produtos (idProdutos)
 
 );
 


