#ojsMARC<br>

Manual de utilização dos plugins exportadores de Registro MARC do Portal de Revistas e de Livros Abertos da USP

Portal de Revistas.

No Portal de Revistas (OJS-PKP) da USP já está disponível o plugin de exportação de Registros MARC para importação no Aleph. Para utilizá-lo é necessário seguir o passo a passo:

a) Com a conta de administrador/gerente de sua revista, acesse a área de configurações de plugins
‘Configurações>Website>Plugins>Plugins instalados’


b)Busque por “ojsMARC” e ative o Plugin



c)Recarregue a página (f5) e acesse
‘Configurações > Website > Aparência > Configurar’



Role a página até a seção “Barra Lateral”, ative o Plugin ‘ojsMARC’ e posicione de acordo com sua preferência. Em seguida, salve as configurações.

Agora o plugin já está disponível nas páginas de artigos, como no exemplo:



A partir deste momento a(o)s bibliotecária(o)s poderão baixar os Registros MARCs dos artigos para importar no ALEPH. Os passos de configuração estão prontos. Agora para baixar os arquivos MARC não é necessário estar logado na revista, basta baixar o registro do artigo desejado. 




Os registros baixados estarão com o nome de ojs.mrc, ojs(1).mrc, ojs(2).mrc, etc. Os mesmos se encontram na pasta de downloads do seu computador, basta copiar/recortar para a pasta de importações do aleph, como por exemplo
‘C:\AL500_23\Catalog\ConvertIn’



Agora com o Aleph aberto, basta importar o arquivo desejado e prosseguir como de costume


Os dados serão carregados:


e poderão ser catalogados no Dedalus





Observações Importantes:
-Os campos obtidos nos arquivos ojs.mrc são:
LDR, 005, 008, 024, 040, 041, 044, 100, 242(quando houver), 245, 260, 300, 500, 520, 700(quando houver), 773, 856, 940(quando houver), 945

-No caso do portal de revistas, os dados são obtidos pelo plugin ‘ojsMARC’ da forma como foram publicados. Se por exemplo a publicação não possuir LINK DOI, ou número de páginas, o arquivo ojs.mrc exportado não possuirá esses dados em seus respectivos campos, já que os mesmos não estão disponíveis no artigo original. Nestes casos o campo que deveria constar essa informação ficará em branco para registro manual.

-Sobre Nomes, Sobrenomes e Afiliação, o plugin organizará a informação da forma como consta na publicação, como por exemplo “Aziz Nacib Ab'Saber”, que pode ser organizado como 

=100  1\$aNacib Ab'Saber, Aziz
se na publicação foi registrado como 


ou organizado como 

=100  1\$aAb'Saber, Aziz Nacib
se na publicação original foi organizado como


-Quanto a Instituição/Afiliação dos autores, no registro MARC só constará como autor USP, se na publicação a mesma informação estiver registrada


Caso o autor seja da USP e essa informação não esteja registrada, contará como autor externo, devendo ser modificado manualmente.
