# lawfirm
Site em Wordpress para processo de Avaliação

1. Home somente com a viewport para desktop
2. Foram criados Custom Post Types (na function) para os blocos de conteúdo :
   1. Banner
   2. Áreas de Atuação
   3. Citação
   4. Quem Somos

3. Os Artigos usam os post usuais do Wordpress.
4. O formulário de contato no rodapé foi preparado para uso do ContactForm7

5. Nenhum plugin foi usado para o desenvolvimento desta página.

6. Foram criados blocos dentro de "template-parts" para separar o layout e deixá-lo mais fácil de se trabalhar.
7. Na camada de estilo foi usado o Bootstrap compilado para Sass. O arquivo principal de estilo é app.sass, usando o aplicativo Koala para transpilá-lo, mantendo o style.css vazio.