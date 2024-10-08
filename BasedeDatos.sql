	create database repositorio;
	use repositorio;
	set sql_mode='';

	create table area_oficina(
		id_area_oficina int primary key auto_increment not null,
		nombre varchar(500),
		detalle varchar(500),
		activo boolean default 1
		);
	create table usuario(
		id_usuario int primary key auto_increment not null,
		area_oficina_id int,
		nombre varchar(500),
		apellido varchar(500),
		dni varchar(500),
		telefono varchar(500),
		edad varchar(500),
		imagen varchar(500),
		sexo varchar(500),
		email varchar(500),
		usuario varchar(500),
		password varchar(500),
		fecha datetime,
		fecha_modeficacion datetime,
		activo boolean default 1,
		admin boolean default 0,
		publico boolean default 0,
		jefe boolean default 0,
		encargado boolean default 0,
		foreign key (area_oficina_id) references area_oficina(id_area_oficina)
		);
	insert into usuario(
		nombre,apellido,dni,telefono,edad,imagen,sexo,email,usuario,password,fecha,fecha_modeficacion,activo,admin)
	value("admin","admin","73194743","","","","","","admin","seceje135",NOW(),NOW(),"1","1");
	create table institucion(
		id_institucion int primary key auto_increment not null,
		usuario_id int,
		nombre varchar(200),
		descripcion varchar(200),
		direccion varchar(200),
		calidad varchar(200),
		seguridad varchar(200),
		garantia varchar(200),
		mision varchar(200),
		vision varchar(200),
		valores varchar(200),
		horario_atencion varchar(200),
		logo varchar(200),
		imagen varchar(200),
		gerente varchar(200),
		texto1 varchar(200),
		texto2 varchar(200),
		texto3 varchar(200),
		texto4 varchar(200),
		texto5 varchar(200),
		texto6 varchar(200),
		footer1 varchar(200),
		footer2 varchar(200),
		footer3 varchar(200),
		telefono varchar(200),
		ciudad varchar(200),
		pais varchar(200),
		email varchar(200),
		red_social1 varchar(200),
		red_social2 varchar(200),
		red_social3 varchar(200),
		red_social4 varchar(200),
		red_social5 varchar(200),
		red_social6 varchar(200),
		red_social7 varchar(200),
		is_activo tinyint default 1,
	   	is_publico tinyint default 0,
		fecha datetime,
		fechaactualizacion datetime,
		foreign key (usuario_id) references usuario(id_usuario)
		);
	insert into institucion(nombre) value("REPOSITORIO");
	create table periodo(
		id_periodo int not null auto_increment primary key,
		nombre varchar(500),
		descripcion varchar(500),
		activo boolean,
		fecha datetime,
		usuario_id int not null,
		foreign key (usuario_id) references usuario(id_usuario));
	create table carpeta(
		id_carpeta int primary key auto_increment not null,
		usuario_id int,
		periodo_id int,
		nombre varchar(500),
		codigo varchar(500),
		estante varchar(500),
		modulo varchar(500),
		descripcion varchar(500),
		fecha datetime,
		foreign key (usuario_id) references usuario(id_usuario)
		-- foreign key (periodo_id) references periodo(id_periodo)
		);
	create table periodocarpeta(
		id_periodocarpeta int primary key auto_increment not null,
		carpeta_id int not null,
		periodo_id int not null,
		foreign key (carpeta_id) references carpeta(id_carpeta),
		foreign key (periodo_id) references periodo(id_periodo));
	create table periodoarea(
		id_periodoarea int primary key auto_increment not null,
		oficina_area_id int,
		periodo_id int,
		foreign key (oficina_area_id) references area_oficina(id_area_oficina),
		foreign key(periodo_id) references periodo(id_periodo));
	create table arecarpeta(
		id_area_carpeta int primary key auto_increment not null,
		area_oficina_id int,
		carpeta_id int,
		foreign key (area_oficina_id) references area_oficina(id_area_oficina),
		foreign key (carpeta_id) references carpeta(id_carpeta)
		);
	create table tipo_documento(
		id_tipo int primary key auto_increment not null,
		nombre varchar(500));
	create table archivo(
		id_archivo int primary key auto_increment not null,
		usuario_id int,
		tipo_id int,
		codigo varchar(500),
		nombre_documento varchar(1000),
		descripcion varchar(500),
		ubicacion varchar(500),
		estante varchar(500) ,
		modulo varchar(500) ,
		numero varchar(500),
		folio varchar(500),
		responsable varchar(500),
		aricho varchar(500) ,
		otros varchar(500),
		publico boolean default 0,
		activo boolean default 0,
		perdido boolean default 0,
		transferido boolean default 0,
		carpeta boolean default 0,
		-- carpeta_id int,
		fecha datetime,
		foreign key (usuario_id) references usuario(id_usuario),
		foreign key (tipo_id) references tipo_documento(id_tipo)
		-- foreign key (carpeta_id) references carpeta(id_carpeta)
		);
	create table carpetaarchivo(
		id_carpetaarchivo int primary key auto_increment not null,
		carpeta_id int not null,
		archivo_id int not null,
		foreign key (carpeta_id) references carpeta(id_carpeta),
		foreign key (archivo_id) references archivo(id_archivo));
	create table comentario(
		id_comentario int primary key auto_increment not null,
		archivo_id int,
		usuario_id int,
		comentario text,
		-- area_oficina_id int,
		comentario_id int,
		fecha datetime,
		foreign key (archivo_id) references archivo(id_archivo),
		foreign key (usuario_id) references usuario(id_usuario),
		-- foreign key (area_oficina_id) references area_oficina(id_area_oficina),
		foreign key (comentario_id) references comentario(id_comentario)
		);
	create table permiso(
		id_permiso int primary key auto_increment not null,
		archivo_id int,
		usuario_id int,
		-- area_oficina_id int,
		fecha datetime,
		permiso int,
		foreign key (archivo_id) references archivo(id_archivo),
		foreign key (usuario_id) references usuario(id_usuario)
		-- foreign key (area_oficina_id) references area_oficina(id_area_oficina)
		);
