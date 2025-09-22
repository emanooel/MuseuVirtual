-- MySQL dump modificado para evitar conflitos de chave primária
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Inserindo dados na tabela `rochas` (sem especificar IDs)
--
--
INSERT INTO `rochas` (`created_at`, `updated_at`, `nome`, `slug`, `descricao`, `composicao`, `tipo`) VALUES 
('2025-07-30 16:49:08','2025-07-30 16:49:08','Gabro','gabro','<p style=\"text-align: center;\">Rocha intrusiva b&aacute;sica maci&ccedil;a, faner&iacute;tica, com alto teor de minerais m&aacute;ficos (pirox&ecirc;nio).</p>','minerais máficos (piroxênio)','1'),
('2025-07-30 16:52:25','2025-07-30 16:52:25','Granito','granito','<p><span class=\"C9DxTc \">Rocha intrusiva &aacute;cida, maci&ccedil;a, faner&iacute;tica e equigranular m&eacute;dia.&nbsp;</span><span class=\"C9DxTc \">Sua composi&ccedil;&atilde;o consiste em q</span><span class=\"C9DxTc \">uartzo, feldspatos alcalinos (ortoclase, sanidina e microclina) e minerais ferromagnesianos (biotite e moscovite).&nbsp;</span></p>','Quartzo, feldspatos alcalinos (ortoclase, sanidina e microclina) e minerais ferromagnesianos (biotite e moscovite).','1'),
('2025-07-30 16:54:46','2025-07-30 16:54:46','Nefelina Sienito Com Sodalita','nefelina-sienito-com-sodalita','<p>Nefelina sienito &eacute; uma rocha &iacute;gnea rica em feldspatos s&oacute;dicos,&nbsp; praticamente livre de quartzo, com a presen&ccedil;a de minerais ferromagnesianos, tais como: pirox&ecirc;nio s&oacute;dico, anfib&oacute;lio alcalino e biotita. A rocha ocorre, em&nbsp; geral, na forma irregular em corpos intrusivos de tamanhos variados, sua textura &eacute; do tipo gran&iacute;tica ou gn&aacute;issica, cuja individualiza&ccedil;&atilde;o dos gr&atilde;os se obt&eacute;m na&nbsp; granulometria que varia desde poucos mil&iacute;metros at&eacute; 100 &micro;m.</p>','Rica em feldspatos sódicos,  praticamente livre de quartzo, com a presença de minerais ferromagnesianos, tais como: piroxênio sódico, anfibólio alcalino e biotita.','1'),
('2025-07-30 16:57:04','2025-07-30 16:57:04','Andesito','andesito','<p><span class=\"C9DxTc \">Rocha intermedi&aacute;ria, normalmente porfir&iacute;tica, que consiste em plagiocl&aacute;sio&nbsp;</span><span class=\"C9DxTc \">&nbsp;</span><span class=\"C9DxTc \">(frequentemente zonado e variando de labradorita a oligocl&aacute;sio), pirox&ecirc;nio, hornblenda</span><span class=\"C9DxTc \">&nbsp;</span><span class=\"C9DxTc \">e/ou biotita.</span></p>','Plagioclásio  (frequentemente zonado e variando de labradorita a oligoclásio), piroxênio, hornblenda  e/ou biotita.','1'),
('2025-07-30 16:59:21','2025-07-30 16:59:21','Basalto','basalto','<p><span class=\"C9DxTc \">Os basaltos s&atilde;o rochas vulc&acirc;nicas abundantes no planeta e formam derrames extensos de lava em muitas regi&otilde;es. Pertencem &agrave; categoria das rochas &iacute;gneas, as quais s&atilde;o formadas pelo resfriamento e conseq&uuml;ente solidifica&ccedil;&atilde;o do magma, o qual &eacute; constitu&iacute;do principalmente por &oacute;xidos de sil&iacute;cio, alum&iacute;nio, ferro, c&aacute;lcio, magn&eacute;sio, s&oacute;dio e pot&aacute;ssio. O basalto &eacute; constitu&iacute;do basicamente por minerais de sil&iacute;cio, alum&iacute;nio e ferro, na forma de pirox&ecirc;nios (augita), plagiocl&aacute;sios (labradorita) e magnetita. A composi&ccedil;&atilde;o qu&iacute;mica aproximada do basalto &eacute; de 43 a 47% de SiO</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">, 11 a 13% de Al</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">O</span><span class=\"C9DxTc \">3</span><span class=\"C9DxTc \">, 10 a 12% de CaO e 8 a 10% de MgO, al&eacute;m de outros &oacute;xidos que est&atilde;o presentes em percentagens inferiores a 5% .</span><span class=\"C9DxTc \">&nbsp;</span></p>','Minerais de silício, alumínio e ferro, na forma de piroxênios (augita), plagioclásios (labradorita) e magnetita. A composição química aproximada do basalto é de 43 a 47% de SiO2, 11 a 13% de Al2O3, 10 a 12% de CaO e 8 a 10% de MgO, além de outros óxidos que estão presentes em percentagens inferiores a 5% .','1'),
('2025-07-30 17:02:02','2025-07-30 17:02:02','Riolito','riolito','<p><span class=\"C9DxTc \">Riolito &eacute; uma rocha &iacute;gnea vulc&acirc;nica ou extrusiva, composicionalmente similar ao granito. &Eacute; uma rocha rica em s&iacute;lica (SiO</span><span class=\"C9DxTc \">2</span><span class=\"C9DxTc \">&nbsp;&gt; 68%), constitu&iacute;da essencialmente por quartzo, plagiocl&aacute;sio e feldspato alcalino, podendo conter pequenas quantidades de pirox&ecirc;nio e biotita, e menos frequente &eacute; o anfib&oacute;lio. A mineralogia acess&oacute;ria consiste de zirc&atilde;o, magnetita, ilmenita e apatita. A textura da rocha &eacute; afan&iacute;tica, ou seja, com cristais n&atilde;o vis&iacute;veis a olho nu. Riolito com frequ&ecirc;ncia cont&eacute;m fenocristais dos minerais essenciais imersos na matriz muito fina ou v&iacute;trea de mesma composi&ccedil;&atilde;o. O magma riol&iacute;tico &eacute; rico em s&iacute;lica, por isso, muito viscoso, menos fluido que o magma bas&aacute;ltico, e assim raramente alcan&ccedil;a a superf&iacute;cie. E quando alcan&ccedil;a, em geral, provoca erup&ccedil;&otilde;es explosivas, gerando fluxo de cinza vulc&acirc;nica. A lava de composi&ccedil;&atilde;o riol&iacute;tica resfria muito rapidamente quando chega at&eacute; a superf&iacute;cie, e por isso pode formar&nbsp;</span><span class=\"C9DxTc \">vidro vulc&acirc;nico</span><span class=\"C9DxTc \">&nbsp;ou vitr&oacute;firo (vidro com fenocristais), denominado de obsidiana.&nbsp;</span></p>','É uma rocha rica em sílica (SiO2 > 68%), constituída essencialmente por quartzo, plagioclásio e feldspato alcalino, podendo conter pequenas quantidades de piroxênio e biotita, e menos frequente é o anfibólio','1'),
('2025-07-30 17:03:34','2025-07-30 17:03:34','Anfibolito','anfibolito','<p>Anfibolito &eacute; uma rocha metam&oacute;rfica de m&eacute;dio grau metam&oacute;rfico, de colora&ccedil;&atilde;o escura, foliada ou maci&ccedil;a, e constitu&iacute;da predominantemente por anfib&oacute;lio verde escuro (hornblenda) e plagiocl&aacute;sio. Resulta do metamorfismo de rochas &iacute;gneas m&aacute;ficas, como o basalto ou gabro, durante o metamorfismo regional.</p>','Constituída predominantemente por anfibólio verde escuro (hornblenda) e plagioclásio.','2'),
('2025-07-30 17:04:50','2025-07-30 17:04:50','Ardósia','ardosia','<p>Ard&oacute;sias s&atilde;o rochas de deriva&ccedil;&atilde;o sedimentar e granula&ccedil;&atilde;o fina, fracamente metamorfizadas, que desenvolvem planos preferenciais de parti&ccedil;&atilde;o (delamina&ccedil;&atilde;o) correspondentes &agrave; denominada &ldquo;clivagem ardosiana&rdquo;. A clivagem ardosiana deriva de uma forte orienta&ccedil;&atilde;o planar preferencial de escamas de mica branca (sericita) e de clorita. Esta orienta&ccedil;&atilde;o preferencial &eacute; criada por press&atilde;o mec&acirc;nica, por recristaliza&ccedil;&atilde;o mineral&oacute;gica ou por rota&ccedil;&atilde;o dos cristais.</p>','Clivagem ardosiana deriva de uma forte orientação planar preferencial de escamas de mica branca (sericita) e de clorita','2'),
('2025-07-30 17:06:42','2025-07-30 17:06:42','Esteatito ou Pedra Sabão','esteatito-ou-pedra-sabao','<p>Rocha metam&oacute;rfica composta por talco, dolomita e anfib&oacute;lios. O esteatito &eacute; classificado geol&oacute;gicamente como sendo uma rocha metaultram&aacute;fica. As rochas metaultram&aacute;ficas caracterizam-se por tipos petrogr&aacute;ficos variados em fun&ccedil;&atilde;o do grau de transforma&ccedil;&atilde;o metam&oacute;rfica. Tipos completamente metamorfizados s&atilde;o carbonato-talco-serpentina, tremolitito, clorita xisto, serpentinito e esteatito.</p>','Rocha metamórfica composta por talco, dolomita e anfibólios','2'),
('2025-07-30 17:09:48','2025-07-30 17:09:48','Gnaisse','gnaisse','<p>Rocha metam&oacute;rfica de m&eacute;dio a alto grau, portanto, foi submetida a temperaturas e press&otilde;es elevadas. &Eacute; uma das rochas metam&oacute;rficas mais comum. Pode ser formada pelo metamorfismo do granito, ou de rochas sedimentares quartzo-argilosas.&nbsp;</p>','Pode ser formada pelo metamorfismo do granito, ou de rochas sedimentares quartzo-argilosas','2'),
('2025-07-30 17:11:20','2025-07-30 17:11:20','Quartzito','quartzito','<p>A origem dessa rocha est&aacute; associada a processos metam&oacute;rficos sofridos por rochas de origem sedimentar e que tamb&eacute;m s&atilde;o ricas em quartzo, como os arenitos e cherts. Portanto &eacute; uma rocha metam&oacute;rfica que &eacute; composta quase que totalmente de gr&atilde;os de quartzo.A transforma&ccedil;&atilde;o em quartzito atrav&eacute;s dos arenitos acontece a alta press&atilde;o e temperatura, quando devido a movimentos tect&ocirc;nicos os arenitos s&atilde;o postos em zonas profundas da terra. Os gr&atilde;os de quartzo doarenito recristalizam-se nesse caso e os restos dos sedimentos da rocha original somem, dando origem a rocha metam&oacute;rfica quartzito. &Eacute; muito comum a presen&ccedil;a de mica na constitui&ccedil;&atilde;o dos quartzitos, esse fato revela a exist&ecirc;ncia de uma matriz argilosa nos arenitos.</p>','Composta quase que totalmente de grãos de quartzo','2'),
('2025-07-30 17:13:44','2025-07-30 17:13:44','Xisto','xisto','<p>Rocha metam&oacute;rfica caracterizada por uma folia&ccedil;&atilde;o marcada pela presen&ccedil;a de minerais plac&oacute;ides, como as micas, vis&iacute;veis a olho nu e orientados em folhas paralelas. A folia&ccedil;&atilde;o t&iacute;pica dos xistos &eacute; denominada de xistosidade, que se forma quando rochas s&atilde;o submetidas a mais altas press&otilde;es e temperaturas, acompanhadas de deforma&ccedil;&atilde;o.</p>','Presença de minerais placóides, como as micas, visíveis a olho nu e orientados em folhas paralelas.','2'),
('2025-07-30 17:16:18','2025-07-30 17:16:18','Arenito','arenito','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">O arenito &eacute; uma&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Clastic_rock#Sedimentary_clastic_rocks\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">rocha sedimentar cl&aacute;stica</span></a><span class=\"C9DxTc \">&nbsp;composta principalmente por gr&atilde;os&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Silicate_mineral\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">de silicato&nbsp;</span></a><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Grain_size\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">do tamanho de areia</span></a><span class=\"C9DxTc \">&nbsp;(0,0625 a 2 mm) . Os arenitos compreendem cerca de 20&ndash;25% de todas as&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Sedimentary_rock\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">rochas sedimentares</span></a><span class=\"C9DxTc \">&nbsp;.&nbsp;</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">A maior parte do arenito &eacute; composta de&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Quartz\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">quartzo</span></a><span class=\"C9DxTc \">&nbsp;ou&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Feldspar\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">feldspato</span></a><span class=\"C9DxTc \">&nbsp;(ambos&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Silicate\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">silicatos</span></a><span class=\"C9DxTc \">&nbsp;) porque s&atilde;o os&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Mineral\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">minerais</span></a><span class=\"C9DxTc \">&nbsp;mais resistentes aos processos&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Weathering\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">de intemperismo</span></a><span class=\"C9DxTc \">&nbsp;na superf&iacute;cie da Terra. Assim como&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Sand\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">a areia</span></a><span class=\"C9DxTc \">&nbsp;n&atilde;o cimentada, o arenito pode ter qualquer cor devido &agrave;s impurezas dos minerais, mas as cores mais comuns s&atilde;o bege, marrom, amarelo, vermelho, cinza, rosa, branco e preto. Uma vez que os leitos de arenito frequentemente formam fal&eacute;sias altamente vis&iacute;veis e outras caracter&iacute;sticas&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Topography\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">topogr&aacute;ficas</span></a><span class=\"C9DxTc \">&nbsp;, certas cores de arenito foram fortemente identificadas com certas regi&otilde;es.</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">As forma&ccedil;&otilde;es rochosas compostas principalmente por arenito geralmente permitem a&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Percolation\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">percola&ccedil;&atilde;o</span></a><span class=\"C9DxTc \">&nbsp;de &aacute;gua e outros fluidos e s&atilde;o&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Porosity\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">porosas</span></a><span class=\"C9DxTc \">&nbsp;o suficiente para armazenar grandes quantidades, tornando-as valiosos&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Aquifer\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">aqu&iacute;feros</span></a><span class=\"C9DxTc \">&nbsp;e&nbsp;</span><a class=\"XqQF9c\" href=\"https://en.wikipedia.org/wiki/Petroleum_reservoir\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">reservat&oacute;rios de petr&oacute;leo</span></a><span class=\"C9DxTc \">&nbsp;.&nbsp;</span></p>','composta principalmente por grãos de silicato(Quartzo, feldspato e outros do tamanho de areia (0,0625 a 2 mm)','3'),
('2025-07-30 17:17:32','2025-07-30 17:17:32','Argilito','argilito','<div class=\"CjVfdc\"><span class=\"C9DxTc \">Rocha sedimentar cl&aacute;stica muito fina, a mais fina entre as rochas cl&aacute;sticas, cujos componentes s&atilde;o menores que 0,062 mm, de tamanhos microsc&oacute;picos. Por serem muito finas e constitu&iacute;das por argilominerais, fra&ccedil;&atilde;o argila, essas rochas apresentam-se de forma pl&aacute;stica, permitindo serem moldadas, por isso &eacute; muito usada para produ&ccedil;&atilde;o de cer&acirc;micas. O equivalente n&atilde;o solidificado dos argilitos &eacute; a argila, ou &ldquo;barro&rdquo; como &eacute; popularmente conhecido.&nbsp;</span></div>\r\n<h2 id=\"h.tnvfejovl7kz_l\" class=\"zfr3Q JYVBee CDt4Ke \" dir=\"ltr\"></h2>','constituídas por argilominerais','3'),
('2025-07-30 17:19:52','2025-07-30 17:19:52','Calcário','calcário','<p><span class=\"C9DxTc \">Podemos&nbsp; chamar de r</span><span class=\"C9DxTc \">ochas sedimentares carbon&aacute;ticas que englobam calc&aacuter;rios calc&iacute;ticos e&nbsp;</span><a class=\"XqQF9c\" href=\"https://didatico.igc.usp.br/rochas/sedimentares/dolomito\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">calc&aacute;rios dolom&iacute;ticos</span></a><span class=\"C9DxTc \">. S&atilde;o rochas sedimentares geralmente formadas em antigos mares, por a&ccedil;&atilde;o de microoganismos, como algas e cianobact&eacute;rias (que n&atilde;o &eacute; nem uma alga e nem uma bact&eacute;ria). Por isso pode-se dizer que os calc&aacute;rios n&atilde;o se depositam e nem se precipitam, mas sim &ldquo;crescem&rdquo;. Por vezes a rela&ccedil;&atilde;o gen&eacute;tica com organismos &eacute; direta, podendo-se observar corais ou ac&uacute;mulo de conchas, mas grande quantidade de calc&aacute;rio &eacute; formada pela deposi&ccedil;&atilde;o de lama calc&aacute;ria (n&atilde;o confundir com lama de argila) produzida pela a&ccedil;&atilde;o de cianobact&eacute;rias, ou seja, sedimentos cl&aacute;sticos.</span></p>','Deposição de lama calcária','3'),
('2025-07-30 17:21:00','2025-07-30 17:21:00','Caulinita','caulinita','<p>A caulinita, cuja estrutura foi proposta por Linus Pauling (1930), &eacute; um argilomineral do tipo 1:1 dioctaedral, abundantemente encontrado nos sedimentos de fundo e solos da Terra. Produto da transforma&ccedil;&atilde;o de minerais prim&aacute;rios e secund&aacute;rios, por exemplo, feldspatos e argilominerais do tipo 2:1.</p>','Argilomineral do tipo 1:1 dioctaedral,','3'),
('2025-07-30 17:24:11','2025-07-30 17:24:11','Carvão Mineral','carvao-mineral','<p><span class=\"C9DxTc \">O carv&atilde;o mineral &eacute; uma&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Rocha_sedimentar\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">rocha sedimentar</span></a><span class=\"C9DxTc \">&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Combust%C3%ADvel_f%C3%B3ssil\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">combust&iacute;vel</span></a><span class=\"C9DxTc \">, de cor&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Preto\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">preta</span></a><span class=\"C9DxTc \">&nbsp;ou&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Marrom\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">marrom</span></a><span class=\"C9DxTc \">, que ocorre em&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Estrato_geol%C3%B3gico\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">estratos</span></a><span class=\"C9DxTc \">&nbsp;chamados camadas de carv&atilde;o. As formas mais&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Dureza\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">duras</span></a><span class=\"C9DxTc \">, como o&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Antracito\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">antracito</span></a><span class=\"C9DxTc \">, podem ser consideradas&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Rochas_metam%C3%B3rficas\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">rochas metam&oacute;rficas</span></a><span class=\"C9DxTc \">&nbsp;devido &agrave; posterior exposi&ccedil;&atilde;o &agrave;&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Temperatura\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">temperatura</span></a><span class=\"C9DxTc \">&nbsp;e&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Press%C3%A3o\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">press&atilde;o</span></a><span class=\"C9DxTc \">&nbsp;elevadas. &Eacute; composto basicamente por&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Carbono\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">carbono</span></a><span class=\"C9DxTc \">,&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Enxofre\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">enxofre</span></a><span class=\"C9DxTc \">,&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Hidrog%C3%AAnio\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">hidrog&ecirc;nio</span></a><span class=\"C9DxTc \">,&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Oxig%C3%AAnio\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">oxig&ecirc;nio</span></a><span class=\"C9DxTc \">&nbsp;e&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Nitrog%C3%AAnio\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">nitrog&ecirc;nio</span></a><span class=\"C9DxTc \">, al&eacute;m de elementos vestigiais. Quanto maior o teor de carbono, mais puro se considera. Existem quatro tipos principais de carv&atilde;o mineral:&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Turfa\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">turfa</span></a><span class=\"C9DxTc \">,&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Linhito\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">linhito</span></a><span class=\"C9DxTc \">,&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Hulha\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">hulha</span></a><span class=\"C9DxTc \">&nbsp;e&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Antracito\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">antracito</span></a><span class=\"C9DxTc \">&nbsp;(em ordem crescente do teor de carbono). &Eacute; extra&iacute;do do solo por&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Minera%C3%A7%C3%A3o_a_c%C3%A9u_aberto\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">minera&ccedil;&atilde;o a c&eacute;u aberto</span></a><span class=\"C9DxTc \">&nbsp;ou subterr&acirc;nea.&nbsp;</span></p>','É composto basicamente por carbono, enxofre, hidrogênio, oxigênio e nitrogênio, além de elementos vestigiais','3'),
('2025-07-30 17:26:28','2025-07-30 17:26:28','Crocidolita Silicificada ou Olho de Tigre','crocidolita-silicificada-ou-olho-de-tigre','<p><span class=\"C9DxTc \">Olho de tigre (tamb&eacute;m chamado tiger eye) &eacute; uma&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Gema_%28mineralogia%29\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">gema</span></a><span class=\"C9DxTc \">&nbsp;que exibe&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/w/index.php?title=Acatassolamento&amp;action=edit&amp;redlink=1\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">acatassolamento</span></a><span class=\"C9DxTc \">&nbsp;apresentando normalmente cor amarela a vermelho-marrom, com um&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Lustre\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">lustre</span></a><span class=\"C9DxTc \">&nbsp;sedoso. Trata-se de&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Crocidolita\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">crocidolita</span></a><span class=\"C9DxTc \">&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Silicato_%28minerais%29\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">silicificada</span></a><span class=\"C9DxTc \">, um cl&aacute;ssico exemplo de&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Pseudomorfismo\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">pseudomorfismo</span></a><span class=\"C9DxTc \">. Uma variedade de n&atilde;o totalmente silicificada &eacute; chamada&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/w/index.php?title=Olho_de_falc%C3%A3o&amp;action=edit&amp;redlink=1\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">olho de falc&atilde;o</span></a><span class=\"C9DxTc \">. Um membro do grupo do&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.wikipedia.org/wiki/Quartzo\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">quartzo</span></a><span class=\"C9DxTc \">, suas propriedades f&iacute;sicas e visuais s&atilde;o id&ecirc;nticas ou muito pr&oacute;ximas &agrave;s propriedades de um cristal simples de quartzo.</span></p>','É uma gema que exibe acatassolamento','3'),
('2025-07-30 17:30:38','2025-07-30 17:30:38','Conglomerado','conglomerado','<p>Rocha sedimentar cl&aacute;stica, constitu&iacute;da por seixos arredondados (&gt; 2 mm) de outras rochas e minerais. Os seixos ficam imersos e consolidados geralmente numa matriz de areia (gr&atilde;os entre 0,062 e 2,0 mm). Quando ocorre predom&iacute;nio da matriz sobre o clastos, esse &eacute; denominado de paraconglomerado, e quando o predom&iacute;nio &eacute; dos clastos sobre a matriz, esse &eacute; denominado de ortoconglomerado. Os seixos que comp&otilde;em os conglomerados s&atilde;o materiais acumulados encontrados nos leitos e margens de rios; junto a esses materiais tamb&eacute;m pode haver concentra&ccedil;&atilde;o de ouro ou diamante.</p>','Materiais acumulados encontrados nos leitos e margens de rios','3'),
('2025-07-30 17:32:42','2025-07-30 17:32:42','Coral Calcário','coral-calcario','<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">O calc&aacute;rio coral &eacute; uma&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/Roche_s%C3%A9dimentaire\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">rocha&nbsp;</span></a><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/Calcaire\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">calc&aacute;ria&nbsp;</span></a><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/Roche_s%C3%A9dimentaire\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">sedimentar&nbsp;</span></a><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/Bioconstruction\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">bioconstruita</span></a><span class=\"C9DxTc \">&nbsp;de origem oce&acirc;nica. Surge das concre&ccedil;&otilde;es acumuladas de&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/Corail\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">corais</span></a><span class=\"C9DxTc \">&nbsp;,&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/Porifera\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">esponjas do mar</span></a><span class=\"C9DxTc \">&nbsp;e outros organismos marinhos ao longo das costas e em mares rasos.</span></p>\r\n<p class=\"zfr3Q CDt4Ke \" dir=\"ltr\"><span class=\"C9DxTc \">Hoje, os leitos de calc&aacute;rio de coral s&atilde;o produzidos principalmente por&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/Scleractinia\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">corais duros</span></a><span class=\"C9DxTc \">&nbsp;. Esses organismos t&ecirc;m a capacidade de secretar calc&aacute;rio em sua base. Ao longo dos mil&ecirc;nios, eles d&atilde;o origem a altos recifes de algumas dezenas a v&aacute;rias centenas de metros. O calc&aacute;rio coral, por a&ccedil;&atilde;o da&nbsp;</span><a class=\"XqQF9c\" href=\"https://pt.frwiki.wiki/wiki/%C3%89rosion_marine\" target=\"_blank\" rel=\"noopener\"><span class=\"C9DxTc \">eros&atilde;o marinha</span></a><span class=\"C9DxTc \">&nbsp;ou terremotos, tamb&eacute;m &eacute; encontrado na forma de seixos (giz): muitas vezes, podemos reconhecer nessas pedras vest&iacute;gios dos corais de onde se originam.</span></p>','Leitos de calcário de coral são produzidos principalmente por corais duros . Esses organismos têm a capacidade de secretar calcário em sua base','3'),
('2025-07-30 17:34:16','2025-07-30 17:34:16','Filito','filito','<p>Rocha metassedimentar, formada a partir de uma rocha sedimentar argilosa que sofre metamorfismo de baixo grau. O filito apresenta uma folia&ccedil;&atilde;o muito fina, brilho reluzente, prateado, e &eacute; constitu&iacute;do essencialmente por muscovita, clorita e quartzo.&nbsp;</p>','Constituído essencialmente por muscovita, clorita e quartzo.','3'),
('2025-07-30 17:36:31','2025-07-30 17:36:31','Sílex','silex','<p><span class=\"C9DxTc \">Sliex</span><span class=\"C9DxTc \">&nbsp;&eacute; uma rocha sedimentar silicatada, constitu&iacute;da de quartzo criptocristalino, muito dura e com elevada densidade. Apresenta-se geralmente compacta, de cor cinzenta, negra e outras. Com fratura conchoidal. Ocorre sob a forma de n&oacute;dulos ou massas em forma&ccedil;&otilde;es de giz ou calc&aacute;rio. Pode apresentar v&aacute;rias impurezas como argilas, carbonato, silte, pirita e mat&eacute;ria org&acirc;nica.</span><span class=\"C9DxTc \">&nbsp;</span><span class=\"C9DxTc \">&nbsp;</span></p>','Constituída de quartzo criptocristalino','3'),
('2025-07-30 17:39:03','2025-07-30 17:39:03','Siltito','siltito','<p>Rocha sedimentar mais fina, com gr&atilde;os entre O,062 e 0,004 mm, sendo que o que a diferen&ccedil;a dos arenitos &eacute; apenas o tamanho dos gr&atilde;os, sendo mais fina. Apesar de muito fina, &eacute; poss&iacute;vel ainda sentir a aspereza da rocha, que permite identificar que &eacute; constitu&iacute;da por gr&atilde;os.&nbsp;</p>','Constítuida por grãos','3');

--
-- Script para inserir fotos relacionadas às novas rochas
-- IMPORTANTE: Execute este script APÓS executar o script das rochas
-- e substitua os valores @rocha_X pelo ID real das rochas inseridas
--

-- Obter IDs das rochas recém-inseridas
SET @rocha_gabro = (SELECT id FROM rochas WHERE nome = 'Gabro' ORDER BY created_at DESC LIMIT 1);
SET @rocha_granito = (SELECT id FROM rochas WHERE nome = 'Granito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_nefelina = (SELECT id FROM rochas WHERE nome = 'Nefelina Sienito Com Sodalita' ORDER BY created_at DESC LIMIT 1);
SET @rocha_andesito = (SELECT id FROM rochas WHERE nome = 'Andesito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_basalto = (SELECT id FROM rochas WHERE nome = 'Basalto' ORDER BY created_at DESC LIMIT 1);
SET @rocha_riolito = (SELECT id FROM rochas WHERE nome = 'Riolito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_anfibolito = (SELECT id FROM rochas WHERE nome = 'Anfibolito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_ardosia = (SELECT id FROM rochas WHERE nome = 'Ardósia' ORDER BY created_at DESC LIMIT 1);
SET @rocha_esteatito = (SELECT id FROM rochas WHERE nome = 'Esteatito ou Pedra Sabão' ORDER BY created_at DESC LIMIT 1);
SET @rocha_gnaisse = (SELECT id FROM rochas WHERE nome = 'Gnaisse' ORDER BY created_at DESC LIMIT 1);
SET @rocha_quartzito = (SELECT id FROM rochas WHERE nome = 'Quartzito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_xisto = (SELECT id FROM rochas WHERE nome = 'Xisto' ORDER BY created_at DESC LIMIT 1);
SET @rocha_arenito = (SELECT id FROM rochas WHERE nome = 'Arenito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_argilito = (SELECT id FROM rochas WHERE nome = 'Argilito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_calcario = (SELECT id FROM rochas WHERE nome = 'Calcário' ORDER BY created_at DESC LIMIT 1);
SET @rocha_caulinita = (SELECT id FROM rochas WHERE nome = 'Caulinita' ORDER BY created_at DESC LIMIT 1);
SET @rocha_carvao = (SELECT id FROM rochas WHERE nome = 'Carvão Mineral' ORDER BY created_at DESC LIMIT 1);
SET @rocha_crocidolita = (SELECT id FROM rochas WHERE nome = 'Crocidolita Silicificada ou Olho de Tigre' ORDER BY created_at DESC LIMIT 1);
SET @rocha_conglomerado = (SELECT id FROM rochas WHERE nome = 'Conglomerado' ORDER BY created_at DESC LIMIT 1);
SET @rocha_coral = (SELECT id FROM rochas WHERE nome = 'Coral Calcário' ORDER BY created_at DESC LIMIT 1);
SET @rocha_filito = (SELECT id FROM rochas WHERE nome = 'Filito' ORDER BY created_at DESC LIMIT 1);
SET @rocha_silex = (SELECT id FROM rochas WHERE nome = 'Sílex' ORDER BY created_at DESC LIMIT 1);
SET @rocha_siltito = (SELECT id FROM rochas WHERE nome = 'Siltito' ORDER BY created_at DESC LIMIT 1);

-- Inserir fotos para cada rocha
INSERT INTO `fotos` (`created_at`, `updated_at`, `idRocha`, `idMineral`, `idJazida`, `capa`, `caminho`) VALUES 
-- Fotos do Gabro
('2025-07-30 16:49:08','2025-07-30 16:49:08',@rocha_gabro,NULL,NULL,0,'fotos/rochas/1753894148_Gabro4.jpg'),
('2025-07-30 16:49:08','2025-07-30 16:49:08',@rocha_gabro,NULL,NULL,0,'fotos/rochas/1753894148_Gabro3.jpg'),
('2025-07-30 16:49:08','2025-07-30 16:49:08',@rocha_gabro,NULL,NULL,0,'fotos/rochas/1753894148_Gabro2.jpg'),
('2025-07-30 16:49:08','2025-07-30 16:49:08',@rocha_gabro,NULL,NULL,1,'fotos/rochas/1753894148_Gabro1.jpg'),

-- Fotos do Granito
('2025-07-30 16:52:25','2025-07-30 16:52:25',@rocha_granito,NULL,NULL,0,'fotos/rochas/1753894345_Gra4.jpg'),
('2025-07-30 16:52:25','2025-07-30 16:52:25',@rocha_granito,NULL,NULL,0,'fotos/rochas/1753894345_Gra3.jpg'),
('2025-07-30 16:52:25','2025-07-30 16:52:25',@rocha_granito,NULL,NULL,0,'fotos/rochas/1753894345_Gra2.jpg'),
('2025-07-30 16:52:25','2025-07-30 16:52:25',@rocha_granito,NULL,NULL,1,'fotos/rochas/1753894345_Gra1.jpg'),

-- Fotos da Nefelina Sienito
('2025-07-30 16:54:46','2025-07-30 16:54:46',@rocha_nefelina,NULL,NULL,0,'fotos/rochas/1753894486_NS8.jpg'),
('2025-07-30 16:54:46','2025-07-30 16:54:46',@rocha_nefelina,NULL,NULL,0,'fotos/rochas/1753894486_NS7.jpg'),
('2025-07-30 16:54:46','2025-07-30 16:54:46',@rocha_nefelina,NULL,NULL,0,'fotos/rochas/1753894486_NS5.jpg'),
('2025-07-30 16:54:46','2025-07-30 16:54:46',@rocha_nefelina,NULL,NULL,0,'fotos/rochas/1753894486_NS4.jpg'),
('2025-07-30 16:54:46','2025-07-30 16:54:46',@rocha_nefelina,NULL,NULL,1,'fotos/rochas/1753894486_Ns1.jpg'),

-- Fotos do Andesito
('2025-07-30 16:57:04','2025-07-30 16:57:04',@rocha_andesito,NULL,NULL,0,'fotos/rochas/1753894624_AS5.jpg'),
('2025-07-30 16:57:04','2025-07-30 16:57:04',@rocha_andesito,NULL,NULL,0,'fotos/rochas/1753894624_AS4.jpg'),
('2025-07-30 16:57:04','2025-07-30 16:57:04',@rocha_andesito,NULL,NULL,0,'fotos/rochas/1753894624_AS3.jpg'),
('2025-07-30 16:57:04','2025-07-30 16:57:04',@rocha_andesito,NULL,NULL,0,'fotos/rochas/1753894624_A2.jpg'),
('2025-07-30 16:57:04','2025-07-30 16:57:04',@rocha_andesito,NULL,NULL,1,'fotos/rochas/1753894624_A1.jpg'),

-- Fotos do Basalto
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B12.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_b11.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B10.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_b9.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B8.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B7.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B6.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B5.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B4.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B3.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,0,'fotos/rochas/1753894761_B2.jpg'),
('2025-07-30 16:59:21','2025-07-30 16:59:21',@rocha_basalto,NULL,NULL,1,'fotos/rochas/1753894761_B1.jpg'),

-- Fotos do Riolito
('2025-07-30 17:02:02','2025-07-30 17:02:02',@rocha_riolito,NULL,NULL,1,'fotos/rochas/1753894922_R6.jpg'),
('2025-07-30 17:02:02','2025-07-30 17:02:02',@rocha_riolito,NULL,NULL,0,'fotos/rochas/1753894922_F5.jpg'),
('2025-07-30 17:02:02','2025-07-30 17:02:02',@rocha_riolito,NULL,NULL,0,'fotos/rochas/1753894922_R4.jpg'),
('2025-07-30 17:02:02','2025-07-30 17:02:02',@rocha_riolito,NULL,NULL,0,'fotos/rochas/1753894922_R3.jpg'),
('2025-07-30 17:02:03','2025-07-30 17:02:03',@rocha_riolito,NULL,NULL,0,'fotos/rochas/1753894923_R2.jpg'),
('2025-07-30 17:02:03','2025-07-30 17:02:03',@rocha_riolito,NULL,NULL,0,'fotos/rochas/1753894923_R1.jpg'),

-- Fotos do Anfibolito
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa11.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa9.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa8.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa7.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa6.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa5.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa4.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa3.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,0,'fotos/rochas/1753895014_Aa2.jpg'),
('2025-07-30 17:03:34','2025-07-30 17:03:34',@rocha_anfibolito,NULL,NULL,1,'fotos/rochas/1753895014_Aa1.jpg'),

-- Fotos da Ardósia
('2025-07-30 17:04:50','2025-07-30 17:04:50',@rocha_ardosia,NULL,NULL,0,'fotos/rochas/1753895090_AR4.jpg'),
('2025-07-30 17:04:50','2025-07-30 17:04:50',@rocha_ardosia,NULL,NULL,0,'fotos/rochas/1753895090_AR3.jpg'),
('2025-07-30 17:04:50','2025-07-30 17:04:50',@rocha_ardosia,NULL,NULL,0,'fotos/rochas/1753895090_Ar2.jpg'),
('2025-07-30 17:04:50','2025-07-30 17:04:50',@rocha_ardosia,NULL,NULL,1,'fotos/rochas/1753895090_Ar1.jpg'),

-- Fotos do Esteatito
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E10.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E9.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E8.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E7.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E6.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E5.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E4.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E3.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,0,'fotos/rochas/1753895202_E2.jpg'),
('2025-07-30 17:06:42','2025-07-30 17:06:42',@rocha_esteatito,NULL,NULL,1,'fotos/rochas/1753895202_E1.jpg'),

-- Fotos do Gnaisse
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G19.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G18.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G17.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G16.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,1,'fotos/rochas/1753895388_G15.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G14.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G13.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G12.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G11.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G10.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_g9.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G8.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G7.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G6.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G4.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G3.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G2.jpg'),
('2025-07-30 17:09:48','2025-07-30 17:09:48',@rocha_gnaisse,NULL,NULL,0,'fotos/rochas/1753895388_G1.jpg'),

-- Fotos do Quartzito
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q9.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q8.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q7.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q6.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q5.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q4.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q3.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,1,'fotos/rochas/1753895480_Q2.jpg'),
('2025-07-30 17:11:20','2025-07-30 17:11:20',@rocha_quartzito,NULL,NULL,0,'fotos/rochas/1753895480_Q1.jpg'),

-- Fotos do Xisto
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X20.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X19.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X18.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X17.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X16.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X15.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X14.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X13.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X12.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X11.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X10.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,1,'fotos/rochas/1753895624_X9.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X8.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X7.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X6.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X5.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X4.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X3.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X2.jpg'),
('2025-07-30 17:13:44','2025-07-30 17:13:44',@rocha_xisto,NULL,NULL,0,'fotos/rochas/1753895624_X1.jpg'),

-- Continuar com as demais rochas...
-- Fotos do Arenito
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A19.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A18.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A17.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A16.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A15.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A14.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A13.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A12.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A11.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A10.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A9.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A8.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,1,'fotos/rochas/1753895778_A6.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A5.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A4.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A3.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A2.jpg'),
('2025-07-30 17:16:18','2025-07-30 17:16:18',@rocha_arenito,NULL,NULL,0,'fotos/rochas/1753895778_A1.jpg'),

-- Fotos do Argilito
('2025-07-30 17:17:32','2025-07-30 17:17:32',@rocha_argilito,NULL,NULL,0,'fotos/rochas/1753895852_A9.jpg'),
('2025-07-30 17:17:32','2025-07-30 17:17:32',@rocha_argilito,NULL,NULL,0,'fotos/rochas/1753895852_A6.jpg'),
('2025-07-30 17:17:32','2025-07-30 17:17:32',@rocha_argilito,NULL,NULL,0,'fotos/rochas/1753895852_A5.jpg'),
('2025-07-30 17:17:32','2025-07-30 17:17:32',@rocha_argilito,NULL,NULL,1,'fotos/rochas/1753895852_A4.jpg'),
('2025-07-30 17:17:32','2025-07-30 17:17:32',@rocha_argilito,NULL,NULL,0,'fotos/rochas/1753895852_A3.jpg'),
('2025-07-30 17:17:32','2025-07-30 17:17:32',@rocha_argilito,NULL,NULL,0,'fotos/rochas/1753895852_A2.jpg'),
('2025-07-30 17:17:32','2025-07-30 17:17:32',@rocha_argilito,NULL,NULL,0,'fotos/rochas/1753895852_A1.jpg'),

-- Fotos do Calcário
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C23.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C22.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C21.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C20.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C17.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C16.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C15.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C14.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C13.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C12.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C8.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C7.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,1,'fotos/rochas/1753895992_C6.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C5.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C4.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C3.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C2.jpg'),
('2025-07-30 17:19:52','2025-07-30 17:19:52',@rocha_calcario,NULL,NULL,0,'fotos/rochas/1753895992_C1.jpg'),

-- Fotos da Caulinita
('2025-07-30 17:21:00','2025-07-30 17:21:00',@rocha_caulinita,NULL,NULL,0,'fotos/rochas/1753896060_C4.jpg'),
('2025-07-30 17:21:00','2025-07-30 17:21:00',@rocha_caulinita,NULL,NULL,0,'fotos/rochas/1753896060_C3.jpg'),
('2025-07-30 17:21:00','2025-07-30 17:21:00',@rocha_caulinita,NULL,NULL,0,'fotos/rochas/1753896060_C2.jpg'),
('2025-07-30 17:21:00','2025-07-30 17:21:00',@rocha_caulinita,NULL,NULL,1,'fotos/rochas/1753896060_C1.jpg'),

-- Fotos do Carvão Mineral
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC10.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,1,'fotos/rochas/1753896251_CC9.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC8.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC7.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC6.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC5.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC4.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC3.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC2.jpg'),
('2025-07-30 17:24:11','2025-07-30 17:24:11',@rocha_carvao,NULL,NULL,0,'fotos/rochas/1753896251_CC1.jpg'),

-- Fotos da Crocidolita Silicificada
('2025-07-30 17:26:28','2025-07-30 17:26:28',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896388_S19.jpg'),
('2025-07-30 17:26:28','2025-07-30 17:26:28',@rocha_crocidolita,NULL,NULL,1,'fotos/rochas/1753896388_S18.jpg'),
('2025-07-30 17:26:28','2025-07-30 17:26:28',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896388_S17.jpg'),
('2025-07-30 17:26:28','2025-07-30 17:26:28',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896388_S16.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S15.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S14.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S13.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S11.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S10.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S9.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S8.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S7.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S6.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S5.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S4.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S2.jpg'),
('2025-07-30 17:26:29','2025-07-30 17:26:29',@rocha_crocidolita,NULL,NULL,0,'fotos/rochas/1753896389_S1.jpg'),

-- Fotos do Conglomerado
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A21.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A20.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A19.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A18.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A16.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A15.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A14.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A13.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A12.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A11.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,1,'fotos/rochas/1753896638_A10.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A9.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A8.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A7.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A17.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A6.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A5.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A4.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_S3.jpg'),
('2025-07-30 17:30:38','2025-07-30 17:30:38',@rocha_conglomerado,NULL,NULL,0,'fotos/rochas/1753896638_A2.jpg'),

-- Fotos do Coral Calcário
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z14.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z13.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z12.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z11.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z10.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z9.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z8.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,1,'fotos/rochas/1753896762_z7.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z6.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z5.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z4.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z3.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z2.jpg'),
('2025-07-30 17:32:42','2025-07-30 17:32:42',@rocha_coral,NULL,NULL,0,'fotos/rochas/1753896762_z1.jpg'),

-- Fotos do Filito
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x17.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x16.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x15.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x14.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x13.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x12.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x11.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,1,'fotos/rochas/1753896856_x10.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x9.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x8.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x7.jpg'),
('2025-07-30 17:34:16','2025-07-30 17:34:16',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896856_x6.jpg'),
('2025-07-30 17:34:17','2025-07-30 17:34:17',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896857_x5.jpg'),
('2025-07-30 17:34:17','2025-07-30 17:34:17',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896857_x4.jpg'),
('2025-07-30 17:34:17','2025-07-30 17:34:17',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896857_x3.jpg'),
('2025-07-30 17:34:17','2025-07-30 17:34:17',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896857_x2.jpg'),
('2025-07-30 17:34:17','2025-07-30 17:34:17',@rocha_filito,NULL,NULL,0,'fotos/rochas/1753896857_x1.jpg'),

-- Fotos do Sílex
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C23.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C22.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C19.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C18.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C16.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C15.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C14.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C12.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C11.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C10.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,1,'fotos/rochas/1753896991_C9.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C8.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C7.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C6.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C5.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C4.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C3.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C2.jpg'),
('2025-07-30 17:36:31','2025-07-30 17:36:31',@rocha_silex,NULL,NULL,0,'fotos/rochas/1753896991_C1.jpg'),

-- Fotos do Siltito
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a25.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a24.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a23.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a22.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a20.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a19.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a17.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a16.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a15.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a14.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a13.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a10.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,1,'fotos/rochas/1753897143_a9.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a7.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a6.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a5.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a4.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a3.jpg'),
('2025-07-30 17:39:03','2025-07-30 17:39:03',@rocha_siltito,NULL,NULL,0,'fotos/rochas/1753897143_a1.jpg');

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-30 17:44:52