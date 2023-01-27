#include <stdio.h>

void funcfuncfunc()
{
    printf("DY{This_is_fake_flag}/n");
}

int main()
{
    double cocoball;
    scanf("%lf", &cocoball);

    if (cocoball > 1 && cocoball < 2)
    {
        funcfuncfunc();
    }
    else
    {
        return 0;
    }
}