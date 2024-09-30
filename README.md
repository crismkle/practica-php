# Practica PHP
Guía de ejercicios de PHP de Fundación Telefónica Movistar

## :clipboard: Enunciado

### Ejercicio 1
Escribir un programa que, a partir de dos números enteros, muestre por
pantalla todos los números pares que hay entre ambos números,
incluyendo, en caso de ser pares, los números originales.

### Ejercicio 2
Asignar un número cualquiera, entero mayor que cero a una variable.
Verificar si el número ingresado es múltiplo de 2, 3, 4, 5, 6, 7,8 o 9.
Armar un arreglo con los números encontrados (por ejemplo, si el número
ingresado es múltiplo de 3,6 y 7, armamos un arreglo que contenga estos
tres números).
Mostrar el arreglo por pantalla, ordenado de mayor a menor.
En caso de que el número ingresado no sea múltiplo de estos números,
mostrar por pantalla el mensaje “No se encontraron divisores exactos”.

### Ejercicio 3
Crear un arreglo con 10 números enteros y mostrarlos por pantalla.
Luego reemplazar todos los números pares por la palabra PAR usando una
estructura FOR y volver a mostrar el arreglo por pantalla.

### Ejercicio 4
Dada una medida de tiempo expresada en horas, minutos y segundos con
valores arbitrarios, elabore un programa que transforme dicha medida en
una expresión correcta.
Por ejemplo, dada la medida 3h 118m 195s, el programa deberá obtener
como resultado 5h 1m 15s.

### Ejercicio 5
Escriba un programa que muestre en pantalla todos los números primos
entre1 y n, donde n es un número positivo que cargamos en una variable al
inicio.

### Ejercicio 6
Crea una función llamada calculadora que tome tres argumentos: dos
números y una cadena que represente una operación (por ejemplo, "+", "-",
"*", "/"). La función debe realizar la operación y devolver el resultado.

### Ejercicio 7
Crea una función llamada contarPalabras que tome una cadena de texto como
argumento y devuelva el número de palabras en esa cadena. Las palabras
están separadas por espacios.

### Ejercicio 8
Crea una función llamada generarContraseña que genere una contraseña
aleatoria de una longitud especificada. La contraseña debe contener letras
mayúsculas, letras minúsculas y números.

### Ejercicio 9
Crea una función llamada validarCorreo que tome una dirección de correo
electrónico como argumento y determine si es una dirección de correo
electrónico válida.

### Ejercicio 10
Crea una función llamada calcularPromedio que tome un array de números
como argumento y devuelva el promedio de esos números.

## :clipboard: TP Final Módulo 1

### Mod 1 Ejercicio 1
Desarrollar una función en PHP que reciba un valor numérico, verifique que
el número es entero, mayor que 1 y retorne dos variables.
La primera variable debe indicar si el número recibido es primo y la segunda
variable debe informar si el número recibido es par o impar.
Instrucciones:
1. Nombre de la Función: La función debe llamarse verificarNumero.
2. Parámetros de Entrada:
o La función debe recibir un único parámetro: un número
cualquiera.
3. Validación:
o La función debe verificar que el número recibido es entero
mayor que 1. Si el número no cumple esta condición, la función
debe retornar false para ambas variables.
4. Salida:
o La función debe retornar dos variables:
▪ La primera variable debe ser un booleano que indique si
el número es primo (true si es primo, false si no lo es).
▪ La segunda variable debe ser un string que indique si el
número es “par” o “impar”.
5. Definiciones:
o Un número es primo si solo es divisible por 1 y por sí mismo.
o Un número es par si es divisible por 2, de lo contrario,
es impar.

### Mod 1 Ejercicio 2
Desarrollar una solución en PHP que haga uso de la
función verificarNumero del ejercicio anterior para encontrar los números
primos que existen entre dos valores dados, incluyendo los propios valores
inicio/fin.
El código deberá generar tres arreglos: uno con todos los números primos,
otro con los números primos pares y otro con los números primos impares.
Finalmente, se deberá mostrar por pantalla la cantidad de números primos
encontrados, la cantidad de números primos pares y la cantidad de números
primos impares.
Instrucciones:
1. Función: utilizar la función del ejercicio 1.
2. Parámetros de Entrada:
o La solución debe recibir dos valores enteros, mayores que 1,
que representen el rango de búsqueda (por
ejemplo, inicio y fin).
3. Generación de Arreglos:
o Crea tres arreglos:
▪ Un arreglo con todos los números primos encontrados en
el rango.
▪ Un arreglo con los números primos pares.
▪ Un arreglo con los números primos impares.
4. Salida:
o Muestra por pantalla:
▪ La cantidad total de números primos encontrados.
▪ La cantidad de números primos pares.
▪ La cantidad de números primos impares.
