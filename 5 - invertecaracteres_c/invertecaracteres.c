#include <stdio.h>
#include <string.h>

int main(void)
{
    char palavra[100];

    //ler a palavra digitada pelo usuário
    printf("Digite uma palavra/string: ");
    scanf("%s", palavra);

    //calcular o tamanho da palavra
    int tamanho = strlen(palavra);

    //legenda do resultado
    printf("Invertida: ");

    //invertendo e imprimindo a string informada
    for (int i = 0; i < strlen(palavra); i++)
    {
        tamanho--;
        printf("%c", palavra[tamanho]);
    }

    printf("\n");

    return 0;
}