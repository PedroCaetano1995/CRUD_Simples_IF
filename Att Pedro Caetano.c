#include <stdio.h>

int main(){

    int x1, x2 = 2, x3 = 2, x4 = 2, satisfaz;
    printf("Digite um numero:");
    scanf("%d", &x1);

    if (x1==x2 && x2==x3 && x3==x4 && x1!=x4)
    {
        satisfaz = 1;
        printf("Resultado: %d  Verdadeiro", satisfaz);
    }
    else{
        satisfaz = 0;
    }
    printf("Resultado: %d Falso", satisfaz);

}