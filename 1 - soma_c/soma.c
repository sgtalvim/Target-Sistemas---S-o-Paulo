#include <stdio.h>

int main(void)
{
    int indice = 13;
    int soma = 0;
    int k = 0;

    while (k < indice)
    {
        k = k + 1;
        soma = soma + k;
    }

    printf("soma = %i\n", soma);
}