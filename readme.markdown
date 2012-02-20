#### PHP | Joomla | Quickstart of Joomla extension

Look inside each directory for more info

All subdiretories here contains one quickstart for some diferent types of Joomla extensions. The next
code show how you clone *only* one subdirectory and mantain his history on your project. This is good
for how will start from one of this quickstarts, but not recomended for how will pack more than one
extension in one same git repository. At least if sources are from diferent places than this one.


<pre>
#Clone entire repository
git clone --no-hardlinks git@github.com:fititnt/joomla-quickstart.git.
#Choose subdirectory. library/simple, for example
git filter-branch --subdirectory-filter joomla/ HEAD
#clean up what is not necessary
rm -rf .git/refs/original/
git reflog expire --expire=now --all
git gc --aggressive --prune=now
</pre>

Reference: http://stackoverflow.com/questions/359424/detach-subdirectory-into-separate-git-repository

TIP 1: after clone, maybe you wanna change the origin from this repository to your repository git. You
can do changing /.git/config file, whre have ```"url = git@github.com:fititnt/joomla-quickstart.git"``` to
your repository.

TIP 2: digit gitk command on command line and will open one Git commit viewer 

#### Terms of Use (en)

@todo write here (fititnt, 2012-02-19 22:16)

#### Termos de Uso (pt)

Exceto aonde estiver explicitado outro autor, todo o código deste repositório é 
de minha autoria e você deverá respeitar estes termos de uso além do que estiver
definido especificamente em cada um dos readme's.

Ainda que os respectivos readme's sejam flexíveis a como pode exposto a autoria
destes códigos, esta lógica _não_ se aplica a materiais voltados a ensino, tanto
presenciais como por escrito, com ou sem retorno financeiro. Explicitamente:
você não pode se passar pelo autor, ou implicitamente intencionalmente não
deixar claro o que foi feito por você e o que foi feito por mim. Ou seja, em
slides de uma palestra é perfeitamente aceitável indicar referências apenas no
final, porém em material impresso, ou situações típicas aonde é comum citar a
referência a um fotografo ou uma tabela de dados, você deveria deixar explicito
o autor.

Qualquer violação disso, favor reportarem em emerson at webdesign.eng.br
