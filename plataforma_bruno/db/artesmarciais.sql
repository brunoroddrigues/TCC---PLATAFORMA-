-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2024 às 00:07
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `artesmarciais`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arte_marcial`
--

CREATE TABLE `arte_marcial` (
  `idarte_marcial` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `historia` text DEFAULT NULL,
  `beneficio` text DEFAULT NULL,
  `respeito` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `arte_marcial`
--

INSERT INTO `arte_marcial` (`idarte_marcial`, `nome`, `descricao`, `historia`, `beneficio`, `respeito`) VALUES
(1, 'Muay Thai', 'O Muay Thai, conhecido como a \"arte das oito armas\", é uma arte marcial tradicional tailandesa que utiliza punhos, cotovelos, joelhos, canelas e pés como armas de combate. Essa variedade de técnicas permite aos praticantes explorar diferentes estratégias de ataque e defesa, tornando-o uma forma de luta extremamente versátil. Além de sua eficácia comprovada em competições de ringue, o Muay Thai também é amplamente praticado como uma forma de exercício físico completo, contribuindo para o desenvolvimento da força, resistência, flexibilidade e coordenação motora. Além disso, serve como uma eficiente modalidade de autodefesa, capacitando os praticantes a lidar com situações de confronto de forma eficaz e segura.', 'O Muay Thai tem suas origens nas técnicas de combate corpo a corpo desenvolvidas pelos guerreiros tailandeses há séculos. Ao longo dos anos, evoluiu para se tornar uma das formas mais refinadas e eficazes de luta em pé, com uma rica tradição cultural e histórica. Originário das antigas técnicas de guerra do povo tailandês, o Muay Thai era inicialmente praticado como um método de autodefesa e guerra, sendo integrado às habilidades de combate dos soldados para proteger seu território e povo. Com o tempo, essa arte marcial foi se desenvolvendo e se aprimorando, sendo transmitida de geração em geração, tanto dentro do contexto militar quanto entre os civis, até se tornar uma parte intrínseca da identidade tailandesa.', 'O Muay Thai oferece uma série de benefícios físicos e mentais, incluindo melhoria da aptidão cardiovascular, aumento da força e flexibilidade, desenvolvimento de disciplina e foco mental, bem como um aumento na confiança e autoestima. Além disso, a prática regular do Muay Thai também promove a queima de calorias e o fortalecimento dos músculos, contribuindo para a perda de peso e a tonificação corporal. A intensidade dos treinos de Muay Thai também ajuda a liberar o estresse e a tensão acumulados, proporcionando uma sensação de bem-estar e relaxamento. Ao mesmo tempo, os aspectos competitivos e desafiadores do Muay Thai estimulam o desenvolvimento do espírito competitivo, da resiliência e da determinação.', 'No Muay Thai, a ética e o respeito são fundamentais. Os praticantes são ensinados a valorizar a humildade, a cortesia e o respeito pelos oponentes e instrutores. O código de conduta inclui o respeito às regras do esporte e o tratamento adequado dos colegas de treino. Além disso, a disciplina e o respeito pelos mestres e pela tradição são aspectos essenciais da prática do Muay Thai, refletindo não apenas o compromisso com a arte marcial, mas também com a formação do caráter dos praticantes. Esses valores são transmitidos desde os primeiros passos na academia e são essenciais para manter a integridade e a harmonia dentro da comunidade de praticantes de Muay Thai.'),
(2, 'Jiu-jitsu', 'O Jiu-Jitsu, originário do Japão e desenvolvido no Brasil, é uma arte marcial conhecida por suas técnicas de luta no solo e submissões. É baseado no conceito de usar a técnica e a habilidade para superar a força física do oponente. Essa filosofia, que enfatiza a eficiência e a precisão dos movimentos, tornou o Jiu-Jitsu uma prática popular não apenas entre atletas, mas também entre aqueles que buscam autodefesa e condicionamento físico. Além disso, o Jiu-Jitsu é uma atividade que promove valores como disciplina, respeito e autocontrole, contribuindo para o desenvolvimento pessoal de seus praticantes. Com uma história rica e uma comunidade global apaixonada.', 'O Jiu-Jitsu tem suas raízes nas artes marciais japonesas, mas foi no Brasil que se desenvolveu como uma forma única de luta. Foi popularizado por mestres como Mitsuyo Maeda e Helio Gracie, e agora é praticado em todo o mundo. Sua popularidade crescente pode ser atribuída não apenas à sua eficácia como arte marcial, mas também à sua abordagem inclusiva, que permite que praticantes de diferentes idades, tamanhos e habilidades participem e se beneficiem da prática. Como resultado, Jiu-Jitsu podem ser encontradas em quase todos os países, reunindo uma comunidade diversificada de entusiastas dedicados à arte e à disciplina do Jiu-Jitsu, tornando-se um ambiente propício para o crescimento pessoal.', 'O Jiu-Jitsu oferece uma ampla gama de benefícios físicos e mentais, incluindo aumento da força e flexibilidade, melhoria da coordenação e condicionamento físico, desenvolvimento da disciplina e resiliência mental, bem como aumento da confiança e autoestima. Além disso, a prática regular do Jiu-Jitsu pode ajudar na gestão do estresse e na promoção do bem-estar emocional, fornecendo uma válvula de escape saudável para as tensões do dia a dia. Através dos desafios enfrentados nos treinos e das lições aprendidas em cada luta, os praticantes de Jiu-Jitsu cultivam habilidades essenciais para lidar com os obstáculos da vida e alcançar seus objetivos, dentro e fora do tatame.', 'No Jiu-Jitsu, a ética e o respeito são valores essenciais. Os praticantes são ensinados a valorizar a humildade, a cortesia e o respeito pelos colegas de treino e adversários. O código de conduta inclui o respeito às regras do esporte e o tratamento adequado dos parceiros de treino. Esse ambiente de respeito mútuo e camaradagem não apenas promove um treinamento mais seguro e eficaz, mas também contribui para a construção de relações positivas dentro da comunidade do Jiu-Jitsu. Quando os praticantes se tratam com respeito e integridade, criam-se laços de confiança e apoio que fortalecem não apenas suas habilidades de luta, mas também sua jornada pessoal de crescimento.'),
(3, 'MMA', 'O MMA, ou Artes Marciais Mistas, é uma modalidade de luta que combina técnicas de várias disciplinas, incluindo boxe, jiu-jitsu, muay thai, wrestling e judô. É conhecido por sua intensidade e versatilidade, permitindo aos lutadores utilizar uma variedade de estratégias durante o combate. Essa mistura de estilos torna o MMA um esporte dinâmico e imprevisível, onde os competidores devem ser proficientes em diferentes aspectos da luta, tanto em pé quanto no chão. Além disso, o MMA exige um alto nível de condicionamento físico e mental, já que os combates podem ser longos e exigentes. Com o aumento da popularidade do MMA ao redor do mundo, os lutadores buscam constantemente aprimorar suas habilidades e técnicas.', 'O MMA tem suas raízes em competições de vale-tudo que surgiram no Brasil e no Japão nas décadas de 1920 e 1930. Desde então, evoluiu para se tornar um esporte global, com organizações como o UFC (Ultimate Fighting Championship) ganhando grande popularidade. Com o crescimento do interesse do público e o avanço das regulamentações esportivas, o MMA passou por uma transformação significativa, tornando-se mais seguro e mais profissional. Hoje em dia, o UFC é considerado a principal organização de MMA do mundo, promovendo eventos de alto nível que atraem milhões de espectadores em todo o globo. Essa ascensão meteórica do MMA reflete não apenas a sua emocionante natureza como esporte, mas também o seu apelo universal.', 'O MMA oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão física, aumento da confiança e autoestima, desenvolvimento de habilidades de autodefesa e disciplina mental. A natureza exigente dos treinos e competições no MMA promove o desenvolvimento de força, resistência, agilidade e flexibilidade, proporcionando aos praticantes um corpo mais forte. Além disso, o treinamento em MMA requer foco e determinação, o que ajuda a fortalecer a disciplina mental e a capacidade de lidar com desafios tanto dentro como fora do tatame. Aprender técnicas de autodefesa também proporcion uma sensação de segurança pessoal e confiança em situações adversas.', 'No MMA, a ética e o respeito são fundamentais. Os lutadores são ensinados a respeitar seus oponentes, árbitros e as regras do esporte. A integridade e a fair play são valores essenciais que permeiam a cultura do MMA. O código de conduta inclui o reconhecimento do esforço e da habilidade dos oponentes, independentemente do resultado da luta, e a aceitação das vitórias e derrotas com dignidade e humildade. Além disso, a segurança dos competidores é uma prioridade, e os lutadores são instruídos a evitar condutas antidesportivas ou desleais que possam colocar em risco a saúde e o bem-estar de seus oponentes. Essa cultura de respeito e integridade contribui para a reputação do MMA como um esporte de alto nível que valoriza não apenas a competição.'),
(4, 'Boxing', 'O Boxing, ou boxe, é uma arte marcial que se concentra principalmente no uso dos punhos para o combate. É conhecido por sua combinação de técnica, velocidade, agilidade e condicionamento físico. Neste esporte, os lutadores usam luvas acolchoadas e seguem regras específicas para lançar socos precisos e defensivamente eficazes, enquanto desviam e bloqueiam os ataques do oponente. O treinamento de boxe não apenas desenvolve habilidades de combate, mas também melhora a coordenação, a concentração e a resistência cardiovascular dos praticantes. Com sua longa história e tradição, o boxe continua a ser um dos esportes de combate mais populares e respeitados em todo o mundo.', 'O boxe é um esporte que transcende fronteiras e culturas, com uma rica história que remonta a séculos atrás. Desde os seus primórdios até os dias atuais, o boxe tem sido uma expressão de coragem, determinação e habilidade física. Ao longo dos anos, grandes campeões surgiram, deixando um legado de glória e inspiração para futuras gerações. Hoje, o boxe é muito mais do que apenas uma competição esportiva; é uma forma de arte que exige dedicação, disciplina e paixão. Através do boxe, os praticantes encontram não apenas um meio de se expressar, mas também uma maneira de superar desafios e alcançar grandes conquistas. É essa combinação única de habilidade técnica.O Boxing oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão cardiovascular, aumento da força e resistência muscular, desenvolvimento de reflexos rápidos e aumento da autoconfiança. Os treinos intensivos de boxe envolvem uma combinação de exercícios aeróbicos e anaeróbicos, ajudando a melhorar a saúde do coração e dos pulmões, além de promover a queima de calorias e a perda de peso. Além disso, o treinamento de boxe é altamente exigente fisicamente, contribuindo para o desenvolvimento da força e resistência muscular em todo o corpo. Em termos mentais, o boxe requer concentração, foco e agilidade mental.', 'O Boxing oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão cardiovascular, aumento da força e resistência muscular, desenvolvimento de reflexos rápidos e aumento da autoconfiança. Os treinos intensivos de boxe envolvem uma combinação de exercícios aeróbicos e anaeróbicos, ajudando a melhorar a saúde do coração e dos pulmões, além de promover a queima de calorias e a perda de peso. Além disso, o treinamento de boxe é altamente exigente fisicamente, contribuindo para o desenvolvimento da força e resistência muscular em todo o corpo. Em termos mentais, o boxe requer concentração, foco e agilidade mental.', 'No Boxing, a ética e o respeito são fundamentais. Os boxeadores são ensinados a respeitar seus oponentes, treinadores, árbitros e as regras do esporte. A integridade e a conduta ética são valorizadas durante todos os aspectos do treinamento e competição. Isso significa que os lutadores devem se esforçar para alcançar a vitória de maneira justa, sem recorrer a táticas desleais ou antiéticas. Além disso, o respeito entre os boxeadores é essencial, tanto dentro quanto fora do ringue, contribuindo para um ambiente de competição saudável e de camaradagem. Os valores de ética e respeito no boxe não apenas promovem a integridade do esporte, também são aplicáveis à vida pessoal dos atlétas.'),
(5, 'Capoeira', 'A Capoeira é uma arte marcial brasileira que combina elementos de luta, dança, acrobacias e música. Originada no Brasil pelos africanos escravizados, a capoeira é conhecida por seu estilo único e ritmo dinâmico. Sua prática é uma expressão cultural que integra movimentos fluidos e ágeis com músicas tradicionais tocadas em instrumentos específicos, como o berimbau. Ao longo dos anos, a capoeira se desenvolveu não apenas como uma forma de autodefesa, mas também como uma manifestação artística e cultural que promove respeito, camaradagem e superação. Através da capoeira, os praticantes não só aprimoram suas habilidades físicas, mas também se conectam com a história e a identidade cultural do Brasil.', 'A Capoeira tem uma história rica e complexa, remontando aos tempos de escravidão no Brasil colonial. Era praticada inicialmente como uma forma de autodefesa e resistência, mas eventualmente se desenvolveu em uma forma de expressão cultural e esporte. Durante séculos, os praticantes de capoeira usaram sua habilidade e astúcia para preservar sua dignidade e resistir à opressão. Por meio de movimentos fluidos e acrobáticos, eles desenvolveram uma técnica única que combinava elementos de dança e luta, permitindo-lhes enfrentar seus opressores de maneira criativa e eficaz. Com o passar do tempo, a capoeira transcendeu suas origens humildes para se tornar uma parte integral da cultura brasileira.', 'A Capoeira oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da coordenação motora, aumento da flexibilidade, fortalecimento muscular, desenvolvimento de ritmo e musicalidade, além de promover a inclusão social e cultural. Os movimentos dinâmicos e ritmados da capoeira exigem coordenação precisa entre corpo e mente, o que ajuda a aprimorar habilidades motoras e a consciência corporal. Além disso, os treinos frequentes proporcionam um aumento significativo na flexibilidade e no fortalecimento muscular, promovendo uma melhor saúde física e prevenindo lesões. A capoeira também é uma forma de expressão artística que estimula a criatividade e o desenvolvimento musical.', 'Na Capoeira, a ética e o respeito são fundamentais. Os praticantes são ensinados a respeitar seus mestres, colegas de treino, a música e as tradições da capoeira. A camaradagem, o jogo limpo e o respeito mútuo são aspectos essenciais da prática da capoeira. Esse código de conduta não apenas promove um ambiente de treino seguro e acolhedor, mas também preserva a integridade e os valores tradicionais da capoeira como uma forma de arte e expressão cultural. Ao internalizar esses princípios éticos, os praticantes não só aprimoram suas habilidades na capoeira, mas também cultivam uma atitude de respeito e humildade que se estende além do tatame, influenciando positivamente suas interações na vida cotidiana.'),
(6, 'Kickboxing', 'O Kickboxing é uma arte marcial que combina técnicas de boxe com chutes, socos, joelhadas e cotoveladas permitidos. É uma modalidade de luta de contato total, onde os praticantes podem utilizar todas as partes do corpo para atacar o oponente. Essa combinação de golpes torna o Kickboxing uma forma versátil e dinâmica de luta, proporcionando aos praticantes uma ampla gama de habilidades para lidar com diferentes situações de combate. Ao incorporar golpes de punho e chutes, o Kickboxing promove um treinamento completo do corpo, ajudando os praticantes a desenvolver força, agilidade, coordenação e resistência física.', 'O Kickboxing tem suas origens no Japão e nos Estados Unidos, onde surgiu como uma forma de combate que combinava o boxe ocidental com técnicas de chutes de várias artes marciais orientais. No Japão, foi influenciado pelo Karatê e outras artes marciais tradicionais, enquanto nos Estados Unidos, foi moldado pela popularidade do boxe e do Karatê. Ao longo dos anos, o Kickboxing ganhou destaque como uma modalidade de luta emocionante e eficaz, tornando-se um esporte popular em todo o mundo devido à sua combinação única de técnicas de soco e chute, Além disso, o Kickboxing é reconhecido por sua intensidade e versatilidade.', 'O Kickboxing oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão cardiovascular, aumento da força e flexibilidade, desenvolvimento de habilidades de autodefesa e alívio do estresse. Além dos benefícios físicos mencionados, o Kickboxing também pode ajudar na perda de peso e na tonificação muscular, pois é uma atividade que queima calorias e envolve o trabalho de diversos grupos musculares. Além disso, a prática regular do Kickboxing pode melhorar a postura corporal e a coordenação motora, promovendo uma maior consciência corporal.', 'No Kickboxing, a ética e o respeito são fundamentais. Os praticantes são ensinados a respeitar seus oponentes, treinadores e as regras do esporte. A integridade e a conduta ética são valorizadas durante todos os aspectos do treinamento e competição. Além disso, a atmosfera de respeito mútuo no Kickboxing promove um ambiente positivo de camaradagem entre os praticantes, incentivando o apoio e o crescimento conjunto. Os treinadores desempenham um papel essencial na transmissão desses valores, orientando os alunos não apenas nas técnicas de luta, mas também na importância de agir com ética dentro e fora do tatame.'),
(7, 'Karatê', 'O Karatê, uma arte marcial de origem japonesa, transcende sua função primária como um sistema de autodefesa física. Além de fornecer técnicas eficazes de combate, o Karatê é um caminho de desenvolvimento pessoal e espiritual que busca o aprimoramento integral do praticante. Uma das características mais distintivas do Karatê é a ênfase na forma e na técnica. Os praticantes realizam movimentos fluidos e precisos, conhecidos como \"katas\", que são sequências predefinidas de movimentos que simulam situações de combate. Essa prática não só aprimora a habilidade do praticante no Karatê, mas também promove disciplina, concentração e autocontrole, aspectos essenciais para o desenvolvimento pessoal dentro e fora do tatame.', 'O Karatê tem suas raízes na ilha de Okinawa, no Japão, onde se desenvolveu a partir de técnicas de autodefesa chamadas de \"te\" e influências de artes marciais chinesas. Ao longo dos séculos, o Karatê evoluiu para uma forma de arte marcial altamente respeitada e praticada em todo o mundo. Sua jornada de Okinawa para o mundo foi marcada por uma fusão de estilos e influências, resultando em diversas escolas e técnicas que refletem a diversidade cultural e histórica da prática. Hoje, o Karatê é muito mais do que apenas uma habilidade de luta; é um caminho de autodescoberta, disciplina e respeito, que continua a atrair praticantes de todas as idades e origens. É uma prática que promove não apenas a excelência física, mas também o crescimento pessoal.', 'O Karatê oferece uma série de benefícios físicos e mentais para os praticantes, incluindo melhoria da aptidão cardiovascular, aumento da força e flexibilidade, desenvolvimento de disciplina e autoconfiança, bem como habilidades de autodefesa. Os treinos intensivos de Karatê envolvem uma variedade de exercícios aeróbicos e anaeróbicos que fortalecem o coração, os pulmões e os músculos, proporcionando uma melhor saúde. Além disso, a prática constante promove o desenvolvimento da disciplina pessoal e da autoconfiança, à medida que os praticantes superam desafios. Esses benefícios combinados fazem do Karatê não apenas uma forma eficaz de exercício físico, mas também um meio de crescimento pessoal.', 'No Karatê, a ética e o respeito são fundamentais. Os praticantes são ensinados a valorizar a cortesia, humildade, respeito pelos mestres e colegas de treino, além de seguir o código de conduta e os princípios morais do Karatê. Essa tradição de respeito mútuo e integridade não só contribui para um ambiente de treinamento positivo e seguro, mas também promove valores essenciais que podem ser aplicados na vida cotidiana. Essa ética é transmitida desde os primeiros dias de treinamento e é considerada tão importante quanto o próprio desenvolvimento das habilidades de combate. o internalizar esses valores éticos, os praticantes de Karatê não apenas aprimoram suas habilidades de luta, mas também cultivam uma atitude de respeito.'),
(8, 'Kung-fu', 'Kung Fu, também conhecido como Gong Fu, é uma arte marcial chinesa tradicional que se desenvolveu ao longo de milênios na China. A palavra \"Kung Fu\" não se refere apenas a um estilo específico de luta, mas é um termo amplo que abrange uma variedade de disciplinas de artes marciais chinesas. O Kung Fu é conhecido por sua variedade de técnicas, incluindo golpes de mão, chutes, bloqueios, arremessos, e técnicas de esquiva. Além do aspecto físico, o Kung Fu também envolve uma filosofia que enfatiza a disciplina, a concentração, o respeito, a humildade e a busca pela harmonia entre o corpo e a mente. Além de ser uma forma de autodefesa, o Kung Fu é apreciado por muitas pessoas ao redor do mundo como uma arte marcial que promove a saúde, a disciplina mental e a conexão espiritual.', 'A história do Kung Fu remonta a milhares de anos na China, onde suas raízes se misturam com lendas e tradições antigas. Diz-se que as origens do Kung Fu remontam à necessidade dos antigos chineses de se defenderem contra animais selvagens e tribos inimigas. Ao longo dos séculos, as técnicas de luta foram refinadas e codificadas em diversos estilos. O Kung Fu foi influenciado por diferentes fatores, incluindo a filosofia chinesa, as práticas religiosas e os métodos de treinamento militar. Templos budistas, como o famoso Mosteiro Shaolin, desempenharam um papel significativo no desenvolvimento e na preservação das artes marciais chinesas. Hoje, o Kung Fu continua sendo uma parte importante da cultura chinesa, tanto como uma forma de arte marcial quanto como uma prática que promove saúde. É praticado por milhões de pessoas em todo o mundo', 'A prática regular de Kung Fu oferece uma ampla gama de benefícios para o corpo e a mente. Além de melhorar o condicionamento físico, incluindo resistência cardiovascular, força muscular e flexibilidade, o Kung Fu promove autodefesa eficaz por meio do aprendizado de técnicas de combate. A disciplina e o foco exigidos durante o treinamento ajudam os praticantes a desenvolver autocontrole e concentração, enquanto a confiança é construída à medida que dominam novas habilidades. Além disso, o Kung Fu serve como uma válvula de escape para o estresse e a ansiedade, proporcionando alívio físico e mental. Melhoria da postura, equilíbrio e resiliência são aspectos adicionais que se desenvolvem ao longo da prática, ao mesmo tempo em que muitos encontram uma jornada espiritual através dos valores de humildade, respeito e harmonia interna que o Kung Fu promove.', 'A ética e o respeito são fundamentais no Kung Fu, permeando todos os aspectos da prática dessa arte marcial. Os praticantes são ensinados a valorizar a integridade, a honestidade e a compaixão, tanto dentro quanto fora do tatame. O respeito é direcionado aos mestres, colegas de treino e adversários, refletindo-se em gestos de cortesia e cooperação durante as sessões de treinamento. Através do Kung Fu, os praticantes aprendem a controlar seus impulsos, a lidar com conflitos de forma pacífica e a cultivar uma atitude de humildade perante o aprendizado contínuo. Esses valores éticos não apenas fortalecem o caráter individual, mas também contribuem para a construção de uma comunidade unida, baseada no respeito mútuo e na busca pela excelência pessoal em harmonia com os outros.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `idusuario`, `cpf`, `celular`, `logradouro`, `numero`, `bairro`, `cep`, `cidade`, `uf`) VALUES
(1, 1, '45377870824', '1499614960087', 'R:rodinei', '450', 'maria luiza 4', '1474147417', 'jau - sp', 'SP'),
(3, 13, '45678972874', '14996149608', 'R: lucia carmargo', '450', 'jd maria luiza 4', '17208369', 'jau-sp', 'sp'),
(4, 14, '25252525', '9999999999', 'dsdsds', '4545', 'esew', '151515', 'fddf', 'sp'),
(5, 15, 'fdf', 'fdf', 'fdf', 'fdf', 'fdf', 'fdfd', 'fdf', 'fd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE `forma_pagamento` (
  `idforma_pagamento` int(10) UNSIGNED NOT NULL,
  `descritivo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forma_pagamento`
--

INSERT INTO `forma_pagamento` (`idforma_pagamento`, `descritivo`) VALUES
(1, 'Cartão de crédito'),
(2, 'boleto bancário'),
(3, 'Pix');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_arte`
--

CREATE TABLE `imagem_arte` (
  `idimagem_arte` int(10) UNSIGNED NOT NULL,
  `idarte_marcial` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `iditens` int(10) UNSIGNED NOT NULL,
  `idproduto` int(10) UNSIGNED NOT NULL,
  `idvenda` int(10) UNSIGNED NOT NULL,
  `quantidade` int(10) UNSIGNED DEFAULT NULL,
  `preco_unitario` float DEFAULT NULL,
  `tamanho` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`iditens`, `idproduto`, `idvenda`, `quantidade`, `preco_unitario`, `tamanho`) VALUES
(1, 6, 5, 1, 130.99, '1'),
(2, 4, 5, 1, 129.99, '1'),
(3, 3, 5, 1, 149.99, '1'),
(4, 11, 5, 1, 89.99, '1'),
(5, 4, 6, 1, 129.99, '1'),
(6, 8, 6, 1, 130.99, '1'),
(7, 4, 7, 1, 129.99, '1'),
(8, 8, 7, 1, 130.99, '1'),
(9, 4, 8, 1, 129.99, '1'),
(10, 8, 8, 7, 130.99, '1'),
(11, 6, 8, 1, 130.99, '1'),
(12, 4, 9, 1, 129.99, '1'),
(13, 8, 9, 7, 130.99, '1'),
(14, 6, 9, 1, 130.99, '1'),
(15, 4, 10, 1, 129.99, '1'),
(16, 8, 10, 7, 130.99, '1'),
(17, 6, 10, 1, 130.99, '1'),
(18, 4, 11, 1, 129.99, '1'),
(19, 8, 11, 7, 130.99, '1'),
(20, 6, 11, 1, 130.99, '1'),
(21, 4, 12, 1, 129.99, '1'),
(22, 8, 12, 7, 130.99, '1'),
(23, 6, 12, 1, 130.99, '1'),
(24, 6, 13, 1, 130.99, '1'),
(25, 6, 14, 1, 130.99, '1'),
(26, 6, 15, 1, 130.99, '1'),
(27, 6, 17, 1, 130.99, '1'),
(28, 6, 19, 1, 130.99, '1'),
(29, 6, 20, 1, 130.99, '1'),
(30, 16, 20, 6, 110, '1'),
(31, 6, 21, 1, 130.99, '1'),
(32, 16, 21, 6, 110, '1'),
(33, 4, 21, 1, 129.99, '1'),
(34, 6, 22, 1, 130.99, '1'),
(35, 16, 22, 6, 110, '1'),
(36, 4, 22, 1, 129.99, '1'),
(37, 6, 23, 1, 130.99, '1'),
(38, 16, 23, 6, 110, '1'),
(39, 4, 23, 1, 129.99, '1'),
(40, 6, 28, 1, 130.99, '1'),
(41, 16, 28, 6, 110, '1'),
(42, 4, 28, 1, 129.99, '1'),
(43, 7, 28, 1, 69.99, '1'),
(44, 6, 29, 1, 130.99, '1'),
(45, 16, 29, 6, 110, '1'),
(46, 4, 29, 1, 129.99, '1'),
(47, 7, 29, 1, 69.99, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `caracteristica` text DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `imagem` varchar(80) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `descricao`, `caracteristica`, `preco`, `imagem`, `status`) VALUES
(1, 'Luvas de Muay Thai', 'As luvas de Muay Thai são projetadas para proporcionar proteção e resistência durante os treinos de artes marciais. Feitas com materiais duráveis e acolchoamento de alta qualidade, garantem conforto e segurança ao praticante.', '- Material resistente\n\n- Acolchoamento de alta qualidade\n\n- Design ergonômico para melhor ajuste\n\n- Ideal para treinos intensos de Muay Thai e outras artes marciais', 99.99, 'img_luva_1.jpg', 'ativo'),
(2, 'Kimono de Jiu-Jitsu', 'O kimono de Jiu-Jitsu é projetado para proporcionar durabilidade e conforto durante os treinos e competições. Feito com materiais resistentes e acabamento de alta qualidade, garante liberdade de movimento e resistência às agarradas e puxões característicos da modalidade.', '- Material resistente e de alta qualidade\r\n\r\n- Design ergonômico para liberdade de movimento\r\n\r\n- Reforços nas áreas de maior desgaste\r\n\r\n- Ideal para treinos e competições de Jiu-Jitsu', 199.99, 'kimono1.jpg', 'ativo'),
(3, 'Luvas de MMA', 'As luvas de MMA são projetadas para oferecer proteção e desempenho durante os treinos e competições de artes marciais mistas. Feitas com materiais resistentes e tecnologia avançada, garantem conforto e segurança ao praticante.', '- Material resistente e tecnológico\r\n\r\n- Acolchoamento de alta qualidade\r\n\r\n- Design ergonômico para melhor ajuste\r\n\r\n- Ideal para treinos e competições de MMA', 149.99, 'luvamma.jpg', 'ativo'),
(4, 'Luvas de Boxe', 'As luvas de boxe são essenciais para os praticantes desse esporte, oferecendo proteção e conforto durante os treinos e combates. Feitas com materiais resistentes e acolchoamento de alta qualidade, garantem segurança e suporte aos punhos.', '- Material resistente\r\n\r\n- Acolchoamento de alta qualidade\r\n\r\n- Design ergonômico para melhor ajuste\r\n\r\n- Ideal para treinos intensos de boxe e outras artes marciais', 129.99, 'luvaboxing.webp', 'ativo'),
(5, 'Protetor Bucal', 'O protetor bucal é um equipamento essencial para a prática de diversas modalidades esportivas, oferecendo proteção aos dentes e à boca contra impactos durante os treinos e competições. Fabricado com materiais duráveis e moldável para se ajustar confortavelmente à boca do usuário.', '- Proteção dos dentes e da boca\r\n\r\n- Material moldável para ajuste personalizado\r\n\r\n- Durável e resistente', 49.99, 'protetorbucall.jpg', 'inativo'),
(6, 'Caneleira', 'A caneleira é um equipamento essencial para a proteção dos membros inferiores durante a prática de diversas modalidades esportivas, como artes marciais e futebol. Feita com materiais leves e resistentes, proporciona conforto e segurança aos usuários, protegendo as canelas contra impactos e lesões.', '- Proteção essencial para os membros inferiores\r\n\r\n- Feita com materiais leves e resistentes\r\n\r\n- Proporciona conforto e segurança durante os treinos e competições', 130.99, 'caneleira.jpg', 'ativo'),
(7, 'Bandagem', 'A bandagem é um item indispensável para praticantes de artes marciais, especialmente boxe, muay thai e kickboxing. Ela é projetada para envolver as mãos e proteger os punhos, articulações e ossos durante os treinos e competições, ajudando a prevenir lesões e oferecendo suporte adicional.', '- Oferece suporte e proteção para os punhos e articulações\r\n\r\n- Ajuda a prevenir lesões durante os treinos e competições\r\n\r\n- Proporciona estabilidade e conforto durante o uso', 69.99, 'bandagem.jpg', 'ativo'),
(8, 'Tornozeleira', 'A tornozeleira é um acessório importante para praticantes de várias modalidades esportivas, incluindo artes marciais como muay thai, kickboxing e MMA. Ela oferece suporte e estabilidade para os tornozelos durante os treinos e competições, ajudando a prevenir lesões e fornecendo uma sensação de segurança aos atletas.', 'Proporciona proteção e estabilização para os tornozelos\r\n\r\n- Ajuda a prevenir lesões durante os movimentos rápidos e intensos\r\n\r\n- Confortável de usar durante longos períodos de tempo', 130.99, 'tornozeleira.jpg', 'ativo'),
(9, 'Aparador', 'O aparador é uma ferramenta fundamental para treinadores e praticantes de artes marciais que desejam aprimorar suas habilidades de ataque e defesa. Ele é projetado para absorver impactos de golpes com precisão, permitindo que os praticantes desenvolvam sua técnica e velocidade.', '- Superfície acolchoada para absorção de impacto\r\n\r\n- Alças resistentes para fácil manuseio\r\n\r\n- Design durável e leve\r\n\r\n- Ideal para treinos de socos, chutes e cotoveladas', 119, 'aparador.jpg', 'ativo'),
(10, 'Saco de Pancada', 'O saco de pancada é um equipamento essencial para treinar força, potência e técnica em artes marciais. Ele permite que os praticantes aprimorem seus golpes de soco, chute, joelhada e cotovelada, além de desenvolverem resistência e condicionamento físico.', '- Material resistente e durável\r\n\r\n- Enchimento adequado para absorção de impacto\r\n\r\n- Gancho de fixação resistente para instalação fácil\r\n\r\n- Disponível em diferentes tamanhos e pesos', 179.99, 'saco_pancada.jpg', 'ativo'),
(11, 'Short de Muay Thai', 'O short de muay thai é essencial para os praticantes desse esporte, oferecendo conforto, mobilidade e estilo durante os treinos e competições. Feito com materiais leves e resistentes, permite movimentos amplos e confortáveis, facilitando a prática das técnicas do muay thai.', '- Material leve e respirável\r\n\r\n- Design ergonômico para liberdade de movimento\r\n\r\n- Cintura elástica e cordão para ajuste personalizado\r\n\r\n- Disponível em diferentes cores e tamanhos', 89.99, 'short_thai.jpg', 'ativo'),
(12, 'Camisa de Jiu-Jitsu', 'A camisa de jiu-jitsu é projetada para proporcionar conforto e liberdade de movimento durante os treinos e competições. Feita com materiais leves e respiráveis, permite uma melhor ventilação e evita o acúmulo de suor, mantendo o praticante confortável e focado durante as atividades.', '- Material leve e respirável\r\n\r\n- Design ergonômico para liberdade de movimento\r\n\r\n- Tecido que absorve a umidade para manter o corpo seco\r\n\r\n- Disponível em diferentes cores e tamanhos', 69.99, 'camisa_jiu.webp', 'ativo'),
(13, 'Berimbau - Capoeira', 'O berimbau é um instrumento musical de origem africana, introduzido no Brasil durante o período colonial. É amplamente utilizado na capoeira, uma arte marcial brasileira que combina luta, dança, música e cultura. O berimbau desempenha um papel central na roda de capoeira, guiando o ritmo e o estilo do jogo, enquanto os praticantes interagem ao seu som.', ' Instrumento musical de corda\r\n\r\n- Feito tradicionalmente com cabaça, arame e verga de bambu\r\n\r\n- Produz diferentes sons de acordo com a tensão do arame e o toque do instrumentista\r\n\r\n- Parte fundamental da prática da capoeira, estabelecendo o ritmo e a atmosfera da roda', 200, 'berimbau.jpg', 'ativo'),
(14, 'Calça de Capoeira', 'A calça de capoeira é uma peça fundamental do vestuário dos praticantes dessa arte marcial brasileira. Ela é projetada para proporcionar conforto e mobilidade durante os movimentos característicos da capoeira, como gingas, saltos e acrobacias. Feita com tecidos leves e resistentes, oferece durabilidade e flexibilidade para acompanhar os ritmos e movimentos da prática.', '- Tecido leve e resistente\r\n\r\n- Corte e modelagem que facilitam os movimentos\r\n\r\n- Elástico na cintura para melhor ajuste\r\n\r\n- Disponível em diversas cores e padrões', 90, 'calça_capoeira.jpg', 'ativo'),
(15, 'Camisa de Capoeira', 'A camisa de capoeira é uma peça essencial do vestuário dos praticantes dessa arte marcial brasileira. Ela é projetada para proporcionar conforto, mobilidade e estilo durante os treinos e competições de capoeira. Feita com tecidos leves e respiráveis, oferece durabilidade e frescor para enfrentar os ritmos e movimentos intensos da prática.', ' Tecido leve e respirável\r\n\r\n- Corte e modelagem que facilitam os movimentos\r\n\r\n- Disponível em diversas cores e padrões', 45, 'camisa_capoeira.jpg', 'ativo'),
(16, 'Kimono para Karatê', 'O kimono, também conhecido como \"gi\", é projetado para proporcionar conforto, mobilidade e durabilidade durante os treinos e competições.', 'O kimono para karatê é uma peça fundamental para os praticantes dessa arte marcial japonesa. Ele é projetado para suportar os rigores dos treinos e competições de karatê, oferecendo durabilidade, conforto e liberdade de movimento. Feito com tecidos resistentes e costuras reforçadas, o kimono para karatê é adequado para todas as faixas de habilidade, desde iniciantes até mestres.', 110, 'kimono_karate.jpg', 'ativo'),
(17, 'Capacete de Proteção ', 'O capacete de proteção é uma peça essencial para os praticantes de Muay Thai e Kickboxing, oferecendo segurança contra impactos na cabeça e rosto durante os treinos e competições. Ele é projetado para absorver o impacto dos golpes e reduzir o risco de lesões sérias, proporcionando conforto e ajuste adequado para os lutadores.', 'Oferece proteção para a cabeça e rosto\r\n\r\n- Absorve o impacto dos golpes\r\n\r\n- Confortável e ajustável\r\n\r\n- Adequado para Muay Thai e Kickboxing', 120, 'capacete.jpg', 'ativo'),
(18, 'Joelheira', 'A joelheira é uma peça essencial para os praticantes de artes marciais, oferecendo suporte e proteção para os joelhos durante os treinos e competições. Ela ajuda a prevenir lesões e a manter a estabilidade das articulações, permitindo movimentos mais seguros e confortáveis. Feita com materiais resistentes e acolchoamento interno, proporciona conforto e segurança durante a prática das atividades.', 'Oferece suporte e proteção para os joelhos\r\n\r\n- Previne lesões e mantém a estabilidade das articulações\r\n\r\n- Feita com materiais resistentes e acolchoamento interno', 70, 'joelheira.jpg', 'ativo'),
(19, ' Kit de Muay Thai', 'Itens inclusos:\r\n\r\n- Luva de Muay Thai\r\n- Caneleira\r\n- Aparador\r\n- Luva de Muay Thai\r\n', 'Material resistente\r\nAcolchoamento de alta qualidade\r\nDesign ergonômico para melhor ajuste\r\nIdeal para treinos intensos de Muay Thai e outras artes marciais', 230, 'kitcompleto.webp', 'ativo'),
(20, 'Camisa de MMA', 'A camisa de MMA é projetada para proporcionar conforto e liberdade de movimento durante os treinos e competições de artes marciais mistas. Feita com materiais leves e respiráveis, oferece ventilação adequada e evita o superaquecimento do corpo. Seu design permite uma ampla gama de movimentos, essencial para os lutadores de MMA executarem suas técnicas com eficiência.', 'Material leve e respirável\r\nDesign que permite liberdade de movimento\r\nExcelente ventilação para evitar superaquecimento\r\nIdeal para treinos e competições de MMA e outras artes marciais', 70, 'camisa_mma.jpg', 'ativo'),
(21, 'Boné de MMA ', 'O boné de MMA combina estilo e funcionalidade para os praticantes e fãs de artes marciais mistas. Com seu design moderno e ajustável, oferece um visual único enquanto protege contra a luz solar direta durante os treinos ao ar livre ou eventos. Feito com materiais duráveis e respiráveis, proporciona conforto durante longas sessões de treinamento.', 'Design moderno e ajustável\r\nProteção contra a luz solar direta\r\nMateriais duráveis e respiráveis\r\nConfortável para uso prolongado durante os treinos e eventos de MMA\r\n', 80, 'bone_mma.jpg', 'ativo'),
(22, 'Blusa de MMA', 'A blusa de MMA é essencial para os praticantes e fãs de artes marciais mistas que buscam conforto e estilo durante os treinos e competições. Feita com materiais de alta qualidade, proporciona uma sensação suave e confortável ao entrar em contato com a pele, permitindo movimentos fluidos e sem restrições. Seu design moderno e atlético adiciona um toque de estilo aos seus momentos de treinamento.', 'Confortável e suave ao toque\r\nDesign moderno e atlético\r\nPermite movimentos fluidos e sem restrições\r\nIdeal para treinos e competições de MMA e outras artes marciais', 200, 'blusa_mma.jpg', 'ativo'),
(23, 'Blusa de Jiu-Jitsu', 'A blusa de Jiu-Jitsu é projetada para proporcionar conforto e liberdade de movimento durante os treinos e competições da arte suave. Feita com materiais de alta qualidade, oferece uma sensação suave e respirável que mantém o corpo fresco e seco durante os momentos mais intensos. Seu design ergonômico permite uma amplitude completa de movimentos, facilitando a execução de técnicas complexas com facilidade.', 'Confortável e respirável\r\nDesign ergonômico para liberdade de movimento\r\nMantém o corpo fresco e seco\r\nIdeal para treinos e competições de Jiu-Jitsu e outras artes marciais', 180, 'blusa_jiu.webp', 'ativo'),
(24, 'Short de Jiu-Jitsu', 'O short de Jiu-Jitsu é projetado para proporcionar conforto e mobilidade durante os treinos e competições da arte suave. Feito com materiais leves e duráveis, oferece uma sensação suave contra a pele e permite uma ampla gama de movimentos sem restrições. Seu design resistente e flexível garante resistência e conforto, mesmo nas situações mais exigentes.', 'Confortável e leve\r\nMobilidade sem restrições\r\nResistente e durável\r\nIdeal para treinos e competições de Jiu-Jitsu e outras artes marciais', 69.99, 'short_jiu.jpg', 'ativo'),
(25, 'Bermuda de Karate', 'A bermuda de Karate é projetada para proporcionar conforto e facilidade de movimento durante os treinos e competições da arte marcial japonesa. Feita com materiais leves e respiráveis, oferece uma sensação suave contra a pele e permite uma amplitude completa de movimentos, essencial para a execução precisa das técnicas de Karate. Seu design resistente e flexível garante durabilidade e conforto em qualquer situação.', 'Confortável e respirável\r\nFacilita a liberdade de movimento\r\nResistente e durável\r\nIdeal para treinos e competições de Karate e outras artes marciais\r\n', 80, 'bermuda_karate.jpg', 'ativo'),
(26, 'Manopla', 'A manopla de treino é essencial para aprimorar suas técnicas de luta com segurança e eficiência. Feita com materiais duráveis e acolchoamento de alta qualidade, oferece proteção para quem utiliza e para quem recebe os golpes. Seu design ergonômico proporciona conforto durante longas sessões de treino, enquanto sua resistência garante durabilidade mesmo diante dos impactos mais intensos.', 'Material durável e acolchoamento de alta qualidade\r\nProteção para quem utiliza e para quem recebe os golpes\r\nDesign ergonômico para conforto durante o treino\r\nIdeal para treinos de diversas artes marciais\r\n', 55, 'manopla.webp', 'ativo'),
(27, 'Kit Aparador', 'O kit de aparadores de treino é projetado para proporcionar versatilidade e durabilidade durante os treinos de diversas artes marciais. Feito com materiais resistentes e acolchoamento de alta qualidade, oferece proteção para quem utiliza e para quem executa os golpes. Seu design ergonômico permite um ajuste confortável nas mãos e facilita a realização de diferentes técnicas de ataque e defesa.', 'Material resistente e acolchoamento de alta qualidade\r\nProteção para quem utiliza e para quem executa os golpes\r\nDesign ergonômico para ajuste confortável nas mãos\r\nIdeal para treinos de várias artes marciais', 130, 'kit_aparador.jpg', 'ativo'),
(28, 'Kit Completo', 'O kit completo de artes marciais oferece tudo o que você precisa para se preparar adequadamente para seus treinos e competições. Inclui uma variedade de equipamentos de alta qualidade, como luvas, caneleiras, aparadores, manoplas e muito mais. Todos os itens são feitos com materiais resistentes e duráveis, garantindo proteção e conforto durante o uso. Este kit proporciona uma experiência completa de treinamento, ajudando você a aprimorar suas habilidades e técnicas em diferentes disciplinas de artes marciais.', 'Inclui uma variedade de equipamentos essenciais\r\nFeito com materiais resistentes e duráveis\r\nGarante proteção e conforto durante o uso\r\nIdeal para treinos e competições de diversas artes marciais\r\n', 300, 'kit_completo.webp', 'ativo'),
(29, 'Mochila de Muay Thai', 'A mochila de Muay Thai é projetada para oferecer praticidade e funcionalidade no transporte de seus equipamentos e acessórios para treinos e competições. Com compartimentos espaçosos e organizados, permite armazenar luvas, caneleiras, protetores bucais e outros itens essenciais de forma segura e acessível. Feita com materiais duráveis e resistentes à água, protege seus pertences contra danos e mantém tudo organizado para facilitar sua rotina de treinamento.', 'Compartimentos espaçosos e organizados\r\nFeita com materiais duráveis e resistentes à água\r\nProtege seus pertences contra danos\r\nIdeal para transportar equipamentos e acessórios de Muay Thai de forma conveniente', 150, 'mochila_thai.webp', 'ativo'),
(30, 'Mochila de Jiu-Jitsu', 'A mochila de Jiu-Jitsu foi projetada para proporcionar praticidade e segurança no transporte de seus equipamentos e acessórios para treinos e competições. Com compartimentos específicos e acolchoados, permite armazenar com segurança quimono, rashguard, protetores, garrafa de água e outros itens essenciais. Feita com materiais duráveis e resistentes, é confortável de usar e protege seus pertences contra danos, garantindo que você esteja sempre pronto para suas sessões de treinamento.', 'Compartimentos específicos e acolchoados para proteção dos itens\r\nFeita com materiais duráveis e resistentes\r\nConfortável de usar durante o transporte\r\nIdeal para transportar equipamentos e acessórios de Jiu-Jitsu com praticidade e segurança\r\n', 139.99, 'mochila_jiu.webp', 'ativo'),
(31, 'Boné de Jiu-Jitsu', 'O boné de Jiu-Jitsu é o acessório perfeito para adicionar estilo e proteção aos seus treinos e competições. Feito com materiais duráveis e respiráveis, oferece conforto e proteção contra os raios solares enquanto você se concentra em aprimorar suas técnicas. Seu design ajustável garante um ajuste personalizado para diferentes tamanhos de cabeça, proporcionando um visual moderno e atlético durante suas atividades.', 'Feito com materiais duráveis e respiráveis\r\nProteção contra os raios solares\r\nDesign ajustável para um ajuste personalizado\r\nIdeal para treinos e competições de Jiu-Jitsu', 50, 'bonejiu.jpg', 'ativo'),
(32, 'Uniforme Feminino', 'O uniforme feminino de Kung Fu é projetado para oferecer conforto e estilo durante suas práticas e apresentações desta arte marcial milenar. Fabricado com materiais leves e resistentes, o uniforme proporciona liberdade de movimento e durabilidade para enfrentar os desafios dos treinos. Seu design elegante e feminino agrega um toque de sofisticação às suas performances, enquanto mantém a tradição e a autenticidade do Kung Fu.', 'Fabricado com materiais leves e resistentes\r\nOferece liberdade de movimento para práticas intensas\r\nDesign elegante e feminino\r\nIdeal para práticas e apresentações de Kung Fu com conforto e estilo', 150, 'kung_fu_feminino.webp', 'ativo'),
(33, 'Camisa de Kung Fu', 'A camisa de Kung Fu combina estilo e funcionalidade para os praticantes desta arte marcial milenar. Feita com materiais leves e respiráveis, oferece conforto e liberdade de movimento durante os treinos e apresentações. Seu design tradicional e elegante reflete a autenticidade e a tradição do Kung Fu, enquanto sua durabilidade garante uma longa vida útil para acompanhar sua jornada na arte marcial.', 'Fabricada com materiais leves e respiráveis\r\nOferece conforto e liberdade de movimento\r\nDesign tradicional e elegante\r\nIdeal para práticas e apresentações de Kung Fu com estilo e autenticidade', 39.99, 'camisakungfu.jpg', 'ativo'),
(34, 'Boné de Kickboxing', 'O boné de Kickboxing é o acessório ideal para adicionar estilo e proteção aos seus treinos e competições. Feito com materiais duráveis e respiráveis, oferece conforto e proteção contra os raios solares enquanto você se concentra em aprimorar suas técnicas. Seu design ajustável garante um ajuste personalizado para diferentes tamanhos de cabeça, proporcionando um visual moderno e atlético durante suas atividades.', 'Feito com materiais duráveis e respiráveis\r\nProteção contra os raios solares\r\nDesign ajustável para um ajuste personalizado\r\nIdeal para treinos e competições de Kickboxing', 59.99, 'bonekicyboxing.webp', 'ativo'),
(35, 'Nunchaku ', 'O nunchaku é uma arma tradicional das artes marciais, conhecida por sua versatilidade e precisão. Fabricado com materiais de alta qualidade e durabilidade, oferece um equilíbrio perfeito entre peso e manuseio, permitindo movimentos rápidos e precisos. Seu design ergonômico proporciona uma aderência confortável, garantindo controle total durante o treinamento. Ideal para praticantes de diversos estilos de artes marciais que buscam aprimorar suas habilidades de forma eficaz.', 'Fabricado com materiais de alta qualidade e durabilidade\r\nEquilíbrio perfeito entre peso e manuseio\r\nDesign ergonômico para uma aderência confortável\r\nIdeal para praticantes de várias artes marciais que buscam precisão e versatilidade', 160, 'nunchaku.jpg', 'ativo'),
(36, 'Camisa Feminina Jiu', 'A camisa feminina de Jiu-Jitsu oferece o equilíbrio perfeito entre conforto e estilo durante suas sessões de treino. Fabricada com materiais leves e respiráveis, proporciona liberdade de movimento e ventilação adequada para enfrentar até os treinos mais intensos. Seu design elegante e feminino complementa a silhueta, garantindo um visual moderno e atlético enquanto você domina as técnicas desta arte marcial.', 'Fabricada com materiais leves e respiráveis\r\nOferece liberdade de movimento e ventilação\r\nDesign elegante e feminino\r\nIdeal para sessões de treino de Jiu-Jitsu com conforto e estilo', 39.9, 'jiu-feminina.jpg', 'ativo'),
(37, 'Shorts UFC', 'Os shorts do UFC são projetados para oferecer o equilíbrio perfeito entre estilo e desempenho durante seus treinos e competições. Fabricados com materiais de alta qualidade e tecnologia avançada, proporcionam conforto, durabilidade e liberdade de movimento para enfrentar os desafios mais intensos. Seu design moderno e atlético reflete a autenticidade e a paixão pelo esporte, garantindo um visual profissional enquanto você se destaca no octógono.', 'Fabricados com materiais de alta qualidade e tecnologia avançada\r\nOferecem conforto, durabilidade e liberdade de movimento\r\nDesign moderno e atlético\r\nIdeal para treinos e competições de artes marciais, incluindo o UFC', 79.99, 'short_ufc.jpg', 'ativo'),
(38, 'Shorts de Muay Thai', 'Os shorts de Muay Thai são projetados para oferecer estilo e funcionalidade durante seus treinos e lutas nesta arte marcial tailandesa. Fabricados com materiais leves e resistentes, proporcionam conforto, mobilidade e durabilidade para enfrentar os desafios mais intensos do ringue. Seu design tradicional e atlético reflete a autenticidade e a paixão pelo Muay Thai, garantindo um visual profissional enquanto você se destaca nos combates.', 'Fabricados com materiais leves e resistentes\r\nOferecem conforto, mobilidade e durabilidade\r\nDesign tradicional e atlético\r\nIdeal para treinos e competições de Muay Thai', 69.99, 'short_muaythai.jpg', 'ativo'),
(39, 'Bandagem ', 'A bandagem é essencial para proteger e dar suporte às suas mãos durante os treinos e lutas. Feita com materiais resistentes e elásticos, oferece uma camada adicional de proteção aos seus punhos e pulsos, ajudando a prevenir lesões e proporcionando maior estabilidade durante os golpes. Seu design flexível permite uma aplicação fácil e confortável, garantindo que você possa treinar com confiança.', 'Feita com materiais resistentes e elásticos\r\nOferece proteção e suporte para punhos e pulsos\r\nAjuda a prevenir lesões e proporciona estabilidade durante os golpes\r\nDesign flexível para aplicação fácil e confortável', 59.99, 'bandagem_thai.jpg', 'ativo'),
(40, 'Moletom', 'O moletom de Muay Thai combina estilo e conforto para suas sessões de treino nesta arte marcial tailandesa. Fabricado com materiais macios e quentes, oferece proteção contra o frio durante os treinos ao ar livre ou em ambientes com ar condicionado. Seu design moderno e estampado reflete a autenticidade e a paixão pelo Muay Thai, garantindo um visual único enquanto você se dedica aos seus exercícios e técnicas.', 'Fabricado com materiais macios e quentes\r\nOferece proteção contra o frio durante os treinos\r\nDesign moderno e estampado, refletindo a paixão pelo Muay Thai\r\nIdeal para sessões de treino de Muay Thai com estilo e conforto', 200, 'moleton.jpg', 'inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_arte`
--

CREATE TABLE `produto_arte` (
  `idproduto_arte` int(10) UNSIGNED NOT NULL,
  `idarte_marcial` int(10) UNSIGNED NOT NULL,
  `idproduto` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `idtamanho` int(10) UNSIGNED NOT NULL,
  `idproduto` int(10) UNSIGNED NOT NULL,
  `descritivo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tamanho`
--

INSERT INTO `tamanho` (`idtamanho`, `idproduto`, `descritivo`) VALUES
(1, 1, '12 OZ\n\n'),
(2, 1, '8 OZ'),
(3, 1, '10 oz'),
(4, 12, 'p'),
(5, 12, 'm'),
(6, 12, 'P'),
(7, 12, 'M'),
(8, 12, 'G'),
(9, 2, 'G'),
(10, 3, '12 CM'),
(11, 3, '15 CM'),
(12, 3, '18 CM'),
(13, 4, 'p'),
(14, 4, 'M'),
(15, 4, 'G'),
(16, 5, 'P'),
(17, 5, 'M'),
(18, 5, 'G'),
(19, 6, 'P'),
(20, 6, 'M'),
(21, 6, 'G'),
(22, 7, '5 Metros'),
(23, 7, '10 Metros'),
(24, 7, '15 metros\r\n'),
(25, 8, 'P'),
(26, 8, 'M'),
(27, 8, 'G'),
(28, 9, 'Tamanho unico'),
(29, 10, '36 KG'),
(30, 10, '45 KG'),
(31, 10, '50 KG'),
(32, 11, 'P'),
(33, 11, 'M'),
(34, 11, 'G'),
(35, 11, 'GG'),
(36, 12, 'P'),
(37, 12, 'M'),
(38, 12, 'G'),
(39, 12, 'GG'),
(40, 13, '1.40 M'),
(41, 13, '1.80 M'),
(42, 14, 'G'),
(43, 14, 'GG'),
(44, 15, 'P'),
(45, 15, 'M'),
(46, 15, 'G'),
(47, 16, 'M'),
(48, 16, 'GG'),
(49, 17, 'Criança'),
(50, 17, 'Adulto'),
(51, 18, 'M'),
(52, 18, 'G'),
(53, 19, 'P'),
(54, 19, 'M'),
(55, 20, 'G'),
(56, 21, 'M'),
(57, 21, 'G'),
(58, 21, 'GG'),
(59, 22, 'M'),
(60, 22, 'G'),
(61, 24, 'M'),
(62, 24, 'G'),
(63, 25, 'M'),
(64, 25, 'G'),
(65, 25, 'GG'),
(66, 26, 'Tamanho unico'),
(67, 27, 'M'),
(68, 27, 'G'),
(69, 28, 'G'),
(70, 29, '25 CM'),
(71, 29, '30 CM'),
(72, 30, '25 CM'),
(73, 30, '30 CM'),
(74, 31, 'M'),
(75, 31, 'G'),
(76, 32, 'PP'),
(77, 32, 'M'),
(78, 32, 'G'),
(79, 33, 'M'),
(80, 33, 'G'),
(81, 34, 'M'),
(82, 34, 'G'),
(83, 35, 'Tamanho unico'),
(84, 36, 'P'),
(85, 36, 'M'),
(86, 36, 'G'),
(87, 37, 'M'),
(88, 37, 'GG'),
(89, 38, 'P'),
(90, 38, 'M'),
(91, 38, 'G'),
(92, 39, '8 METROS'),
(93, 39, '12 metros'),
(94, 39, '15 metros\r\n'),
(95, 40, 'P'),
(96, 40, 'M'),
(97, 40, 'G'),
(98, 40, 'GG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `tipo` enum('administrador','usuario') DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'Bruno', 'bruno@gmail.com', '$2y$10$djtr.z1wBlEBtMpEip3u1ulPa7S3JeQPG6rh5qbsKYX9eAPFHtrQW', 'administrador'),
(4, 'abc', 'abc@gmail.com', '$2y$10$kZmdqeS8KE6GinZZeXdLV.JZXxqvdW23vMwA2vsBR8dJBeFGNi9M6', 'usuario'),
(5, 'kauan', 'Kauan@gmail.com', '$2y$10$jzCVvKe/mSx.TlsAd43DheoxXIwK300XX4ILECrGphzO6x4HYomcC', 'usuario'),
(6, 'rodinei', 'rodnei@gmail.com', '$2y$10$j2nvxd5Y2N7tb/So9hQfUOi2LjZikWydSSWFjQraCnMLZMiBAz6Lq', 'usuario'),
(7, 'vania', 'vania@gmail.com', '$2y$10$73kiEHJ0WcTIIODNupF9..Ermj/f4320aUzwiAkytS/UvfkSRkuJy', 'usuario'),
(9, 'joao', 'joao@gmail.com', '$2y$10$QgUNCopTiC1t77iFzxcNb.YnVDGVzTwC1QC.tGAY6bap5QkO8Z1fe', 'usuario'),
(12, 'a@gmail.com', 'a@gmail.com', '$2y$10$FAR3j9aZZf2UfewO..OSKeup30hqRUUxyl99EP7LK825dSO6I26ka', 'usuario'),
(13, 'luciano', 'luciano@gmail.com', '$2y$10$Yusc2D3hUWUkkrbanvRJkuQ9IdqiAyfkYgZYdmC2qJv1GDNPFiZUG', 'usuario'),
(14, 'maria', 'maria@gmail.com', '$2y$10$CrPzupV2tKlqDsE4.I.JUuUbiw2h1x.Hb3eR2CHYZtGh50oqoMNyi', 'usuario'),
(15, 'pedro', 'pedro@gmail.com', '$2y$10$G4DCpuI9OZmOB6DG6i1XgORjLfHZiNFqRbMxpl7xFwI2KEuvyVchG', 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `idforma_pagamento` int(10) UNSIGNED NOT NULL,
  `data_venda` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`idvenda`, `idusuario`, `idforma_pagamento`, `data_venda`) VALUES
(1, 1, 1, '2024-11-18'),
(5, 1, 1, '2024-11-18'),
(6, 1, 1, '2024-11-18'),
(7, 1, 3, '2024-11-18'),
(8, 1, 1, '2024-11-18'),
(9, 1, 1, '2024-11-18'),
(10, 1, 1, '2024-11-18'),
(11, 1, 1, '2024-11-18'),
(12, 1, 3, '2024-11-18'),
(13, 1, 2, '2024-11-18'),
(14, 1, 2, '2024-11-18'),
(15, 1, 2, '2024-11-18'),
(17, 1, 2, '2024-11-18'),
(19, 1, 2, '2024-11-18'),
(20, 1, 2, '2024-11-18'),
(21, 1, 2, '2024-11-18'),
(22, 1, 2, '2024-11-18'),
(23, 1, 2, '2024-11-18'),
(28, 1, 1, '2024-11-18'),
(29, 1, 2, '2024-11-18');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arte_marcial`
--
ALTER TABLE `arte_marcial`
  ADD PRIMARY KEY (`idarte_marcial`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `cliente_FKIndex1` (`idusuario`);

--
-- Índices para tabela `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  ADD PRIMARY KEY (`idforma_pagamento`);

--
-- Índices para tabela `imagem_arte`
--
ALTER TABLE `imagem_arte`
  ADD PRIMARY KEY (`idimagem_arte`),
  ADD KEY `imagem_arte_FKIndex1` (`idarte_marcial`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`iditens`),
  ADD KEY `itens_FKIndex1` (`idvenda`),
  ADD KEY `itens_FKIndex2` (`idproduto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `produto_arte`
--
ALTER TABLE `produto_arte`
  ADD PRIMARY KEY (`idproduto_arte`),
  ADD KEY `produto_arte_FKIndex1` (`idproduto`),
  ADD KEY `produto_arte_FKIndex2` (`idarte_marcial`);

--
-- Índices para tabela `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`idtamanho`),
  ADD KEY `tamanho_FKIndex1` (`idproduto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idvenda`),
  ADD KEY `venda_FKIndex1` (`idforma_pagamento`),
  ADD KEY `venda_FKIndex2` (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arte_marcial`
--
ALTER TABLE `arte_marcial`
  MODIFY `idarte_marcial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  MODIFY `idforma_pagamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `imagem_arte`
--
ALTER TABLE `imagem_arte`
  MODIFY `idimagem_arte` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `iditens` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `produto_arte`
--
ALTER TABLE `produto_arte`
  MODIFY `idproduto_arte` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `idtamanho` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imagem_arte`
--
ALTER TABLE `imagem_arte`
  ADD CONSTRAINT `imagem_arte_ibfk_1` FOREIGN KEY (`idarte_marcial`) REFERENCES `arte_marcial` (`idarte_marcial`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `itens_ibfk_1` FOREIGN KEY (`idvenda`) REFERENCES `venda` (`idvenda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itens_ibfk_2` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto_arte`
--
ALTER TABLE `produto_arte`
  ADD CONSTRAINT `produto_arte_ibfk_1` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `produto_arte_ibfk_2` FOREIGN KEY (`idarte_marcial`) REFERENCES `arte_marcial` (`idarte_marcial`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tamanho`
--
ALTER TABLE `tamanho`
  ADD CONSTRAINT `tamanho_ibfk_1` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`idforma_pagamento`) REFERENCES `forma_pagamento` (`idforma_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
