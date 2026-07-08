## **DESAFIO: O Painel da Diretoria (Dashboard da Elite)** 

Um código SQL tecnicamente correto não serve de nada se não responder à dúvida do usuário final. Precisamos ter empatia na hora de projetar a consulta!

A FIFA quer analisar o desempenho histórico. Crie uma nova página de relatório chamada "Seleções de Elite".

#Sua Missão Autônoma:

1. **No Model (Selecao.php):** Crie um método chamado getSelecoesElite().
2. **A Consulta (DQL):** Usando o operador lógico BETWEEN ou >=, selecione apenas o País, o Técnico e os Títulos Mundiais das seleções ATIVAS que possuem entre 2 e 5 títulos mundiais. Ordene o resultado para que o país com mais títulos apareça primeiro no topo (DESC).
3. **No Controller (RelatorioController.php):** Crie um método elite() para invocar seu model.
4. **Na View:** Crie a tela views/relatorio_elite.php para renderizar essa tabela. Não esqueça de adicionar um botão/link no menu do sistema para acessar os dois relatórios!