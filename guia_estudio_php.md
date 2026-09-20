# Guía de Estudio de PHP

Esta guía sigue tu temario tal cual. En los puntos que ya marcaste con `[x]` te dejo solo un repaso relámpago (para que confirmes que de verdad los dominas). En los que están pendientes con `[ ]` encuentras explicación + ejemplo de código, para que estudies directo sin batallar buscando en otro lado.

---

## 1. Sintaxis básica (ya dominada)

Repaso rápido:
- Todo bloque de PHP va entre `<?php` y `?>` (si el archivo es solo PHP, puedes omitir el cierre).
- Cada instrucción termina en `;`.
- `echo` imprime una o más cadenas separadas por comas y no regresa valor; `print` imprime una sola cosa y sí regresa `1`.
- Comentarios: `//` y `#` para una línea, `/* */` para varias.
- Indenta con 4 espacios (o el estándar que use tu equipo) y usa nombres descriptivos.

---

## 2. Variables y constantes

Ya dominas: declaración con `$`, asignación/reasignación, sensibilidad a mayúsculas (`$nombre` ≠ `$Nombre`).

### Pendiente: Constantes con `const` y `define()`

Una constante no cambia de valor una vez definida.

```php
// Con define(): funciona en cualquier parte del código, incluso dentro de condicionales
define('IVA', 0.16);

// Con const: se evalúa en tiempo de compilación, se usa mucho dentro de clases
const MONEDA = 'MXN';

echo IVA;    // 0.16
echo MONEDA; // MXN
```

**Diferencia clave:** `define()` es más flexible (puedes calcular su valor en tiempo de ejecución), `const` es más rápido pero debe usarse a nivel superior del archivo o dentro de una clase.

---

## 3. Tipos de datos

Ya dominas: `string`, `int`, `float`, `bool` y `null`.

### Pendiente: `array` y `object`

```php
$colores = ['rojo', 'verde', 'azul']; // array
$persona = new stdClass();            // object genérico
$persona->nombre = 'Luis';
```

### Pendiente: `var_dump()`

Te muestra el tipo exacto y el valor de una variable. Es tu mejor amigo para depurar.

```php
$edad = 25;
var_dump($edad); // int(25)

$nombre = "Ana";
var_dump($nombre); // string(3) "Ana"
```

### Pendiente: Comprobar tipos

```php
is_string("hola");   // true
is_int(10);           // true
is_array([1,2,3]);    // true
is_bool(true);         // true
is_float(3.14);        // true
is_null(null);          // true
```

### Pendiente: Conversión básica de tipos

```php
$numero = "10";
$entero = (int) $numero;      // 10
$texto = (string) 25;          // "25"
$decimal = (float) "3.5";      // 3.5

// PHP también convierte solo, "type juggling":
echo "5" + 3; // 8
```

---

## 4. Operadores

Todo pendiente. Sección corta pero es la base de casi todo lo demás.

### Aritméticos

```php
$a = 10; $b = 3;
$a + $b;  // 13
$a - $b;  // 7
$a * $b;  // 30
$a / $b;  // 3.333...
$a % $b;  // 1 (residuo)
$a ** $b; // 1000 (potencia)
```

### Asignación

```php
$x = 5;
$x += 2; // $x = $x + 2 -> 7
$x -= 1; // 6
$x *= 3; // 18
```

### Comparación

```php
5 == "5";   // true  (compara valor)
5 === "5";  // false (compara valor Y tipo)
5 != "5";   // false
5 !== "5";  // true
5 <=> 3;    // 1  (spaceship: -1 si menor, 0 si igual, 1 si mayor)
```

**Tip importante:** usa siempre `===` y `!==` a menos que tengas una razón clara para no hacerlo. Evita bugs raros por comparación floja.

### Lógicos

```php
true && false; // false
true || false; // true
!true;          // false
// 'and'/'or' existen pero tienen menor precedencia que && y ||, casi no se usan en condiciones
```

### Incremento y decremento

```php
$i = 1;
$i++; // 2 (post-incremento)
++$i; // 3 (pre-incremento)
$i--; // 2
```

### Concatenación

```php
$saludo = "Hola" . " " . "mundo"; // "Hola mundo"
$saludo .= "!"; // "Hola mundo!"
```

---

## 5. Cadenas de texto

Ya dominas: comillas simples y dobles.

### Pendiente: Concatenación e interpolación

```php
$nombre = "Carlos";
// Concatenación
$mensaje = "Hola, " . $nombre . "!";
// Interpolación (solo funciona con comillas dobles)
$mensaje = "Hola, $nombre!";
$mensaje = "Hola, {$nombre}!"; // forma recomendada cuando hay más contexto alrededor
```

### Pendiente: Caracteres de escape

```php
echo "Línea 1\nLínea 2";  // \n salto de línea
echo "Comillas: \"así\""; // \" para no cerrar la cadena
echo 'No interpreta \n';   // en comillas simples \n NO es salto de línea
```

### Pendiente: Funciones frecuentes

```php
strlen("Hola");            // 4
trim("  hola  ");           // "hola"
strtolower("HOLA");         // "hola"
strtoupper("hola");         // "HOLA"
str_contains("Hola mundo", "mundo"); // true
str_replace("mundo", "PHP", "Hola mundo"); // "Hola PHP"
```

---

## 6. Condicionales

Ya dominas: `if/elseif/else`, `switch`, ternario.

### Pendiente: Condiciones compuestas

```php
$edad = 20;
$tieneCredencial = true;

if ($edad >= 18 && $tieneCredencial) {
    echo "Puede entrar";
}
```

### Pendiente: `match` (PHP 8+)

Es como un `switch` más moderno: compara con `===`, no necesita `break` y regresa un valor directamente.

```php
$dia = 3;
$nombre = match($dia) {
    1, 7 => 'Fin de semana',
    2, 3, 4, 5, 6 => 'Día entre semana',
    default => 'Día inválido',
};
echo $nombre; // "Día entre semana"
```

### Pendiente: Operador de fusión de null `??`

Regresa el valor de la izquierda si no es `null`; si lo es, regresa el de la derecha. Muy usado con datos que pueden no existir (como `$_GET` o `$_POST`).

```php
$nombre = $_GET['nombre'] ?? 'Invitado';

// Existe también ??= para asignar solo si es null
$config['tema'] ??= 'claro';
```

---

## 7. Bucles (ya dominados)

Repaso rápido: `for` para conteos definidos, `while`/`do-while` para condiciones que dependen de una variable externa, `foreach` para recorrer arreglos (con o sin llaves), `break` para salir del bucle y `continue` para saltar a la siguiente iteración.

### Pendiente: Reconocer y evitar ciclos infinitos

Un ciclo infinito ocurre cuando la condición de salida nunca se vuelve falsa.

```php
// MAL: $i nunca cambia, esto nunca termina
$i = 0;
while ($i < 5) {
    echo $i;
}

// BIEN: siempre modifica la variable de control dentro del bucle
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}
```

**Checklist mental:** ¿la variable que evalúas en la condición cambia en cada vuelta? ¿el cambio va en la dirección correcta para eventualmente cumplir la condición de salida?

---

## 8. Arreglos

Ya dominas: arreglos indexados y asociativos.

### Pendiente: Agregar, consultar, modificar y eliminar

```php
$frutas = ['manzana', 'pera'];

$frutas[] = 'uva';        // agregar al final
echo $frutas[0];           // consultar -> "manzana"
$frutas[1] = 'kiwi';       // modificar
unset($frutas[2]);         // eliminar el elemento en la posición 2
```

### Pendiente: Arreglos multidimensionales

```php
$alumnos = [
    ['nombre' => 'Ana', 'edad' => 20],
    ['nombre' => 'Luis', 'edad' => 22],
];

echo $alumnos[0]['nombre']; // "Ana"
```

### Pendiente: Recorrido con `foreach`

```php
foreach ($alumnos as $alumno) {
    echo $alumno['nombre'] . " tiene " . $alumno['edad'] . " años\n";
}
```

### Pendiente: Desestructuración básica

```php
[$a, $b, $c] = ['uno', 'dos', 'tres'];
echo $b; // "dos"

// También funciona con arreglos asociativos
['nombre' => $nombre, 'edad' => $edad] = $alumnos[0];
```

### Pendiente: Funciones comunes

```php
count($frutas);                  // número de elementos
in_array('uva', $frutas);         // true si existe
array_keys($alumnos[0]);          // ['nombre', 'edad']
array_values($alumnos[0]);        // ['Ana', 20]
array_merge($frutas, ['fresa']);  // une dos arreglos
array_map(fn($n) => strtoupper($n), $frutas); // aplica función a cada elemento
array_filter($frutas, fn($f) => $f !== 'kiwi'); // filtra elementos
```

---

## 9. Funciones

Todo pendiente.

### Declaración y llamada

```php
function saludar() {
    echo "Hola";
}
saludar();
```

### Parámetros, argumentos y valores predeterminados

```php
function saludar($nombre, $saludo = "Hola") {
    echo "$saludo, $nombre";
}
saludar("Ana");            // Hola, Ana
saludar("Luis", "Buenas"); // Buenas, Luis
```

### `return`

```php
function sumar($a, $b) {
    return $a + $b;
}
$resultado = sumar(3, 4); // 7
```

### Tipos de parámetros y de retorno

```php
function sumar(int $a, int $b): int {
    return $a + $b;
}
```

### Paso por valor y por referencia

```php
function porValor($x) {
    $x = $x + 1; // no afecta la variable original
}

function porReferencia(&$x) {
    $x = $x + 1; // sí afecta la variable original
}

$n = 5;
porValor($n);
echo $n; // 5

porReferencia($n);
echo $n; // 6
```

### Funciones anónimas y funciones flecha

```php
// Función anónima
$sumar = function($a, $b) {
    return $a + $b;
};
echo $sumar(2, 3); // 5

// Función flecha (arrow function) - hereda variables externas automáticamente
$factor = 2;
$multiplicar = fn($n) => $n * $factor;
echo $multiplicar(5); // 10
```

---

## 10. Alcance y valores especiales

Todo pendiente.

### Alcance local y global

```php
$global = "soy global";

function ejemplo() {
    // No puedes ver $global aquí directamente
    global $global; // así sí puedes usarla
    echo $global;
}
```

### Variables `static` dentro de funciones

Conservan su valor entre llamadas a la misma función.

```php
function contador() {
    static $veces = 0;
    $veces++;
    echo $veces;
}
contador(); // 1
contador(); // 2
contador(); // 3
```

### `isset()`, `empty()` y `unset()`

```php
$a = null;
$b = "";
$c = "hola";

isset($a);  // false (null cuenta como "no está definida" para isset)
isset($c);  // true
empty($b);  // true (cadena vacía cuenta como vacío)
empty($c);  // false
unset($c);  // elimina la variable $c
```

### Diferencias entre "no definida", `null`, `false`, `0` y `""`

| Valor | ¿Existe la variable? | ¿`isset()`? | ¿`empty()`? |
|---|---|---|---|
| No definida | No | false | true |
| `null` | Sí, pero vacía | false | true |
| `false` | Sí | true | true |
| `0` | Sí | true | true |
| `""` | Sí | true | true |

Son conceptos parecidos pero no iguales; esta tabla te ahorra muchos bugs a futuro.

---

## 11. Clases y objetos: repaso básico

Todo pendiente.

### Clases, objetos, propiedades y métodos

```php
class Persona {
    public $nombre;

    public function saludar() {
        echo "Hola, soy " . $this->nombre;
    }
}

$persona1 = new Persona();
$persona1->nombre = "Ana";
$persona1->saludar(); // Hola, soy Ana
```

### Constructor `__construct()`

```php
class Persona {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

$persona1 = new Persona("Luis");
```

### Visibilidad: `public`, `protected`, `private`

```php
class CuentaBancaria {
    private $saldo = 0;

    public function depositar($monto) {
        $this->saldo += $monto;
    }

    public function verSaldo() {
        return $this->saldo;
    }
}

$cuenta = new CuentaBancaria();
$cuenta->depositar(100);
echo $cuenta->verSaldo(); // 100
// $cuenta->saldo directo daría error, porque es private
```

- `public`: accesible desde cualquier parte.
- `protected`: accesible desde la clase y sus clases hijas.
- `private`: accesible solo dentro de la misma clase.

### Herencia, interfaces y traits (nivel introductorio)

```php
// Herencia
class Animal {
    public function hacerSonido() {
        echo "Sonido genérico";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        echo "Guau";
    }
}

// Interfaz: define qué métodos debe tener una clase, sin implementarlos
interface Volador {
    public function volar();
}

class Ave implements Volador {
    public function volar() {
        echo "Estoy volando";
    }
}

// Trait: código reutilizable que se "mezcla" dentro de una clase
trait Saludable {
    public function saludar() {
        echo "Hola desde el trait";
    }
}

class Persona {
    use Saludable;
}
```

### Propiedades y métodos `static`

```php
class Contador {
    public static $total = 0;

    public static function incrementar() {
        self::$total++;
    }
}

Contador::incrementar();
Contador::incrementar();
echo Contador::$total; // 2
```

---

## 12. Errores y excepciones

Todo pendiente.

### Error de sintaxis vs advertencia vs excepción

- **Error de sintaxis:** el código está mal escrito, PHP ni siquiera puede ejecutarlo (falta un `;`, un paréntesis, etc.).
- **Advertencia (warning):** el código se ejecuta, pero algo salió mal en el camino (por ejemplo, usar una variable indefinida).
- **Excepción:** un error que puedes "atrapar" y manejar con código, en vez de dejar que tumbe el programa.

### `try`, `catch` y `finally`

```php
try {
    $resultado = 10 / 0; // en realidad esto genera un DivisionByZeroError
} catch (\DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "Esto se ejecuta siempre, haya error o no";
}
```

### Lanzar una excepción con `throw`

```php
function dividir($a, $b) {
    if ($b === 0) {
        throw new \InvalidArgumentException("No se puede dividir entre cero");
    }
    return $a / $b;
}

try {
    dividir(10, 0);
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage();
}
```

### Leer el mensaje y la línea que señala PHP

Cuando PHP marca un error, normalmente dice algo como:

```
Fatal error: Uncaught InvalidArgumentException: No se puede dividir entre cero in /ruta/archivo.php:5
```

Ahí `archivo.php:5` te dice el archivo y línea exactos donde ocurrió. Siempre revisa primero esa línea antes de buscar el error en otro lado.

---

## Resultado esperado (autoevaluación final)

Cuando termines de repasar todo, deberías poder marcar honestamente estos puntos:

- [ ] Leer código PHP sencillo sin perderte en la sintaxis.
- [ ] Elegir correctamente entre una condición y un bucle.
- [ ] Recorrer y transformar arreglos.
- [ ] Crear funciones con parámetros y retorno.
- [ ] Comprender la estructura básica de una clase.
- [ ] Explicar con tus propias palabras qué hace cada ejemplo (sin leerlo de memoria).

---

## Plan sugerido de estudio

1. **Constantes, tipos de datos y operadores** (secciones 2-4): son la base, tardas poco porque ya dominas variables.
2. **Cadenas y condicionales avanzados** (secciones 5-6): `match` y `??` son cortos pero muy usados en código moderno.
3. **Arreglos** (sección 8): dedícale tiempo extra, es de lo más usado en el día a día.
4. **Funciones** (sección 9): practica mucho el paso por referencia y las funciones flecha, suelen confundir al inicio.
5. **Alcance y valores especiales** (sección 10): la tabla de `null`/`false`/`0`/`""` memorízala bien.
6. **Clases y objetos** (sección 11): tómate tu tiempo, es el salto más grande de este temario.
7. **Errores y excepciones** (sección 12): ciérralo al final, se apoya en todo lo anterior.

**Cómo practicar cada tema:** escribe un mini script de consola por sección (sin frameworks), corre `php archivo.php` y usa `var_dump()` para confirmar que el resultado es el que esperabas.
