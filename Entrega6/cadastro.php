<h1> formulario php </h1>

 <form action="usuario.php" method="POST">

<p>     Nome:<input type="text" name="nome"></p>
<p>     E-mail: <input type="text" name="sobrenome"></p>

<!-- //using select -->
<b> data nasc </b>
<select name = anoNasc> 
    <option value = '2000'> 2000 </option>
    <option value = '2001'> 2001 </option>
</select>

<br>
<br>

<!-- //using radio -->
<b> sexo </b>
<input type = "radio" name = "sexo" value = "masculino"> masculino
<input type = "radio" name = "sexo" value = "feminino"> feminino
<input type = "radio" name = "sexo" value = "naoBinario"> nao binario

<br>
<br>

<!-- //using select -->
<b> rede social </b>
<select name = redeSocial> 
    <option value = 'facebook'> facebook </option>
    <option value = 'instagram'> instagram </option>
</select>

<br>
<br>

<b> digita uma senha <b>
<input type = "password" value="key" name = "key">


<!-- getting radio -->

<br>

<h3> ql a marca do monitor </h3>

<input type="checkbox" name = "monitores[]" value = "sansumg"> Samsung
<input type="checkbox" name = "monitores[]" value = "dell"> dell

<p>     <input type="submit" value="Enviar" name="enviar"></p>


</form>
