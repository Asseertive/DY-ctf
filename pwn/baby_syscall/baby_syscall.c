#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#define _CRT_SECURE_NO_WARNINGS

void g00dg00dg00d()
{
    printf("hello~");
    system("/bin/sh");
}

int main()
{
    setvbuf(stdout, 0, _IONBF, 0);
    setvbuf(stdin, 0, _IOLBF, 0);
    char key[10];
    printf("key ? : ");
    scanf("%s", key);
    if (strcmp(key, "Asseertive") == 0)
    {
        g00dg00dg00d();
    }

    else
    {
        puts(":p");
    }
    return 0;
}