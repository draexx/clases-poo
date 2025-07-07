# Proyecto PHP de Clases

Este proyecto contiene ejemplos de clases en PHP que demuestran conceptos básicos de programación orientada a objetos.

## Contenido

El proyecto incluye las siguientes clases:

* **Cuenta:** Representa una cuenta bancaria con funcionalidades para depósitos, retiros y transacciones.
* **Vehiculo:** Clase base que representa un vehículo con atributos como marca, modelo, color y propietario.
* **Autobus:** Clase que hereda de `Vehiculo` y añade atributos específicos para autobuses, como la empresa a la que pertenece.

A continuación, se detallan las funcionalidades de cada clase.

## `php/clase-cuenta.php`

Este archivo define la clase `Cuenta`.

### Clase `Cuenta`

Representa una cuenta bancaria.

**Atributos:**

* `numero` (privado): El número de la cuenta.
* `saldo` (privado): El saldo actual de la cuenta.

**Métodos:**

* `getSaldo()`: Devuelve el saldo actual de la cuenta.
* `getNumero()`: Devuelve el número de la cuenta.
* `setSaldo($saldo)`: Establece el saldo de la cuenta.
* `setNumero($numero)`: Establece el número de la cuenta.
* `deposito($monto)`: Añade un monto al saldo de la cuenta.
* `retiro($monto)`: Resta un monto del saldo de la cuenta.
* `transaccion($monto, $tipo="DEPOSITO")`: Realiza una transacción. Si `$tipo` es "DEPOSITO", añade el monto al saldo. Si es "RETIRO" (o cualquier otro valor), resta el monto del saldo.
* `__construct($numero=0, $saldo=0)`: Constructor de la clase. Inicializa el número de cuenta y el saldo. Por defecto, el número de cuenta y el saldo son 0.

**Ejemplo de uso (comentado en el archivo):**

```php
//$cuentaPrincipal = new Cuenta(897);
//$cuentaPrincipal->setNumero(123456);
//$cuentaPrincipal->setSaldo(0);
/*$cuentaPrincipal->deposito(100);
$cuentaPrincipal->deposito(100);
$cuentaPrincipal->retiro(30);*/
$cuentaPrincipal = new Cuenta(987765,30);
$cuentaPrincipal->transaccion(100,"DEPOSITO");
$cuentaPrincipal->transaccion(100);
$cuentaPrincipal->transaccion(40,"RETIRO");
echo $cuentaPrincipal->getSaldo() . " Nro cuenta: " . $cuentaPrincipal->getNumero();
```

## `php/clase-vehiculo.php`

Este archivo define las clases `Vehiculo` y `Autobus`.

### Clase `Vehiculo`

Clase base que representa un vehículo genérico.

**Atributos:**

* `marca` (privado): La marca del vehículo.
* `color` (privado): El color del vehículo.
* `propietario` (privado): El propietario del vehículo.
* `modelo` (privado): El modelo del vehículo.
* `lugarEstacionamiento` (privado): Lugar donde el vehículo está estacionado (no se usa actualmente en los métodos).
* `tipoEstacionamiento` (privado): Tipo de estacionamiento (no se usa actualmente en los métodos).

**Métodos:**

* `getMarca()`: Devuelve la marca del vehículo.
* `getModelo()`: Devuelve el modelo del vehículo.
* `getColor()`: Devuelve el color del vehículo.
* `getPropietario()`: Devuelve el propietario del vehículo.
* `setMarca($marca)`: Establece la marca del vehículo.
* `setModelo($modelo)`: Establece el modelo del vehículo.
* `setColor($color)`: Establece el color del vehículo.
* `setPropietario($propietario)`: Establece el propietario del vehículo.
* `__construct($marca, $modelo, $color, $propietario)`: Constructor de la clase. Inicializa la marca, modelo, color y propietario del vehículo.

### Clase `Autobus`

Hereda de la clase `Vehiculo` y representa un autobús.

**Atributos:**

* `empresa` (privado): La empresa a la que pertenece el autobús.

**Métodos:**

* `getEmpresa()`: Devuelve la empresa del autobús.
* `setEmpresa($empresa)`: Establece la empresa del autobús.
* `__construct($modelo, $color, $marca, $propietario, $empresa)`: Constructor de la clase. Llama al constructor de la clase padre (`Vehiculo`) y luego inicializa la empresa.
* `puedeAparcar`: Este método está incompleto en el código original.

**Ejemplo de uso (en el archivo):**

```php
$autobus = new Autobus("sedan","blanco","nissan","Juan","tecba");
echo $autobus->getColor();
```
