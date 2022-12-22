#include <stdio.h>

int main(void){
    int a,b,sum=0;
    scanf("%d %d",&a,&b);
    if (a<b) return 0;
    sum = a+b;
    printf("%d",sum);
    return 0;
}