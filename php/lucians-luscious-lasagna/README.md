<h1 align="center"> PHP | Lucian's Luscious Lasagna </h1>

Neste exercício, você temos um código PHP que nos ajuda a preparar uma deliciosa lasanha com base no seu livro de culinária favorito. São 5 tasks, todas relacionadas ao tempo gasto no preparo da lasanha.

## Instruções

1. A função expectedCookTime() retorna o tempo esperado de cozimento da lasanha em minutos. De acordo com o livro de receitas, o tempo esperado é de 40 minutos.

2. A função remainingCookTime($actualCookTime) recebe como argumento o tempo real em minutos que a lasanha já ficou no forno e calcula o tempo restante de cozimento com base no tempo esperado de cozimento da tarefa anterior. Se o tempo restante for negativo, a função retorna 0.

3. A função totalPreparationTime($numLayers) recebe como argumento o número de camadas adicionadas à lasanha e calcula o tempo total de preparação em minutos, considerando que cada camada leva 2 minutos para ser preparada.

4. A função totalElapsedTime($numLayers, $actualCookTime) recebe dois argumentos: o número de camadas adicionadas à lasanha e o tempo real em minutos que a lasanha já ficou no forno. A função retorna o tempo total de trabalho gasto na preparação da lasanha, que é a soma do tempo de preparação em minutos com o tempo em minutos que a lasanha já ficou no forno até o momento.

5. A função alarm() não recebe nenhum argumento e retorna uma mensagem indicando que a lasanha está pronta para ser consumida. Neste caso, a mensagem retornada é "Ding!".
