#include <stdio.h>

void call(){
    printf("DY{flag}/n");
}

int main(){
    setvbuf(stdout, 0, _IONBF, 0);
    setvbuf(stdin, 0, _IOLBF, 0);
    int A;
    double a;

    for(int i=1; i<=5; i++){
        printf("--%d트째--\n",i);
        printf("crack_me : ");
        scanf("%d",&A);
        printf("crack_me : ");
        scanf("%lf",&a);
        if (A+a == 5){
            call();
            return 0;
        }
    }
    printf("re_try :)");
}