CREATE TABLE usuario (
	id_usuario INTEGER PRIMARY KEY AUTOINCREMENT,
	nm_usuario VARCHAR(100),
	email_usuario VARCHAR(150),
	telefone_usuario CHAR(15),
	data_nascimento_usuario DATE,
	senha_usuario VARCHAR(30),
	cpf_usuario CHAR(14),
	genero_usuario CHAR(1),
	mensagem_usuario VARCHAR(200)
);
CREATE TABLE profissional(
	id_profissional INTEGER PRIMARY KEY AUTOINCREMENT,
	nm_profissional VARCHAR(100),
	email_profissional VARCHAR(150),
	telefone_profissional CHAR(15),
	data_nascimento_profissional DATE,
	senha_profissional VARCHAR(30),
	cpf_profissional CHAR(14),
	genero_profissional CHAR(1),
	mensagem_profissional VARCHAR(200)
);
CREATE TABLE empresa(
	id_empresa INTEGER PRIMARY KEY AUTOINCREMENT,
	nm_empresa VARCHAR(100),
	email_empresa VARCHAR(150),
	telefone_empresa CHAR(15),
	senha_empresa VARCHAR(30),
	cnpj CHAR(18),
	mensagem_empresa VARCHAR(200)
);

DROP TABLE usuario;
DROP TABLE profissional;
DROP TABLE empresa;