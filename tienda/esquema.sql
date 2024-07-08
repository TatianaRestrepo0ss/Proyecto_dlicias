CREATE TABLE IF NOT EXISTS productos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(1024) NOT NULL,
    precio DECIMAL(9,2)
);


CREATE TABLE IF NOT EXISTS carrito_usuarios(
    id_sesion VARCHAR(255) NOT NULL,
    id_producto BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES productos(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pagos (
nombre	varchar(255)	 NOT NULL,	
correo	varchar(255)	 NOT NULL,
direccion	varchar(255)	 NOT NULL,	
	ciudad	varchar(255)		 NOT NULL,
		codigo	varchar(255)	 NOT NULL,
		n_tarjeta	varchar(255)	 NOT NULL,	
	numero	varchar(255)	 NOT NULL,
    	mes	varchar(255)		 NOT NULL,
	año	varchar(255)	 NOT NULL,
	cvv VARCHAR(255) NOT NULL
)