#include <stdio.h>

int main(void)
{
    int numero, a, b, c, pertence;
    pertence = 0;
    a = 0;
    b = 1;

    //lendo o valor a ser informado pelo usuário
    printf("Digite um número: ");
    scanf("%d", &numero);

    //iniciar a sequência fibonacci até encontrar o número informado pelo usuário
    while (a < numero)
    {
        //calcular o termo seguinte
        c = a + b;

        //reinserir valores para recalcular o próximo termo
        a = b;
        b = c;

        // verifica se o número informado é igual ao termo da soma
        if (c == numero)
        {
            pertence = 1;
        }
    }

    //imprime o resultado da verificação do número informado
    if (pertence)
    {
        printf("O número informado pertence à sequência Fibonacci!!!\n");
    }
    else
    {
        printf("O número informado NÃO pertence à sequência Fibonacci!!!\n");
    }
}