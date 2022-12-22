main:
        push    %rbp
        mov     %rbp, %rsp
        sub     %rsp, 32
        mov     DWORD PTR [%rbp-4], 0
        lea     %rdx, [%rbp-12]
        lea     %rsi, [%rbp-8]
        mov     %edi, OFFSET FLAT:.LC0
        mov     %eax, 0
        call    scanf
        mov     %edx, DWORD PTR [%rbp-8]
        mov     %eax, DWORD PTR [%rbp-12]
        cmp     %edx, %eax
        jge     .L2
        mov     DWORD PTR [%rbp-20], 0
        jmp     .L4
.L2:
        mov     %edx, DWORD PTR [%rbp-8]
        mov     %eax, DWORD PTR [%rbp-12]
        lea     %eax, [%rdx+%rax]
        mov     DWORD PTR [%rbp-4], %eax
        mov     %edx, DWORD PTR [%rbp-8]
        mov     %eax, DWORD PTR [%rbp-12]
        lea     %esi, [%rdx+%rax]
        mov     %edi, OFFSET FLAT:.LC1
        mov     %eax, 0
        call    printf
        mov     DWORD PTR [%rbp-20], 0
.L4:
        mov     %eax, DWORD PTR [%rbp-20]
        leave
        ret