# Random

It is a simple class to generate random alpha numeric strings to generate things like apikeys, passwords or recovery codes.

<pre>
<code>\iwalkalone\Random::generate($length, $type);</code>
</pre>

Allowed types are:
* **n**: only numbers (0-9).
* **A**: only capital letters (A-Z, except O to avoid confusion with number 0).
* **a**: only lowercase letters (a-z, except l to avoid confusion with number 1).
* **An**: capital letters and numbers (except letter O to avoid confusion with number 0).
* **an**: lowercase letters and numbers (except letters i and number 1 to avoid confusions).
* **Aan**: uppercase and lowercase letters plus numbers (except letter O and number 1).

By default, length is 8 and type is Aan.
