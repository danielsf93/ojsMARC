<h1>ojsMARC</h1>

Manual de utilização dos plugins exportadores de Registro MARC do Portal de Revistas e de Livros Abertos da USP

Portal de Revistas.

No Portal de Revistas (OJS-PKP) da USP já está disponível o plugin de exportação de Registros MARC para importação no Aleph. Para utilizá-lo é necessário seguir o passo a passo:

a) Com a conta de administrador/gerente de sua revista, acesse a área de configurações de plugins
‘Configurações>Website>Plugins>Plugins instalados’<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/85652cec-236e-4dd6-883c-30e6c8a85556)<br><br>


b)Busque por “ojsMARC” e ative o Plugin<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/f39fde45-661c-407c-929d-9ba601c4d3b8)<br><br>



c)Recarregue a página (f5) e acesse
‘Configurações > Website > Aparência > Configurar’<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/9e3d70fd-36f4-4c18-ac72-949495668a8c)<br><br>



Role a página até a seção “Barra Lateral”, ative o Plugin ‘ojsMARC’ e posicione de acordo com sua preferência. Em seguida, salve as configurações.<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/a90832ec-de4d-4c37-b20c-59dbaf48b6d5)<br><br>

Agora o plugin já está disponível nas páginas de artigos, como no exemplo:<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/3eb8e4dd-a256-42a8-ab33-7dffff5d206a)<br><br>



A partir deste momento a(o)s bibliotecária(o)s poderão baixar os Registros MARCs dos artigos para importar no ALEPH. Os passos de configuração estão prontos. Agora para baixar os arquivos MARC não é necessário estar logado na revista, basta baixar o registro do artigo desejado. <br><br>

![image](https://github.com/danielsf93/ojsMARC/assets/114300053/db566846-12b2-497e-8a94-33140f28bf45)<br><br>



Os registros baixados estarão com o nome de ojs.mrc, ojs(1).mrc, ojs(2).mrc, etc. Os mesmos se encontram na pasta de downloads do seu computador, basta copiar/recortar para a pasta de importações do aleph, como por exemplo
‘C:\AL500_23\Catalog\ConvertIn’<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/c3218dfe-101e-44ab-8e92-ec6e01f78ba9)<br><br>



Agora com o Aleph aberto, basta importar o arquivo desejado e prosseguir como de costume<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/e3ea2fcc-0b9f-4c2a-be6e-0c49afe8f8bb)<br><br>


Os dados serão carregados:<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/3b952aa7-f301-4f45-8d01-0ff2d07af3e5)<br><br>


e poderão ser catalogados no Dedalus<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/52fa1207-dd82-446e-8770-1b31b3f2bb51)<br><br>





<b>Observações Importantes:</b><br><br>
-Os campos obtidos nos arquivos ojs.mrc são:<br>
LDR, 005, 008, 024, 040, 041, 044, 100, 242(quando houver), 245, 260, 300, 500, 520, 700(quando houver), 773, 856, 940(quando houver), 945<br><br>

-No caso do portal de revistas, os dados são obtidos pelo plugin ‘ojsMARC’ da forma como foram publicados. Se por exemplo a publicação não possuir LINK DOI, ou número de páginas, o arquivo ojs.mrc exportado não possuirá esses dados em seus respectivos campos, já que os mesmos não estão disponíveis no artigo original. Nestes casos o campo que deveria constar essa informação ficará em branco para registro manual.<br><br>

-Sobre Nomes, Sobrenomes e Afiliação, o plugin organizará a informação da forma como consta na publicação, como por exemplo “Aziz Nacib Ab'Saber”, que pode ser organizado como <br><br>

=100  1\$aNacib Ab'Saber, Aziz<br><br>
se na publicação foi registrado como <br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/4a1fbcc0-30de-4a56-8211-8c2bd72d73a6)<br><br>


ou organizado como <br><br>

=100  1\$aAb'Saber, Aziz Nacib<br><br>
se na publicação original foi organizado como<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/995432e5-f802-4f3f-8dfd-0b5a8751ab4f)<br><br>


-Quanto a Instituição/Afiliação dos autores, no registro MARC só constará como autor USP, se na publicação a mesma informação estiver registrada<br><br>
![image](https://github.com/danielsf93/ojsMARC/assets/114300053/94ce5de3-3de2-439b-b144-564d3b704e87)<br><br>


Caso o autor seja da USP e essa informação não esteja registrada, contará como autor externo, devendo ser modificado manualmente.
